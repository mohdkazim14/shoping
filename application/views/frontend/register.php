
<section id="form"><!--form-->
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
					<form action="#">
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


<script type="text/javascript">
	$(document).ready(function(){
		$("#login").click(function(){

			var email=$("#login_email").val();
			var password=$("#login_password").val();
			$.ajax({
				url:'<?= base_url("home/login")?>',
				type:'POST',
				preson:'',
				data:'email='+email+'&password='+password,
				success:function(data)
				{
					this.person=JSON.parse(data);
					console.log(this.person.status);
					if(this.person.status==201)
						{
							$("#errorMsg").html("<div class='alert alert-danger'>"+this.person.result+"</div>");
							// console.log(this.person.result);	
						}else{	window.location.href="<?= base_url("home/index");?>"; }
				}
			})

		});

		$("#register").click(function(){

			var name=$("#name").val();
			var email=$("#email").val();
			var password=$("#password").val();

			$.ajax({
				url:'<?= base_url("home/signUp")?>',
				type:'POST',
				data:'name='+name+'&email='+email+'&password='+password,
				success:function(data)
				{
					alert(data);
				}
			})

		});


	})
</script>

