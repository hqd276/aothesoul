<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model(array('admin/modelcategory','admin/modelnews','admin/modelvideo'));
		$data = array();
		

		$data['page'] = $page;

		$this->load->model(array('admin/modelsetting'));

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;
		$data['show_slide'] = false;

		$list_categories = $this->modelcategory->getCategories(array('status'=>1,'type'=>1,'parent'=>-1),null," ORDER BY `order`");
		foreach ($list_service as $key => $value) {
			$list_service[$key]['items'] = $this->modelnews->getNews(array('category_id'=>$value['id']));
		}
		$data['list_categories'] = $list_categories;

		$data['txtSearch'] = $this->input->get('txtSearch');
		
		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
	
}
