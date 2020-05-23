<section id="form" style=" margin-top: 00px;"><!--form-->

	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account <br><span class="error" id="errorMsg"> </span></h2>
					<form action="#">
						<input type="email" placeholder="Email" id="login_email"/>
						<p class="error" id="l_email_error"></p>
						<input type="password" placeholder="Email Password" id="login_password"/>
						<p class="error" id="L_password_error"></p>
						<p id="callForgetModel">FORGET PASSWORD</p>
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="button" id="login" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
					<h2>New User Signup!</h2>
					<form action="#" id="registerForm">
						<input type="text" placeholder="Name" id="name"/>
						<p class="error" id="name_error"></p>
						<input type="email" placeholder="Email Address" id="email"/>
						<p class="error" id="email_error"></p>
						<input type="password" placeholder="Password" id="password"/>
						<p class="error" id="password_error"></p>
						<button type="button" id="register" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
		</div>
	</div>
</section><!--/form-->

<div class="model" id="forgetModel">
	<div class="model-header">
		<a href="java:void(0)" id="cross">Close</a>
	</div>
	<div class="model-body">
		<form class="form-group">
			<div id="emailPart">
				<h1 style="text-align:center;">FORGET PASSWORD</h1>
				<input type="text" id="forgetEmail" class="form-control forget" placeholder="Enter Your email">
				<input type="button" id="forgetButton" value="Submit" class="btn btn-succcess forget" style="width:100%; margin-top: 10px;">
			</div>
			<div id="otpPart">
				<h1 style="text-align:center;">SUBMIT YOUR OTP</h1>
				<input type="text" id="optEmail" class="form-control forget" placeholder="Enter Your email">
				<input type="button" id="otpButton" value="Submit" class="btn btn-succcess forget" style="width:100%; margin-top: 10px;">
			</div>
		</form>
	</div>
	<div class="model-footer">		
	</div>
	<div class="insideModel">
		
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		// $("#forgetModel").hide();
		$("#otpPart").hide();
		$("#cross").click(function(){
			$("#forgetModel").hide(1000);
		});

		$("#callForgetModel").click(function()
		{
			$("#forgetModel").show(2000);

			// send email id for forget 			
	});
		
		$("#forgetButton").click(function()
			{
				var email=$("#forgetEmail").val();
				$.ajax({
				url:'<?= base_url("auth/forgetPassword")?>',
				type:'POST',
				dataType:'JSON',
				data:'email='+email,
				success:function(data)
				{
					alert(data.status);
				}
			})
		});

		// register And Login 

		$("#login").click(function(){
			var email=$("#login_email").val();
			var password=$("#login_password").val();
			$.ajax({
				url:'<?= base_url("auth/login")?>',
				type:'POST',
				dataType:'JSON',
				data:'&email='+email+'&password='+password,
				success:function(data)
				{
					$("#l_email_error").html('');
					$("#L_password_error").html('');
					console.log(data.status);
					if(data.status==201){
						if(data.l_email_error !='')
						{
							$("#l_email_error").html(data.l_email_error);
						}
						else{
							-$("#l_email_error").html('');
						}

						if(data.L_password_error !='')
						{
							$("#L_password_error").html(data.L_password_error);
						}
						else{
							-$("#L_password_error").html('');
						}						
					}
					if(data.status==203)
					{
						$("#errorMsg").html("<div class='alert alert-danger'>"+data.data+"</div>");					
					}
					else
					{
						$("#errorMsg").html('');
						window.location.href="<?= base_url("home/index");?>"; 
					}
					if(data.status==200){
							$("#registerForm")[0].reset(); 
							$("#registerForm").html('<div class="alert alert-success">'+data.data+'</div> '); 
						}
				}
			});
		})

		$("#register").click(function(){

			var name=$("#name").val();
			var email=$("#email").val();
			var password=$("#password").val();

			$.ajax({
				url:'<?= base_url("auth/signUp")?>',
				type:'POST',
				dataType:'JSON',
				data:'name='+name+'&email='+email+'&password='+password,
				success:function(data)
				{
					$("#name_error").html('');
					$("#email_error").html('');
					$("#password_error").html('');
					if(data.status==201){
						if(data.name_error !='')
						{
							$("#name_error").html(data.name_error);
						}
						else{
							-$("#name_error").html('');
						}

						if(data.email_error !='')
						{
							$("#email_error").html(data.email_error);
						}
						else{
							-$("#email_error").html('');
						}
						if(data.password_error !='')
						{
							$("#password_error").html(data.password_error);
						}
						else{
							-$("#password_error").html('');
						}
					}
					if(data.status==200){
							$("#registerForm")[0].reset(); 
							$("#registerForm").html('<div class="alert alert-success">'+data.data+'</div> '); 
						}
				}
			});
		});
	});
</script>

