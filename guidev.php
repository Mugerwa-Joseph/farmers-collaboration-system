<?php 
require('top.php');					
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
                <h2 class="title__line--6 text-center">Farmer's Conner</h2>
                <div class="row">
                    <div class="col-md-6">
                        
                            <div class="address">
                                    <div class="address__icon">
                                        <img src="images/guide.png" style="position: cover; width:90%" alt="image">
                                    </div>
                                    <div class="address__details">
                                        <h2 class="ct__title">Farmer's Guide</h2>
                                        <p>A professional Guide to Success </p>
                                    </div>
                                </div>
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#contentIds" aria-expanded="false" aria-controls="contentIds">
                                        Show
                                    </a>
                                </p>
                                <div class="collapse" id="contentIds">
                                    
                                </div>
                                <div class="address__details">
                                     <a href="" target="_blank" rel="noopener noreferrer"><h2 class="ct__title">soil preparation</h2></a>
                                    <p>Get easy access to utilities and equipment</p>
                                    <hr>
                                    <h2 class="ct__title">farming techniques</h2>
                                    <p>Get easy access to utilities and equipment</p>
                                    <hr>
                                    <h2 class="ct__title">Pest Control</h2>
                                    <p>Get easy access to utilities and equipment</p>
                                    <hr>
                                    <h2 class="ct__title">harvesting methods</h2>
                                    <p>Get easy access to utilities and equipment</p>
                                    <hr>
                                    <h2 class="ct__title">storage methodologies</h2>
                                    <p>Get easy access to utilities and equipment</p>

                                </div>
                            
                    </div>
         
                    <div class="col-md-6">
                        <div class="row">
                        <div class="address">
                               <div class="address__details">
                                    <h2 class="ct__title">Buy/hire</h2>
                                    <p>Get easy access to utilities and equipment</p>
                                </div>
                                <div class="address__icon">
                                    <img src="images/hire.png" alt="image" style="width: 90%;">
                                </div>
                            </div>
                        </div> 
                        </div>
                        <div class="row">
                            <p>
                                <a class="btn btn-primary" data-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                                    Show
                                </a>
                            </p>
                            <div class="collapse" id="contentId">
                                <div class="jumbotron jumbotron">
                                    <div class="container">
                                        <h1 class="display-3">Fluid jumbo heading</h1>
                                        <p class="lead">Jumbo helper text</p>
                                        <hr class="my-2">
                                        <p>More info</p>
                                        <p class="lead">
                                            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
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
<?php require('footer.php')?>        