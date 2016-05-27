<div class="content">
    <div id="banner_content">
        <div id="sys_slide_home">
        	<?php foreach ($banners as $key => $value){?>
		    <div class="slide-item">
                <a href=""><img src="<?php echo base_url("uploads/banner/".$value['image']); ?>"></a>
            </div><!--end: .slide-item -->
		   	<?php } ?>
        </div>
    </div>
    <?php foreach ($categories as $key => $value){?>
    <div class="content_block clearfix">
        <div class="content_title"><a href=""><?php echo $value['name']?></a></div>
        <div class="clear" style="height: 1px">&nbsp;</div>
        <div class="video_bl">
        	<?php foreach ($value['products'] as $k => $v){?>
			<div class="article" data-merge="2">
                <a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>"><img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$v['image']?>"></a>
            </div>
			
			<?php }?>
        </div>

    </div>
    <?php } ?>
</div>