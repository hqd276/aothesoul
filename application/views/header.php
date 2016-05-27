<!-- mp-menu -->
<nav id="mp-menu" class="mp-menu">
    <div class="mp-level">
        <ul>
            <li class="<?php if($page=='') echo 'active';?>"><a href="<?php echo base_url();?>">Trang chủ</a></li>
            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url('ve-chung-toi');?>">Giới thiệu</a></li>
            <li class="<?php if($page=='product') echo 'active';?>"><a href="<?php echo base_url('danh-muc-san-pham');?>">Sản phẩm</a></li>
            <li class="<?php if($page=='news') echo 'active';?>"><a href="<?php echo base_url('tin-tuc');?>">Tin tức</a></li>
            <li class="<?php if($page=='contact') echo 'active';?>"><a href="<?php echo base_url('lien-he');?>">Liên hệ</a></li>
            <li class="<?php if($page=='gallery') echo 'active';?>"><a href="<?php echo base_url('thu-vien-anh');?>">Ảnh ọt</a></li>
        </ul>

    </div>
</nav>
<!-- /mp-menu -->

<div id="top" class="std">&nbsp;</div>
<div id="header">
    <div id="header_content">
        <h1 id="logo"><a href="/"><img src="<?php echo base_url();?>assets/images/logo.png"/></a></h1>
        <!-- <div id="top_menu">
            <a href="">Tin tức</a>&nbsp;<a href="">Nhạc</a>&nbsp;<a href="">Tv</a>
        </div>
        <div id="login_area">
            <div id="button_login"><a href="">Đăng nhập</a>&nbsp;/&nbsp;<a href="">Đăng ký</a></div>
        </div>
        <div id="search_area">
            <input type="text" placeholder="tìm kiếm"/>
        </div> -->
        <a href="#" id="trigger" class="btn-toogle-res-menu"></a>
        <div class="clear"></div>
    </div>
</div>
<div id="menu">
    <div id="menu_content">
        <ul>
            <li class="<?php if($page=='') echo 'active';?>"><a href="<?php echo base_url();?>">Trang chủ</a></li>
            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url('ve-chung-toi');?>">Giới thiệu</a></li>
            <li class="<?php if($page=='product') echo 'active';?>"><a href="<?php echo base_url('danh-muc-san-pham');?>">Sản phẩm</a></li>
            <li class="<?php if($page=='news') echo 'active';?>"><a href="<?php echo base_url('tin-tuc');?>">Tin tức</a></li>
            <li class="<?php if($page=='contact') echo 'active';?>"><a href="<?php echo base_url('lien-he');?>">Liên hệ</a></li>
            <li class="<?php if($page=='gallery') echo 'active';?>"><a href="<?php echo base_url('thu-vien-anh');?>">Ảnh ọt</a></li>
        </ul>
    </div>
</div>