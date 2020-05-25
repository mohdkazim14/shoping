<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" ><a href="<?= base_url("admin/users")?>"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span>Users</a></h4>								
								</div>

								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?= base_url("admin/cart")?>"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span>Cart</a></h4>								
								</div>

								<div class="panel-heading">
									<h4 class="panel-title" id="category"><a href="<?= base_url("admin/category")?>"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span>Category</a></h4>				
								</div>

								<div class="panel-heading">
									<h4 class="panel-title" id="product"><a href="<?= base_url("admin/product")?>"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span>product</a></h4>							
								</div>

								<div class="panel-heading">
									<h4 class="panel-title" id="brand"><a href="<?= base_url("admin/brand")?>"><span class="badge pull-right"><i class="fa fa-hand-o-left" aria-hidden="true"></i> </span>Brand</a></h4> 							
								</div>

							</div>

						</div>
						<!--/brands_products-->						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?= base_url('assets/images/home/shipping.jpg')?>" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>

				<div class="col-sm-9">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Users Details</h2>
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover">
					<tr>
						<td>S.No</td>
						<td>name</td>
						<td>Email</td>
						<td>Created</td>
						<td>Last Login</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
					<?php foreach($carts as $n=>$cart)
					{ ?>
						<tr>
							<td><?= $n+1; ?></td>
							<td><?= $cart->name; ?></td>
							
							<?php if($cart->status==1){?>
								<td>Un-Block</td>
								<td>
									<button onclick="unBlock(<?= $user->id?>)" id="unblock<?= $user->id?>"  class="btn btn-info">Un-Block</button>
							<?php } else{?>
								<td>Block</td>
								<td>
									<button onclick="block(<?= $user->id?>)" id="block<?= $user->id?>" class="btn btn-danger">Block</button>
							<?php }?>													
							</td>
						</tr>
					<?php }?>
				</table>		
			</div>
		</div>					
	</div>
</div>
		


				<!-- side nav -->
				
				<div id="allData">
									
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		
$(document).ready(function()		
{
});

	</script>