<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							<?php foreach($categorys as $category) {?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span><?= $category->category_name ?></a></h4>
								</div>
							</div>
							<?php } ?>						
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php foreach($brands as $brand){
										?>
									<li><a href=""><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span> <?= $brand->brand_name?></a></li>
									<?php } ?>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?= base_url('assets/images/home/shipping.jpg')?>" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>

				<!-- side nav -->
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>						
						<div  id="allProduct">
						
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url:'<?= base_url("home/product")?>',
			type:'POST',		
			person:'',		
			success:function(data){
				this.person=JSON.parse(data);
				//console.log(this.person.data.product[0].name);
					var allProduct="";
				for(i=0; i<=this.person.data.product.length; i++)
				{
					// console.log(this.person.data.product[i].id);
				}
			// 		// console.log(i);
			// 		// console.log(this.person.data.product[i].price);
				
			// 	allProduct+= '<div class="col-sm-4"> <div class="product-image-wrapper"><div class="single-products">'
			// 						+'<div class="productinfo text-center">'
			// 							+'<img src="<?= base_url('assets/images/home/product1.jpg')?>" alt="" />'
			// 							// +'<h2>'+this.person.data.product[i].id+'</h2>'
			// 							 +'<p>'+this.person.data.product[0].name+'</p>'
			// 							+'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></div>'
			// 						+'<div class="product-overlay">'
			// 							+'<div class="overlay-content">'
			// 								+'<h2>$56</h2>'
			// 								+'<p>Easy Polo Black Edition</p>'
			// 								+'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'
			// 							+'</div>'
			// 						+'</div>'
			// 					+'</div>'
			// 					+'<div class="choose">'
			// 						+'<ul class="nav nav-pills nav-justified">'
			// 							+'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>'
			// 							+'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>'
			// 						+'</ul>'
			// 					+'</div>'
			// 				+'</div>'
			// 			+'</div>';
			// 		}
					document.getElementById("allProduct").innerHTML = allProduct;
				//$("#").html(allProduct);

			}
		})
	})
</script>
						