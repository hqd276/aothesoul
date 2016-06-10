<div id="top" class="std">&nbsp;</div>
<div id="header">
    <div id="header_content">
        <div class="col-sm-2">
        <h1 id="logo">
            <a href="/"><img src="<?php echo base_url();?>assets/images/logo.png"/></a>
        </h1>
        </div>
        <div class="col-sm-7">
        <form class="" method="get" action="<?php echo base_url();?>danh-muc-san-pham/">
            <div id="search-area" class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="margin-right: -2px;" aria-expanded="false"> 
                            All
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <?php if($list_categories){
                            foreach ($list_categories as $key => $value) {?>
                                <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url("danh-muc-san-pham/".$value['slug'].'/'.$value['id']); ?>"><?php echo $value['name']?></a></li>
                        <?php }
                            }?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <input type="text" class="form-control" name="txtSearch" placeholder="Tìm kiếm" value="<?php echo $txtSearch; ?>">
                <span class="input-group-btn">
                    <button id="plsWaitSearchBtn" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </form>
        </div>
        <div class="col-sm-3">
        <ul class="nav navbar-nav navbar-right text-uppercase">
            <li class="dropdown shellOff">
                <a href="#" class="dropdown-toggle tpnav " data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="hidden-sm cart-checkoutHide">Danh mục <span class="caret"></span></span>
                <span style="font-size:27px;" class="visible-sm cart-checkoutHide"><i class="fa fa-bars cart-checkoutHide"></i></span>
                </a>
                <ul class="featured_menu dropdown-menu" role="menu">
                    <?php if($list_categories){
                        foreach ($list_categories as $key => $value) {?>
                            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url("danh-muc-san-pham/".$value['slug'].'/'.$value['id']); ?>"><?php echo $value['name']?></a></li>
                    <?php }
                        }?>
                </ul>
            </li>
            <li class="shellOff"><a href="<?php echo base_url();?>lien-he">Liên hệ</a></li>
        </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>