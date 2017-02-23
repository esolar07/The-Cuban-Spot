<?php

  require_once("DataBase.php");

  $pdo = DataBase::dbConnect();

  $sql = "SELECT * FROM schedule";

  try{

    $time = $pdo -> query($sql);
  }catch(Exception $e){

		echo $e->getMessage();
		die();
	
  }	
  
  $times = $time -> fetchAll(PDO::FETCH_ASSOC);
  
  DataBase::dbDisconnect();

  require_once('header.php');

?>
    <div class="main-part">
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
			  
				<?php foreach ($times as $time){ ?>

					<div class="col-md-3 col-sm-4 col-xs-12">

						<h3><a href="#0"> <?php echo ucfirst($time['day']); ?> </a></h3>
						<p> <?php echo ucfirst($time['location']); ?> </p>
						<p> <?php echo $time['address']; ?> </p>
						<p> <?php echo "From: " . $time['start'] . ":00 AM"; ?> </p>
					  <p> <?php echo "To: " . $time['start'] . ":00 PM"; ?> </p>

					</div>
          
				<?php } ?>
				
				<!-- 
				
				********* hiding for now until Aaron decides on schedule *************
				
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
                </div>\
				-->
              </div>
            </div>
			<div class="row" style=" width: 500px; margin: 0 auto; ">
				<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style="border:solid 1px #777" width="700" height="600" frameborder="0" scrolling="no"></iframe>
			</div>
          </section> <!-- address-main -->
        </div> <!-- main-part -->
    
    <?php require_once('footer.php'); ?>