<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">

<div id="banner_content">
    <div id="sys_slide_home">
        <?php foreach ($banners as $key => $value){?>
        <div class="slide-item">
            <a href="<?php echo base_url($value['link']); ?>"><img src="<?php echo base_url("uploads/banner/".$value['image']); ?>"></a>
        </div><!--end: .slide-item -->
        <?php } ?>
    </div>
    <div class="small-slide">
        <div class="container">
            <div id="hot_slide_home">
                <?php foreach ($small_banners as $key => $value){?>
                <div class="slide-item">
                    <a href="<?php echo base_url($value['link']); ?>"><img src="<?php echo base_url("uploads/banner/".$value['image']); ?>"></a>
                </div><!--end: .slide-item -->
                <?php } ?>
            </div>
        </div>
    </div>
    
</div>

<div class="content">
    
    <?php foreach ($categories as $key => $value){?>
    <div class="content_block clearfix">
        <div class="content_title"><a href="<?php echo base_url().'danh-muc-san-pham/'.$value['slug'].'/'.$value['id']?>"><?php echo $value['name']?></a></div>
        <div class="clear" style="height: 2px;    background: #000;">&nbsp;</div>
        <div class="video_bl">
        	<?php foreach ($value['products'] as $k => $v){?>
			<div class="article">
                <a href="<?php echo base_url().'chi-tiet-san-pham/'.$v['slug'].'/'.$v['id']?>">
                    <img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$v['image']?>">
                    <?php echo $v['title']?>
                </a>
            </div>
			
			<?php }?>
        </div>

    </div>
    <?php } ?>
</div>