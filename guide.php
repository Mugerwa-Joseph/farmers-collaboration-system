<?php 
require('topguide.php');					
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/pol.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Farmer's Guide</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        
       
            
        <section class="htc__contact__area ptb--100 bg__white">
        <div class="container">
        <h2 class="title__line--6 text-center">wELCOM Farmer's Conner</h2>
        <div class="row">
                        <?php
                        $res=mysqli_query($con,"SELECT product.price,product.name from product limit 1");
						while($row=mysqli_fetch_assoc($res)){
                        ?>

                         <marquee behavior="scroll" scrollamount="" onmouseover="this.stop();" onmouseout="this.start();" direction="left"><li><?php echo $row['name']." ".$row['price']?></li></marquee>
                         
                        <?php
                        }?>
                    </div>
            <div class="row">
                <div class="col-md-6">
                    
                    <div id="accordianId" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="section1HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                                    <div class="address">
                                    <div class="address__icon">
                                        <img src="images/guide.png" style="position: cover; width:90%" alt="image">
                                    </div>
                                    <div class="address__details">
                                        <h2 class="ct__title">Farmer's Guide</h2>
                                        <p>Click here to get Professional Guide.  </p>
                                    </div>
                                </div>
                            </a>
                                </h5>
                            </div>
                            <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                                <div class="card-body">
                                   <div class="jumbotron">
                                       <h1 class="display-3">Farm Smart</h1>
                                       <p class="lead"></p>
                                       <hr class="my-2">
                                       <p> <b>Techniques and Methodologies</b> </p>
                                       <p class="lead">
                                           <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Farm Preparations</a><br><hr>
                                           <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Cultivation Techniques</a><br><hr>
                                           <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Pest Control</a><br><hr>
                                           <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Harvest and Storage</a>
                                       
                                       </p>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="section2HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                                    Get Instant Support!
                            </a>
                                </h5>
                            </div>
                            <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                                <div class="card-body">
                                   <div class="jumbotron jumbotron-fluid">
                                       <div class="container">
                                           <h1 class="display-2">#GetSupport</h1>
                                           <p class="lead">Available Local Representative</p>
                                           <hr class="my-2">
                                           <p>Mugerwa Joseph 0765191587 Bugema.</p>
                                           <p class="lead">
                                               <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Social Media</a>
                                           </p>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="address">
                                <div class="address__details">
                                        <h2 class="ct__title">Buy/hire</h2>
                                        <p>Get easy access to utilities and equipment</p>
                                </div>
                                <div class="address__icon">
                                        <img src="images/hire.png" alt="image" style="width: 90%;">
                                </div>
                      </div>
                      <div id="sl1" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#sl1" data-slide-to="0" class="active"></li>
                              <li data-target="#sl1" data-slide-to="1"></li>
                              <li data-target="#sl1" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active">
                                  <img src="images/hire/mtn.jpg " class="rounded" alt="First slide">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Buy</h3>
                                      <p>Available upon call</p>
                                  </div>
                              </div>
                              
                          </div>
                          <a class="carousel-control-prev" href="#sl1" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#sl1" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                    <div class="jumbotron">
                        <div class="card">
                            <img class="card-img-top" src="images/hire/tractor.png" alt="Card image cap">
                            <div class="card-body">
                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Massey Ferguson Tractor</a>
                            <hr class="my-2">
                            <a href="#" class="card-link">5000 UGX/hr</a>
                                <a href="#" class="card-link">Call 075191587</a>
                            </div>
                            
                        </div>
                </div>
                       
                        </p>
                    </div>
             </div>
        </div>
        </section>
        <!-- End Contact Area -->
		<!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo "></script>
    <script src="js/contact-map.js"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(12.968970, 79.149320), // Vellore

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: 
        [ {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#141516"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(12.968970, 79.149320),
                map: map,
                title: 'Ramble!',
                icon: 'images/icons/map-2.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>   
     <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <!-- <script src="js/jquery-3.5.1.slim.js"></script>
    <script src="js/popper.minc255.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
	<!-- <script src="js/custom.js"></script> -->