<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">

<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
	<div class="row">
	  	<div class="menu-left col-sm-3">
	  		<div class="panel-group" id="accordion">
  			<?php if($list_categories){
  				foreach ($list_categories as $key => $value) {?>
  				<div class="cat-group">
	            <h3>
                    <a 
                    <?php if ($value['child']){ 
                    	echo ' data-toggle="collapse" data-parent="#accordion" href="#collapse'.$key.'"';
                	}else{ 
                		echo 'href="'.base_url("danh-muc-san-pham/".$value['slug'].'/'.$value['id']).'"'; 
            		}?>>
            		<?php echo $value['name']?>
            		</a>
                </h3>
	            <?php if ($value['child']){?>
	            <ul id="collapse<?php echo $key?>" class="panel-collapse collapse list-unstyled <?php if($parent == $value['id']) echo 'in'?>">
	            	<?php foreach ($value['child'] as $k => $v) {?>
	                    <li><a class="<?php if ($cat==$v['id']) echo 'active' ?>" href="<?php echo base_url('danh-muc-san-pham/'.$v['slug'].'/'.$v['id']);?>"><?php echo $v['name']?></a></li>
	            	<?php }?>
	            </ul>
	            
	            <?php }?>
	            </div>
	        <?php }
		        }?>
		    </div>
	  	</div>
		<div class="product-form col-sm-9 wrapper-parent article">
			<div class="row">
			<?php $i=1;
			foreach ($list_product as $key => $value) {?>
				
					<div class="item col-sm-3">
						<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug'].'/'.$value['id']?>">
							<img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
							<?php echo $value['title'];?>
						</a>
					</div>
					<?php if ($i%4 == 0){?>
				</div>
				<div class="row">
					<?php }?>
				
			<?php $i++;
			}
			?>
			</div>
			<div class="clearfix"></div>
			<nav>
			  <ul class="pager">
			    <li class="previous <?php if ($link_prev=='#') echo 'disabled'?>"><a href="<?php echo $link_prev;?>"><span aria-hidden="true">&larr;</span> Trước</a></li>
			    <li class="next <?php if ($link_next=='#') echo 'disabled'?>"><a href="<?php echo $link_next;?>">Sau <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
		</div>
	</div>
	<div class="clearfix"></div>
</div>