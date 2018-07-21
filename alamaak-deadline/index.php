<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
  <script src="//code.tidio.co/nm9bkqlqo4aedorc2duhcp7btlzzyvm9.js"></script>
  <title>Alamaak</title>
</head>

<body>
  <div class="Navbar">
    <a class="navbar-brand" href="#">
    <img width="30%" src="images/logo/144.png" alt="Alamaak">
  </a>
    <a class="Nav-marge" href="index.php">Home</a>
    <a class="Nav-marge" href="#">Why Us</a>
    <a class="Nav-marge" href="#">Pricing</a>
    <a class="Nav-marge" href="#">Contact</a>
    <?php
	if (isset($_SESSION['email']))
	{
		echo "<a class='Nav-marge' href='../logout.php'>Logout</a>";
	}
	else
	{
		echo "<a class='Nav-marge' href='../login.php'>Login</a>";
	}
	?>
  </div>

  <div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/cleaning-2.png" alt="First slide">
          <!-- <div class="centered">Your Friendly Cleaning Service</div> -->
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/cleaning-1.png" alt="Second slide">
          <!-- <div class="centered">Cleaning Solution for your place</div> -->
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/cleaning.png" alt="Third slide">
          <!-- <div class="centered">Expert Cleaning Service</div> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container our-style">
    <h2>Why Choose Us</h2>
    <p>Alamaak was established to provide complete and exceptional customer services to our community, real estate or any company tahat requires professional services.
Alamaak realized the need that was not addressed and the services that needed the care of a specialiazed provider who can provide the best quality along with the customer satisfaction.</p></br>
</div>
<div class="our-style why-us">
<div class="row">
  <div class="col">
    <img width="80%" src="images/icon/general.png" alt="general-cleaning">
    <p>General Cleaning</p>
    <a href="orders/general.php?order=general">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/package.png" alt="cleaning-package">
    <p>Cleaning Package</p>
    <a href="orders/general.php?order=package">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/mattress.png" alt="Mattress-cleaning">
    <p>Mattress Cleaning</p>
    <a href="orders/general.php?order=mattrass">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/sofa.png" alt="Sofa-cleaning">
    <p>Sofa Cleaning</p>
    <a href="orders/general.php?order=sofa">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/carpet.png" alt="Carpet-cleaning">
    <p>Carpet Cleaning</p>
    <a href="orders/general.php?order=carpet">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
</div></br>
<div class="row">
  <div class="col">
    <img width="80%" src="images/icon/express.png" alt="Express-cleaning">
    <p>Express Cleaning</p>
    <a href="orders/general.php?order=express">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/kitchen.png" alt="Kitchen-cleaning">
    <p>Kitchen Cleaning</p>
    <a href="orders/general.php?order=Kitchen">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/bathroom.png" alt="Bathroom-cleaning">
    <p>Bathroom Cleaning</p>
    <a href="orders/general.php?order=bathroom">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/polish.png" alt="Floor-Polishing">
    <p>Floor Polishing</p>
    <a href="orders/general.php?order=floor">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/chandelier.png" alt="Chandelier-Cleaning">
    <p>Chandelier Cleaning</p>
    <a href="orders/general.php?order=chandelier">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
</div></br>
<div class="row">
  <div class="col">
    <img width="80%" src="images/icon/glass.png" alt="Glass-cleaning">
    <p>Glass Cleaning</p>
    <a href="orders/general.php?order=glass">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/fridge.png" alt="Fridge-cleaning">
    <p>Fridge Cleaning</p>
    <a href="orders/general.php?order=fridge">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/stove.png" alt="Stove-cleaning">
    <p>Stove Cleaning</p>
    <a href="orders/general.php?order=stove">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/exhaust.png" alt="Sofa-cleaning">
    <p>Exhaust Cleaning</p>
    <a href="orders/general.php?order=exhaust">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
  <div class="col">
    <img width="80%" src="images/icon/curtains.png" alt="Curtains-cleaning">
    <p>Gorden Cleaning</p>
    <a href="orders/general.php?order=gorden">
    <button type="button" class="btn btn-outline-primary">Order Service</button>
    </a>
  </div>
</div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
