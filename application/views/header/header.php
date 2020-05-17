
<?php  $this->load->view("header/head"); ?>
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?= base_url("home/index")?>"><img src="<?= base_url("assets/images/home/logo.png")?>" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?= base_url("home/index")?>"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="<?= base_url("home/index")?>"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?= base_url("home/index")?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?= base_url("home/cartOpen")?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if(($this->session->userdata("UID")=='')) { ?>
									<li><a href="<?= base_url("home/register")?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php }else{ ?>
										<li><a href="<?= base_url("home/logout")?>"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a></li>
										<li><img src="<?= base_url("assets/images/home/sale.png")?>" style="width:50px; border-radius: 50%; border:2px solid red;"></li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?= base_url("home/index")?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= base_url("home/products")?>">Products</a></li>
										<li><a href="<?= base_url("home/index")?>">Product Details</a></li> 
										<li><a href="<?= base_url("home/index")?>">Checkout</a></li> 
										<li><a href="<?= base_url("home/cartOpen")?>">Cart</a></li> 
										<li><a href="<?= base_url("home/index")?>">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?= base_url("home/index")?>">Blog List</a></li>
										<li><a href="<?= base_url("home/index")?>">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="<?= base_url("home/index")?>">404</a></li>
								<li><a href="<?= base_url("home/index")?>">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->