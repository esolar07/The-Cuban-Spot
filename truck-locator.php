<?php

  require_once("DataBase.php");

  $pdo = DataBase::dbConnect();

  $sql = "SELECT * FROM schedule";

  try(

    $time = $pdo -> query($sql);
  ) catch(Exception $e){

		echo $e->getMessage();
		die();
	
  }	
  
  $times = $time -> fetchAll(PDO::FETCH_ASSOC);
  
  DataBase::dbDisconnect():

  require_once('header.php');

?>

        <section class="bread-crumb-container">
          <div class="bread-crumb-img">
            <img src="images/bread-crumb2.png" alt="">
          </div>
          <div class="bread-crumb-content">
            <div class="bread-crumb-inner">
              <h2>truck <br> locator</h2>
              <a href="index.html">Home</a> - <a href="truck-locator.html">Truck locator</a>
            </div>
          </div> <!-- bread-crumb-content -->
        </section> <!-- bread-crumb-container -->
        <div class="main-part maring-remove">
          <div class="map-outer truck-locator">
            <div id="truck-locator"></div>
          </div>
          <section class="address-main">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#0">Kansas City</a></h3>
                  <p>No 97, Hudd Park, Kansas City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#1">Oakland</a></h3>
                  <p>No 97, Huddart Park, Oakland Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#2">California</a></h3>
                  <p>No 97, Huddart Park, California Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#3">San Francisco</a></h3>
                  <p>No 97, Hudd Park, San Francisco City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#4">New York</a></h3>
                  <p>No 97, Hudd Park, New York City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#5">Arizona</a></h3>
                  <p>No 97, Hudd Park, Arizona City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#6">Los Angeles</a></h3>
                  <p>No 97, Hudd Park, Los Angeles City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                  <h3><a href="#7">Miami</a></h3>
                  <p>No 97, Hudd Park, Miami City Monday - Friday: 900 - 2000 Saturday: 900 - 1800 Sunday: closed</p>
                </div>
              </div>
            </div>
          </section> <!-- address-main -->
        </div> <!-- main-part -->
    
    <?php require_once('footer.php'); ?>