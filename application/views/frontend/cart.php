<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<p id="cartrahib"></p>
			<table class="table table-condensed">
				<thead>
						<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody id="tBody">					
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="chose_area">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span id="total">₹ Total price</span></li>
						<li>Eco Tax <span>9 %</span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total <span>₹ text</span></li>
					</ul>
					<a class="btn btn-default update" href="">Update</a>
					<a class="btn btn-default check_out" href="">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->

<!-- JQuery start Here -->
<script type="text/javascript">

function cartData()
{		
	jQuery.ajax({
		url:'<?= base_url("home/testData")?>',
		post:'POST',
		dataType: 'json',
		success:function(data)
			{
			var trHTML="";
			var total=0;
			for(i=0; $=i<data.result.carts.length; i++)
				{
					trHTML+='<tr id="cartRow'+data.result.carts[i].cart_id+'" class="cartDataClass">'
					+'<td class="cart_product">'
					+'<a href=""><img src="<?= base_url("assets/images/upload/product/")?>'+data.result.carts[i].image+'" alt="" style="height:15vh;"></a>'
					+'</td>'
					+'<td class="cart_description">'
					+'<h4><a href="">'
					+data.result.carts[i].name
					+'</a><h4>'
					+'<p>Web ID: 10897</p>'
					+'<td class="cart_price">'
					+'<p>₹ '+data.result.carts[i].price+'</p></td>'
					+'<td class="cart_quantity">'
					+'<div class="cart_quantity_button">'
					+'<a class="cart_quantity_up" href="java:void(0)" onclick="addQuantity('+data.result.carts[i].cart_id+')">+</a>'
					+'<p id="quantity'+data.result.carts[i].cart_id+'">'+data.result.carts[i].cart_quantity+'</p>'
					+'<a class="cart_quantity_down" href="java:void(0)" id="sub'+data.result.carts[i].cart_id+'" onclick="subQuantity('+data.result.carts[i].cart_id+')"> - </a>'
					+'</div>'
					+'</td>'
					+'<td class="cart_total">'
					+'<p  class="cart_total_price">₹ '+data.result.carts[i].cart_quantity*data.result.carts[i].price+'</p></td>'
					+'<td class="cart_delete">'
					+'<a class="cart_quantity_delete" href="java:void(0)" onclick="cartDelete('+data.result.carts[i].cart_id+')"><i class="fa fa-times"></i></a>'
					+'</td>'
					+'</tr>';
				}

			jQuery(".cartDataClass").remove();
			jQuery("#tBody").append(trHTML);
			jQuery("#total").append(total);

			}
	});

}

function addQuantity(id)
{

	var a=jQuery("#quantity"+id).text(); 	
	a++ ;
	jQuery.ajax({
		url:'<?= base_url("home/cartUpdate/") ?>'+id,
		data:'quantity='+a,
		type:'POST',
		success:function(data)
		{
			jQuery("#quantity"+id).html(a,cartData());
			var a=jQuery("#sub"+id).removeAttr("disabled");			
		}
	});

}

function subQuantity(id)
{
	var a=jQuery("#quantity"+id).text(); 	

	if(a <= 1)
	{
		jQuery("#quantity"+id).html('DELETE');
		jQuery("#sub"+id).attr("disabled", true); 		
	}
	else{
		a--;
			jQuery.ajax({
				url:'<?= base_url("home/cartUpdate/") ?>'+id,
				data:'quantity='+a,
				type:'POST',
				success:function(data)
				{		
					jQuery("#quantity"+id).html(a,cartData()); 	
				}
			});

		}		
}


$(document).ready(function(){
$("#cartrahib").html("",cartData());			
});


function cartDelete(id)
{	
	jQuery.ajax({
		url:'<?= base_url("home/cartDelete/") ?>'+id,
		type:'POST',
		success:function(data)
		{
			jQuery("#cartRow"+id).hide(2000)
			jQuery("#cartRow"+id).css("background","#e27676");
			alertify.error("<h3>Delete Succesfully</h3>");
		}
	});
}
</script>