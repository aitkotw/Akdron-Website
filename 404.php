<?php
include 'genral.php';
include 'constants.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo TITLE; ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/Icon.png" sizes="16x16" type="image/png"> 
	<meta name="keywords" content="website design in mumbai, Website Development in mumbai, SEO in mumbai, Digial Marketing in mumbai, web design company in mumbai, web development company in mumbai, Website Designing in mumbai, web developer in mumbai" />
	<meta name="description" content = "Website design and website development company in mumbai specialized in creating responsive website with static or dynamic content.">
	<!-- Custom-Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	<!-- Font-Awesome-Icons-CSS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src = "js/javascript.js" ></script>

	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
<!-- main banner -->
<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
					<!-- logo -->
					<div id="logo">
						<h2><a href="index.php"> &nbsp; Akdron Technology</a></h2>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_temps-amkls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="service.php" class="drop-text">Services</a></li>
								<li><a href="contact.php" class="active">Contact Us</a></li>
								<li><a href="blog/" target="_blank">Blog</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
					<div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center">
						
						<!-- search -->
						<!-- <div class="search-temps-amklayouts mr-3">
							<form action="#" method="post" class="search-bottom-amk-tems d-flex">
								<input class="search" type="search" placeholder="Search Here..." required="">
								<button class="form-control btn" type="submit"><span class="fa fa-search"></span></button>
							</form>
						</div> -->
						<!-- //search -->
						<!-- download -->
							<div class ="listIconNocolor"> <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; <a href="tel:+919769063294">+91 976-906-3294</a></div>
						<!-- //download -->
					</div>
				</div>
			</div>
		</header>
		<!-- //header -->

        </div>
<!-- //main banner -->

<!-- 404 -->
<div class="error pb-5 pt-2 text-center" id="price">
    <div class="container pb-xl-5 pb-lg-3">
        <img src="images/404.jpg" alt="" class="img-fluid" />
        <h3 class="title-temps-amk text-bl my-3 font-weight-bold text-capitalize">Oops! This page can’t be found.</h3>
        <?php
            if (isset($_GET) && !empty($_GET)) {
                if($_GET['msg'] == 'connection'){
					echo '<p class="sub-tittle text-center4">It seems we\'re unable to find the page you\'re looking for. It might be some connection issue or so. Please contact webmaster for further info.</p>';
				} else {
					echo '<p class="sub-tittle text-center4">It seems we\'re unable to find the page you\'re looking for. Unable to find the passible cause for this. Please contact Us.</p>';
				}
            } else {
                echo '<p class="sub-tittle text-center4">It seems we\'re unable to find the page you\'re looking for. It is possible file no longer exists on this server or moved away.</p>';
            }
            
        ?>
        <a href="index.php" class="btn button-style mt-5">Back To Home</a>
    </div>
</div>
<!-- //404 -->

<!-- footer -->
<footer class="bg-li-new py-5">
		<div class="container py-xl-5 py-lg-3">
			<!-- subscribe -->
			<div class="subscribe mx-auto">
				<div class="icon-effect-temps-amk">
					<span class="fa fa-envelope"></span>
				</div>
				<h2 class="tittle text-center font-weight-bold">Stay Updated!</h2>
				<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Please subscribe to stay updated with our latest newslatter and offers. </p>
				<form action="_crud.php" method="post" class="subscribe-amk-tems pt-2">
					<div class="d-flex subscribe-amk-tems-field">
						<input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
						<input type="hidden" name="fileAddress" value="<?php echo basename(__FILE__); ?>">
						<button class="btn form-control w-50" type="submit">Subscribe</button>
					</div>
				</form>
			</div>
			<!-- //subscribe -->
		</div>
	</footer>
	<!-- //footer -->

		<!-- copyright bottom -->
		<div class="copy-bottom bg-wh py-4 border-top">
		<div class="container-fluid">
			<div class="d-md-flex px-md-3 position-relative text-center">
				<!-- footer social icons -->
				<div class="social-icons-footer mb-md-0 mb-3">
					<ul class="list-unstyled">
						<li>
							<a href="#">
								<span class="fab fa-facebook-f"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fab fa-pinterest-p"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fab fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social icons -->
				<!-- copyright -->
				<div class="copy_right mx-md-auto mb-md-0 mb-3">
					<p class="text-bl let">© 2019 <a href = "https://www.akdron.com/">Akdron</a>. All rights reserved.
					</p>
				</div>
				<!-- //copyright -->
				<!-- move top icon -->
				<a href="#home" class="move-top text-center">
					<span class="fa fa-level-up" aria-hidden="true"></span>
				</a>
				<!-- //move top icon -->
			</div>
		</div>
	</div>
	<!-- //copyright bottom -->
	<?php
		if(isset($_GET) == true){
			if($_GET['mode'] === 'subSuccess'){
				$msg = "<strong>Sucess!!</strong> You have successfully subscribed to our news letters";
				showSuccessModel($msg);
				echo '<script>$(document).ready(function(){$("#myModal").modal();}); </script>';
			} else if($_GET['mode'] === 'emailExist'){
				$msg = "<strong>Warning!!</strong> You have already subscribed to our news letters";
				showFailModel($msg);
				echo '<script>$(document).ready(function(){$("#myModal").modal();});</script>';
			}
		}
	?>

</body>
<?php echo googleTracking; ?>
</html>