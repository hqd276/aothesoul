<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<title>
  <?php echo strip_tags((isset($title))?$title:$setting['title']['data']->description) ?>
</title>
<meta name="description" content="<?php echo strip_tags((isset($description))?$description:$setting['description']['data']->description) ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<?php if (isset($item)){?>
<meta property="og:title" content="<?php echo strip_tags($item['title']) ?>"/>
<meta property="og:description" content="<?php echo strip_tags( $item['description']) ?>"/>
<meta property="og:url" content="<?php echo base_url().'chi-tiet/'.$item['slug']?>" />
<meta property="og:image" content="<?php echo base_url().'uploads/news/'.$item['image']?>" />
<?php }?>
<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/normalize.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="<?php echo base_url();?>assets/js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/lightbox.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css?<?php echo time();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_common.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/component.css" />

<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700,900,300' rel='stylesheet' type='text/css'>
<script lang="javascript">
(function() {var _h1= document.getElementsByTagName('title')[0] || false;
var product_name = ''; if(_h1){product_name= _h1.textContent || _h1.innerText;}var ga = document.createElement('script'); ga.type = 'text/javascript';
ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=f006f9ab84730f1660b256477324d998&data=eyJzc29faWQiOjMyOTk1ODIsImhhc2giOiIyNGFlYTllODIxNDk4OGUzMTBlYmM4N2RiNTA4NDZkYyJ9&pname='+product_name;
var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>	
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=896282510465005";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-page">
	<div class="mp-pusher" id="mp-pusher">
  	<?php echo $template['partials']['header']; ?>
  	<main>
  		<?php echo $template['body']; ?>
  	</main>

  	<?php echo $template['partials']['footer']; ?>
  	</div>
</div>


<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/mlpushmenu.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
</body>

</html>