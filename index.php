<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Practicing Bootstrap with Edi</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  
<?php include 'header.php'?>

  <!-- Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-top="0" class="active"></li>
		<li data-target="#slides" data-slide-top="1"></li>
		<li data-target="#slides" data-slide-top="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/background.png" alt="image">
			<div class="carousel-caption">
				<h1 class="display-2">Bootstrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background2.png">
		</div>
		<div class="carousel-item">
			<img src="img/background3.png">
		</div>
	</div>
</div>
<!-- Jumbotron -->
<div class="container-fluid">
  <div class="row jumbotron">
    <div class="col-md-9 col-xl-10">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare suspendisse sed nisi lacus sed viverra tellus in.</p>
    </div>
    <div class="col-md-3 col-xl-2">
      <a href="#">
        <button type="button" class="btn btn-outline-secondary">Webhosting</button>
      </a>
    </div>
  </div>
</div>
<!-- Welcome section -->
<div class="container-fluid padding-bottom">
  <div class="row text-center">
    <div class="col-12">
      <h1 class="display-4">Built with ease.</h2>
      <hr>
      <p class="lead">Welcome to my Bootstrap 4 website tutorial! Bootstrap ia a free and open-source front-end library with HTML and css based design</p>
    </div>
  </div>
</div>
<!-- Three columms -->
<div class="container-fluid text-center padding-bottom">
  <div class="row padding-bottom">
    <div class="col-md-6 col-lg-4">
      <i class="fas fa-code"></i>
      <h3>HTML5</h3>
      <p>Built wiht the lastest version of HTML, HTML5</p>
    </div>
    <div class="col-md-4 col-lg-4">
      <i class="fas fa-bold"></i>
      <h4>Bootstrap</h4>
      <p>Built with the lastes version of Bootstrap, Bootstrap</p>
    </div>
    <div class="col-md-4 col-lg-4">
      <i class="fab fa-css3"></i>
      <h4>CCS3</h4>
      <p>Built with the lastest version of CSS3, CSS3</p>
    </div>
  </div>
  <hr class="my-4">
</div>
<!-- Two columns -->
<div class="container-fluid padding-bottom">
  <div class="row">
    <div class="col-md-6">
      <h2>If you build it...</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Varius vel pharetra vel turpis nunc eget lorem dolor sed.</p>
      <p>aLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Varius vel pharetra vel turpis nunc eget lorem dolor sed.</p>
      <p>bLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Varius vel pharetra vel turpis nunc eget lorem dolor sed.</p>
      <a href="#">
        <button type="button" class="btn btn-primary">Learn more</button>
      </a>
    </div>
    <div class="col-md-6">
      <img src="img/desk.png" alt="desk" class="img-fluid">
    </div>
  </div>
</div>
<hr class="my-4">
<!-- Figure -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed"></div>
	</div>
</figure>
<!-- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
<div id="emoji" class="collapse">
  <div class="container-fluid padding-bottom">
    <div class="row text-center">
      <div class="col-sm-6 col-lg-3">
        <img class="gif" src="img/gif/panda.gif" alt="panda">
      </div>
      <div class="col-sm-6 col-lg-3">
        <img class="gif" src="img/gif/chicken.gif" alt="panda">
      </div>
      <div class="col-sm-6 col-lg-3">
        <img class="gif" src="img/gif/poo.gif" alt="panda">
      </div>
      <div class="col-sm-6 col-lg-3">
        <img class="gif" src="img/gif/unicorn.gif" alt="panda">
      </div>
    </div>
  </div>
</div>
<!-- Meet the team -->
<div class="container-fluid padding-bottom">
  <div class="row welcome text-center">
    <div class="col-12">
      <h2>Meet the Team</h2>
      <hr class="light">
    </div>
  </div>
</div>
<!-- Cards -->
<div class="container-fluid padding-bottom">
  <div class="row padding">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="img/team1.png" alt="team1">
        <div class="card-body">
          <h4>John Doe</h4>
          <p>Joe es an Internet entrepreneur with almost 20 years of experience</p>
          <a href="#" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="img/team2.png" alt="team2">
        <div class="card-body">
          <h4>Mary jo</h4>
          <p>Mary is a designer with almost 10 years of digital design experience</p>
          <a href="" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="img/team3.png" alt="team3">
        <div class="card-body">
        <h4>Edinson Ningles</h4>
        <p>Edinson is a developer with over 5  years od webdevelopment experience</p>
        <a href="#" class="btn btn-outline-secondary">See profil</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Two columns philosophy -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Our Philosophy</h2>
			<p>We know that greatness in a disruptive era requires bold ambition, curios latent and culuture
				that believes we're smater together</p>
			<p>We approach every challenge holistically, with best-in-class expertise in data, creativity, media,
				technology, search, social and more. We call this Alchemy. It has the power to build our clients'
				brands and transform their business. And while it may seem like magic, we've got it down to a science.</p>
				<br>
		</div>
		<div class="col-lg-6">
			<img src="img/bootstrap2.png" alt="bootstrap2" class="img-fluid">
		</div>
	</div>
	<hr class="my-4">
</div>
<!-- Social media -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

<?php include 'footer.php' ;?>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="fontawesome/all.js"></script>
</body>
</html>