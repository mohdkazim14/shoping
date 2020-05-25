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
				 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o" aria-hidden="true"></i> ADD</button><p></p>
				<table class="table table-hover">
					<tr>
						<th>S.No</th>
						<th>Image</th>
						<th>Name</th>
						<th>price</th>
						<th>category</th>
						<th>brand</th>
						<th>quantity</th>
						<th>Action</th>
					</tr>
					<?php foreach($products as $n=>$product)
					{ ?>
						<tr>
							<td><?= $n+1; ?></td>
							<td style="width:10%;"><img src="<?= base_url('assets/images/upload/product/'.$product->image)?>" alt="" / style="height:15vh;"></td>	
							<td><?= $product->name; ?></td>
							<td><?= $product->price; ?></td>
							<td><?= $product->category; ?></td>
							<td><?= $product->brand; ?></td>
							<td><?= $product->quantity; ?></td>
							<td><button class="btn btn-danger">Delete </button> / <button class="btn btn-success" onclick="editProduct(<?= $product->id?>)">Edit </button></td>
							
						</tr>
					<?php }?>
				</table>		
			</div>
		</div>					
	</div>
</div>
		
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD MORE PRODUCT</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
				<div class="col-md-6">
					<?php echo form_open_multipart('admin/addPtoduct',["id"=>"updData"]);?>

        			<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">   
					<p class="error" id="name_error"></p>

					<label>Category</label>
					<select class="form-control" name="category" id="category">
						<option disabled="true" selected="true">-- Select-category--</option>
						<?php 
							foreach($categorys as $category){ ?>
								<option value="<?= $category->id ?>"><?= $category->category_name?></option>
							<?php }
						?>
					</select>
					<p class="error" id="category_error"></p> 

					<label>quantity</label>
					<input type="text" class="form-control" placeholder="Enter quantity" name="quantity" id="quantity">   
					<p class="error" id="quantity_error"></p> 
        		</div>
				<div class="col-md-6">
					<label>Price</label>
					<input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">   
					<p class="error" id="price_error"></p>  							
				
					<label>Brand</label>
					<select class="form-control" name="brand" id="Brand">
						<option disabled="true" selected="true">-- Select-Brand--</option>
						<?php 
							foreach($brands as $brand){ ?>
								<option value="<?= $brand->id ?>"><?= $brand->brand_name?></option>
						<?php }
						?>
					</select>
					<p class="error" id="Brand_error"></p> 

				    		 		
					<label>offer</label>
					<input type="text" class="form-control" placeholder="Enter offer" name="offer" id="offer">   
					<p class="error" id="offer_error"></p>   
        		</div>    		
        		<div class="col-md-12">
					<input type="file"  name="userfile" id="image">   
					<p class="error" id="image_error"></p>     		
					<label>Description</label>
					<textarea class="form-control" name="description" id="description"></textarea>
					<p class="error" id="description_error"></p>   
					<input type="submit" name="submit" value="Add"  id="addProduct" class="btn btn-primary">
					</form>
				</div>						
       		</div>
       	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD MORE PRODUCT</h4>
        </div>
        <div class="modal-body">
        	<div class="row">
				<div class="col-md-6">
					<?php echo form_open_multipart('admin/addPtoduct',["id"=>"updData"]);?>

        			<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">   
					<p class="error" id="name_error"></p>

					<label>Category</label>
					<select class="form-control" name="category" id="category">
						<option disabled="true" selected="true">-- Select-category--</option>
						<?php 
							foreach($categorys as $category){ ?>
								<option value="<?= $category->id ?>"><?= $category->category_name?></option>
							<?php }
						?>
					</select>
					<p class="error" id="category_error"></p> 

					<label>quantity</label>
					<input type="text" class="form-control" placeholder="Enter quantity" name="quantity" id="quantity">   
					<p class="error" id="quantity_error"></p> 
        		</div>
				<div class="col-md-6">
					<label>Price</label>
					<input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">   
					<p class="error" id="price_error"></p>  							
				
					<label>Brand</label>
					<select class="form-control" name="brand" id="Brand">
						<option disabled="true" selected="true">-- Select-Brand--</option>
						<?php 
							foreach($brands as $brand){ ?>
								<option value="<?= $brand->id ?>"><?= $brand->brand_name?></option>
						<?php }
						?>
					</select>
					<p class="error" id="Brand_error"></p> 

				    		 		
					<label>offer</label>
					<input type="text" class="form-control" placeholder="Enter offer" name="offer" id="offer">   
					<p class="error" id="offer_error"></p>   
        		</div>    		
        		<div class="col-md-12">
					<input type="file"  name="userfile" id="image">   
					<p class="error" id="image_error"></p>     		
					<label>Description</label>
					<textarea class="form-control" name="description" id="description"></textarea>
					<p class="error" id="description_error"></p>   
					<input type="submit" name="submit" value="Add"  id="addProduct" class="btn btn-primary">
					</form>
				</div>						
       		</div>
       	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
		function editProduct(id)
		{
			alert(id);
		}	
$(document).ready(function()		
{


	// $("#updData").on("submit",function(e)
	// {
	// 	e.preventDefault();
	// 	$.ajax({
	// 		url:'<?= base_url("admin/addPtoduct")?>',
	// 		type:'POST',
	// 		data: new FormData(this),
	// 		dataType:'JSON',
	// 		content:false,
	// 		cache:false,
	// 		processData:false,
	// 		success:function(data)
	// 		{
	// 			console.log(data);
	// 			if(data.status==201){

	// 				if(name_error!="")
	// 				{
	// 					$("#name_error").html(data.name_error);
	// 				}
	// 				else{
	// 					$("#name_error").html('');	
	// 				}
	// 				if(quantity_error!="")
	// 				{
	// 					$("#quantity_error").html(data.quantity_error);
	// 				}
	// 				else{
	// 					$("#quantity_error").html('');	
	// 				}
	// 				if(price_error!="")
	// 				{
	// 					$("#price_error").html(data.price_error);
	// 				}
	// 				else{
	// 					$("#price_error").html('');	
	// 				}
	// 				if(offer_error!="")
	// 				{
	// 					$("#offer_error").html(data.offer_error);
	// 				}
	// 				else{
	// 					$("#offer_error").html('');	
	// 				}

	// 				if(description_error!="")
	// 				{
	// 					$("#description_error").html(data.description_error);
	// 				}
	// 				else{
	// 					$("#description_error").html('');	
	// 				}
	
	// 			}

	// 		}
	// 	})
	// 	// alert("hello");
	// })
});

	</script>