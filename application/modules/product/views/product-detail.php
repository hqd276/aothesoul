<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">
<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
	<section id="product-detail">
	  	<h2 class="product-title"><?php echo $title?></h2>

		<p class="description"><i><strong> <?php echo $item['description']?></strong></i></p>
		<hr>
		<div class="col-sm-5">
			<img class="img-responsive product-image" src="<?php echo base_url().'uploads/product/'.$item['image']?>">
			<table class="product-size text-uppercase text-center">
				<tr>
					<td colspan="3">
						Giá: <?php echo number_format($item['price']); ?> VND
					</td>
					<td colspan="3">
						Sản xuất tại: Viet Nam
					</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>M</td>
					<td>L</td>
					<td>XL</td>
					<td>XXL</td>
					<td>XXXL</td>
				</tr>
			</table>
		</div>
		<div class="col-sm-7">
			<div class="detail" id="detail"><?php echo $item['detail']?></div>
			<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet-san-pham/'.$item['slug'].'/'.$item['id']?>" data-width="100%" data-numposts="5"></div>
		</div>

		<div class="clearfix"></div>
		<div class="product-created">
			<span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?>
		</div>
		
		<ul class="list-unstyled other-product">
		<?php if (count($other_product)>0) {
			foreach ($other_product as $key => $value) {?>
				<li class="col-sm-2">
					<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>"> 
						<img class="pull-left" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
						<?php echo $value['title']?>
					</a>
				</li>
		<?php	}
		}?>
		</ul>
		<div class="clearfix"></div>
	</section>
</div>