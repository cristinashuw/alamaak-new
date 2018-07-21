<?php
  include '../../koneksi.php';
  session_start();
  $order = $_GET['order'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Alamaak</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="Navbar">
    <?php include "menu.php"; ?>
  </div>

  <div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../images/general.png" alt="First slide">
        </div>
      </div>
    </div>
  </div><br/>
    <div class="form-style">
  <center>
      <h1>Order Service</h1>
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
      <div class="contact" id="order">
        <form class="contact-form" action="" method="post">
          <input class="form-control" type="text" name="orderName" disabled value="<?php echo $order; ?>" required><br/>
          <input class="form-control" type="hidden" name="orderName" value="<?php echo $order; ?>">

          <input class="form-control" type="text" name="customer_name" placeholder="name" <?php if (isset($_SESSION['email'])){echo 'value="'.$_SESSION['nama'].'" readonly';}else{echo 'value=""';} ?> required><br/>

          <input class="form-control" type="number" name="phone" placeholder="phone" required <?php if (isset($_SESSION['email'])){echo 'value="'.$_SESSION['phone'].'"';}else{echo 'value=""';} ?>><br/>

          <input class="form-control" type="text" name="address" placeholder="address" required value=""><br/>

          <input class="form-control" type="date" name="serviceDate" required value="<?php echo $hasil['serviceDate'] ?>"><br/>

          <button type="submit" name="Enter" class="btn btn-outline-primary" value="">Order</button>


<?php
if(isset($_POST['Enter'])){
	if (isset($_SESSION['email']))
	{
		$orderName = $_POST['orderName'];
    	$customer = $_SESSION['email'];
   		$phone = $_POST['phone'];
    	$address = $_POST['address'];
    	$serviceDate = $_POST['serviceDate'];

    	$query = "INSERT INTO `order`(orderName, customer, phone, address, serviceDate) VALUES('$orderName','$customer',$phone,'$address','$serviceDate')";

    	$insert = mysqli_query($connect, $query);
      	if($insert)
		{
			header("location:inserted.php");
		}
		else
		{
			echo 'gagal disimpan'.mysqli_error($connect);
        }
  	}
	else
	{
		echo "<script>alert('Please login to continue')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../../login.php'>";
	}
}
?>
        </form>
      </div>
    </div><br/><br/>
    </center>
  </div>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
