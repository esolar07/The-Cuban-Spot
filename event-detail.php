<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Truck</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/extralayers.css" rel="stylesheet">
    <link href="css/settings.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link href="css/jquery.mmenu.all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <!-- Page pre loader -->
      <div id="pre-loader">
          <div class="loader-holder">
              <div class="frame">
                  <img src="images/Preloader.gif" alt="Food Truck"/>                
              </div>
          </div>
      </div>
      <div class="wrapper">
        <div class="header-part">
          <div class="container">
            <div class="menu-part-outer">
              <div class="menu-part">
                <ul>
                  <li><a href="index.html" title="Home">Home</a></li>
                  <li><a href="menu.html" title="Menu">Menu</a></li>
                  <li><a href="truck-locator.html" title="Truck locator">Truck locator</a></li>
                  <li class="logo"><a href="index.html"></a></li>
                  <li class="has-child active">
                    <a href="event.html" title="events">events<span class="caret"></span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="event-detail.html">event detail</a></li>
                    </ul>
                  </li>
                  <li class="has-child">
                    <a href="news.html" title="News">News <span class="caret"></span></a>
                    <ul class="sub-menu">
                      <li><a href="post-detail.html">News Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html" title="contact">contact</a></li>
                </ul>
              </div> <!-- menu-part -->
              <div class="logo-header">
                <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
              </div> <!-- logo-header -->
              <div id="page">
                <div class="header">
                  <a href="#menu"></a>
                </div>
                <nav id="menu">
                  <ul>
                    <li class="active"><a href="index.html" title="Home">Home</a></li>
                    <li><a href="menu.html" title="Menu">Menu</a></li>
                    <li><a href="truck-locator.html" title="Truck locator">Truck locator</a></li>
                    <li>
                      <a href="event.html" title="events">events</a>
                      <ul>
                        <li><a href="event-detail.html">event detail</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="news.html" title="News">News</a>
                      <ul>
                        <li><a href="post-detail.html">News Detail</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html" title="contact">contact</a></li>
                  </ul>
                </nav>
              </div>
            </div> <!-- menu-part-outer -->
          </div>  <!-- container -->
        </div> <!-- header-part -->
        <section class="bread-crumb-container">
          <div class="bread-crumb-img">
            <img src="images/bread-crumb3.png" alt="">
          </div>
          <div class="bread-crumb-content">
            <div class="bread-crumb-inner">
              <h2>Event Detail</h2>
              <a href="index.html">Home</a> - <a href="event-detail.html">Event Detail</a>
            </div>
          </div> <!-- bread-crumb-content -->
        </section> <!-- bread-crumb-container -->
        <div class="main-part">
          <section class="event-container">
            <div class="container">
              <div class="event-detail-wrap">
                <div class="event-list wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="event-pic">
                    <img src="images/event1.jpg" alt="">
                  </div>
                  <h3>We went to all the weddings on 17th</h3>
                  <span>17 august 2016</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <p><i>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i></p>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div> <!-- event-list -->
                <div class="pn-link">
                  <div class="prev-link"><a href="javascript:;" class="btn-black">Previous event</a></div><div class="next-link"><a href="javascript:;" class="btn-black">Next event</a></div>  
                </div>
              </div> <!-- event-wrap -->
            </div>
          </section> <!-- event-container -->
          <div class="map-outer">
            <div id="truck-locator"></div>
          </div>
        </div> <!-- main-part -->
        <div class="footer-part">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-column">
                  <div class="footer-logo">
                    <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
                  </div>
                  <p>The Cuban Spot is bringing fantastic food right to you on the streets of Houston! Bringing this amazing menu from Florida to Texas, these Cuban dudes are serving up something great to sink your teeth into. Sandwiches, burgers, tostones, and more, The Cuban Spot has everything you could ever ask for! </p>
                  <div class="social">
                    <ul>
                       <li><a href="https://twitter.com/thecubanspot?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.instagram.com/thecubanspot/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.facebook.com/thecubanspot/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                  </div> <!-- social -->
                </div> <!-- footer-column -->
              </div>
              <div class="col-md-4 col-sm-3 col-xs-12">
                <div class="footer-column">
                  <h3>Contact info</h3>
                  <div class="address-outer">
                    <div class="address-blog">
                      <h6>Address</h6>
                      <p>Houston, Texas, USA</p>
                    </div> <!-- address-blog -->
                    <div class="address-blog">
                      <h6>Phone</h6>
                      <a href="javascript:;">(713) 679-3802</a>
                    </div> <!-- address-blog -->
                    <div class="address-blog">
                      <h6>Email</h6>
                      <a href="mailto:thecubanspottruck@gmail.com ">thecubanspottruck@gmail.com </a>
                    </div> <!-- address-blog -->
                  </div> <!-- address-outer -->
                </div> <!-- footer-column -->
              </div>
              <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="footer-column footer-column-form">
                  <form class="form-footer" name="contact-form" method="post" action="functions.php">
                    <h3>Contact us</h3>
                    <div class="alert-container"></div>
                    <div class="form-field">
                      <input type="text" name="full_name" placeholder="* Name" required>
                    </div> <!-- form-field -->
                    <div class="form-field">
                      <input type="email" name="email_address" placeholder="* Email" required>
                    </div> <!-- form-field -->
                    <div class="form-field">
                      <textarea name="message" placeholder="* comment" required></textarea>
                    </div> <!-- form-field -->
                    <div class="form-field">
                      <button type="submit" class="btn-black send_message">Send message</button>
                    </div> <!-- form-field -->
                  </form>
                </div> <!-- footer-column -->
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <p>© The Cuban Spot. All rights reserved.</p>
            </div>
          </div>
        </div> <!-- footer-part -->
      </div> <!-- wrapper --> 
    <a href="javascript:;" class="top-arrow"></a>
    <script src="js/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.mmenu.min.all.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>