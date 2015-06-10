<!DOCTYPE html>
<html>
<head>
	<title>Manhattan Steakhouse TEST</title>
    <meta name="author" content="Emir Balić">
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/animate.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/SmoothScroller.js"></script>
    <script src="js/jquery.collapsible.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(26.376051,-81.808703,17);
            var mapOptions = {
                zoom: 18,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Manhattan Steakhouse'
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>
<body>

	<div id="container">
        <!-- Top -->
		<section id="top">
			<div class="wrapper">
				<div class="search-container cf">
					<div class="address cf">
                        <div class="pinholder">
                            <a href="#contact" class="smoothScroll"><div class="pin-icon animated zoomInUp"></div>
                            <p class="animated zoomInUp">24940 S. Tamiami Trail #103 Bonita Springs, FL 34134</p></a>
                        </div>
						<div class="phoneholder">
                            <div class="phone-icon animated zoomInDown"></div>
                            <p id="nr" class="animated zoomInUp">239 676 8687</p>
                        </div>
                        <div class="fb animated zoomInDown">
                            <a href="https://www.facebook.com/manhattan.steakhouse.7?fref=ts" class="smoothScroll"><img class="animated zoomInUp" src="img/fb.png" alt="fb"></a>
                        </div>
					</div>
				</div>
			</div>
		</section>
        <!-- Top END -->
        <!-- Header -->
		<header id="header">
			<div class="wrapper cf">
				<div id="logo-container" class="animated fadeInLeftBig">
					<a href="#top" class="smoothScroll"><h1>Manhattan Steakhouse</h1></a>
				</div>
                <div id='cssmenu' class="animated fadeInRightBig">
                    <ul>
                        <li class='active'><a href='#top' class='smoothScroll animated fadeInRightBig'><span>Home</span></a></li>
                        <li><a href='#menu' class='smoothScroll'><span>Our Menu</span></a></li>
                        <li><a href='#accordion' class='smoothScroll animated fadeInRightBig'><span>Wine List</span></a></li>
                        <li><a href='http://www.opentable.com/manhattan-steak-house-reservations-bonita-springs?rtype=ism&restref=80941' class='smoothScroll'><span>OpenTable</span></a></li>
                        <li class='last'><a href='#contact' class='smoothScroll animated fadeInRightBig'><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </div>
		</header>
        <!-- Header END -->
        <section id="slider">
            <!-- Swiper -->
            <div class="swiper-container">
                <!--<div class="parallax-bg" style="background-image:url(img/slider/slider1.jpg)" data-swiper-parallax="-23%"></div>-->
                    <div class="swiper-wrapper">
                            <div class="swiper-slide slider1 parallax-bg">
                                <div class="wrapper">
                                    <div class="title animated fadeInDownBig" data-swiper-parallax="900">Prime Dry Aged Steak</div>
                                    <!--<div class="subtitle" data-swiper-parallax="-200">VIEW OUR MENU</div>-->
                                    <div class="text animated fadeInUpBig" data-swiper-parallax="-900">
                                        <p>Manhattan Steakhouse specializes in USDA Prime Dry Aged Steak (21-28 days) and sizzling platters up to 1800 degrees,
                                            big selection of fresh seafood and other.</p>
                                    </div>
                                    <div class="button animated fadeInLeftBig" data-swiper-parallax="10000"><a href="#menu" class="smoothScroll">View Our Menu</a></div>
                                    <div class="pic animated fadeInRightBig" data-swiper-parallax="-5000"><img src="img/slider/png2.png" alt="pic"/></div>
                                </div>
                            </div>
                            <div class="swiper-slide slider2 parallax-bg">
                                <div class="wrapper">
                                    <div class="title" data-swiper-parallax="1000">Private Party</div>
                                    <!--<div class="subtitle" data-swiper-parallax="-200">Private Party</div>-->
                                    <div class="text" data-swiper-parallax="-900">
                                        <P>Private Party available from 20 to 120 persons. Please call us for details.</P>
                                    </div>
                                    <div class="button" data-swiper-parallax="-10000"><a href="#video" class="smoothScroll">Our Video</a></div>
                                    <div class="pic winegirl" data-swiper-parallax="5000"><img src="img/slider/png1.png" alt="pic"/></div>
                                </div>
                            </div>
                            <div class="swiper-slide slider3 parallax-bg">
                                <div class="wrapper">
                                    <div class="title" data-swiper-parallax="900">Enjoy in our restaurant</div>
                                    <!--<div class="subtitle" data-swiper-parallax="-200">Subtitle</div>-->
                                    <div class="text" data-swiper-parallax="-900">
                                        <p>Enjoy the finest cuts of meat and fresh catches such as grouper, tuna and jumbo Maine lobster.</p>
                                    </div>
                                    <div class="button" data-swiper-parallax="10000"><a href="#articles" class="smoothScroll">Enjoy in our restaurant</a></div>
                                    <div class="pic" id="girl" data-swiper-parallax="-5000"><img src="img/slider/png3.png" alt="pic"/></div>
                                </div>
                            </div>
                            <div class="swiper-slide slider2 parallax-bg">
                                <div class="wrapper">
                                    <div class="title" data-swiper-parallax="50">Private Party</div>
                                    <!--<div class="subtitle" data-swiper-parallax="-200">Private Party</div>-->
                                    <div class="text" data-swiper-parallax="-900">
                                        <P>Private Party available from 20 to 120 persons. Please call us for details.</P>
                                    </div>
                                    <div class="button" data-swiper-parallax="-10000"><a href="#title-message" class="smoothScroll">Send a Message</a></div>
                                    <div class="pic winegirl" data-swiper-parallax="5000"><img src="img/slider/png1.png" alt="pic"/></div>
                                </div>
                            </div>
                    </div>
                <!-- Add Pagination -->
                <!--<div class="swiper-pagination swiper-pagination-white"></div>-->
                <!-- Add Navigation -->
                <div class="swiper-button-prev animated slideInDown swiper-button-white"></div>
                <div class="swiper-button-next animated slideInDown swiper-button-white"></div>
            </div>
        </section>
        <!-- Swiper END -->
        <!-- Articles -->
        <section id="articles">
            <div class="wrapper cf">
                <div id="title-articles" class="passive">
                    <h1 class="animated">Welcome to Our Restaurant</h1>
                    <div class="bd1 animated" id="bd">
                        <img src="img/flower.png" alt="flw"/>
                    </div>
                    <p class="animated">Manhattan Steakhouse specializes in USDA Prime Dry Aged Steak (21-28 days) and
                        <br/>
                        sizzling platters up to 1800 degrees, big selection of fresh seafood and other.</p>
                </div>
                <div class="tri passive">
                    <div class="articles animated" id="article1">
                        <img src="img/articles/rump.jpg" alt="table"/>
                        <h3>Have a Look <br/> at Our Menu</h3>
                        <p>Enjoy the finest cuts of meat and fresh catches such as grouper,
                            tuna and jumbo Maine lobster. Our dinner price range from $18 to $34.</p>
                        <div class="button"><a href="#menu" class="smoothScroll">Our Menu</a></div>
                    </div>

                    <div class="articles animated" id="article2">
                        <img src="img/articles/wines.jpg" alt="table"/>
                        <h3>Manhattan Steakhouse <br/> Wines</h3>
                        <p>We feature an extensive selection of fine wines from many regions all over the world.
                            Try our house wines or other from our wine list.</p>
                        <div class="button"><a href="#accordion" class="smoothScroll">Wine List</a></div>
                    </div>

                    <div class="articles animated" id="article3">
                        <img src="img/articles/Reserved-sign.jpg" alt="table"/>
                        <h3>Book Your <br/> Table Online</h3>
                        <p>Make reservation with most popular reservation system -
                            Open Table and enjoy in our restaurant ambient and nice atmosphere.</p>
                        <div class="button"><a href="http://www.opentable.com/manhattan-steak-house-reservations-bonita-springs?rtype=ism&restref=80941" class="smoothScroll">OpenTable</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Articles END -->
        <!-- Video -->
        <section id="video" class="passive parallax-window" data-parallax="scroll" data-image-src="img/bgd-video.jpg">
            <div id="title-video">
                <h1 class="animated">Our Video</h1>
                <div class="bd1 animated" id="bd2">
                    <img class="animated" src="img/flower.png" alt="flw"/>
                </div>
            </div>
            <video controls class="animated">
                <source src="manhattansteakhouse_rev.mp4" type="video/mp4">
            </video>
        </section>
        <!-- Video END -->
        <!-- Our Menu -->
        <section id="menu">
            <div id="title-menu" class="passive">
                <h1 class="animated">Our Menu</h1>
                <div class="bd1 animated" id="bd3">
                    <img class="animated" src="img/flower1.png" alt="flw"/>
                </div>
            </div>
        </section>
        <!-- Accordion -->
        <section id="accordion" class="passive">
            <div>
                <div class="bt-accordion deactivated" id="wineList">
                    <h3 class="animated">Wine List</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/wine.jpg')">
                        <h3>Wine List</h3>
                    </div>
                    <div class="wrapper cf deactivated wine" id="wine">
                        <!--<h3>Wine List</h3>-->

                        <h4>White Wines by the Glass</h4>

                            <h5>White zinfandel</h5><h5>$ 7</h5>

                            <h5>Chardonnay, Frontera</h5><h5>$ 8</h5>

                            <h5>Coastal Rigge Risling</h5><h5>$ 8</h5>

                            <h5>Pinot Grigio Princih5ato</h5><h5>$ 9</h5>

                            <h5>Sauvignon Blanc Frontera</h5><h5>$ 9</h5>

                            <h5>Simi Sonoma Chardonnay</h5><h5>$ 12</h5>

                        <h4>Red Wines by the Glass</h4>

                            <h5>Chianti Placido</h5><h5>$ 9</h5>

                            <h5>Down Under Shiraz</h5><h5>$ 8</h5>

                            <h5>Merlot Frontera</h5><h5>$ 8</h5>

                            <h5>Pinot Noir Frontera</h5><h5>$ 10</h5>

                            <h5>Cabernet Frontra</h5><h5>$ 10</h5>

                            <h5>Malbec Calia</h5><h5>$ 10</h5>

                            <h5>Cabernet Simi Sonoma</h5><h5>$ 13</h5>

                    </div>
                </div>
            </div>
            <div>
                <div class="bt-accordion deactivated" id="salads">
                    <h3 class="animated">Appetizers - Salads</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/salad.jpg')">
                        <h3>Appetizers - Salads</h3>
                    </div>
                    <div class="wrapper cf deactivated wine">

                        <h4>Enjoy in our Restaurant</h4>

                            <h5>Iceberg Wedge (With blue Cheese & Bacon)</h5>

                            <h5>Manhattan Clam Chowder Soup</h5>

                            <h5>Beefsteak Tomatos and Onions</h5>

                            <h5>Lightly Fried Calamari</h5>

                            <h5>Hearts of Romaine Caesar Salad</h5>

                            <h5>Buffalo Mozzarella with sliced Tomato</h5>

                            <h5>Marinated Seafood Salad</h5>

                            <h5>Sashimi Spicy Tuna with Citrus soy glaze</h5>

                            <h5>Smoked Salmon (Capers,Onions)</h5>

                            <h5>Iced Shrimp Cocktail (4)</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="bt-accordion deactivated" id="classics">
                    <h3 class="animated">Classics House Specialties</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/main.jpg')">
                        <h3>Classics House Specialties</h3>
                    </div>
                    <div class="wrapper cf deactivated wine">

                        <h4>USDA - PRIME - DRY - AGED BEST OF ALL CUTS</h4>

                            <h5>PETITE FILET MIGNON - 8/oz</h5>

                            <h5>COWBOY RIB EYE STEAK - Bone- in 22 / oz</h5>

                            <h5>NEW YORK - STRIP STEAK - Bone-in 22/oz</h5>

                            <h5>PORTERHOUSE FOR TWO - Bone in 38/oz</h5>

                            <h5>PORTERHOUSE FOR THREE - Bone in 60/oz</h5>

                            <h5>PORTERHOUSE FOR FOUR - Bone in 80/oz</h5>

                            <h5>Profiterolles</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="bt-accordion deactivated" id="fish">
                    <h3 class="animated">Entrees - Fish</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/fish.jpg')">
                        <h3>Entrees - Fish</h3>
                    </div>
                    <div class="wrapper cf deactivated wine">

                        <h4>Enjoy in our Restaurant</h4>

                            <h5>Jumbo Crab Cake (With Remoulade)</h5>

                            <h5>Gluten Free Pasta (in Tomateo Sauce)</h5>

                            <h5>Lobster Ravioli (In a Brandy Pink Sauce)</h5>

                            <h5>Lobster Tails 8 / oz</h5>

                            <h5>Grilled Fresh Tuna Steak (Tomato and Capers)</h5>

                            <h5>Grouper Fresh (With Crab meat, Asparagus and Bearnaise)</h5>

                            <h5>Grilled T Bone Veal Chop 16 /oz</h5>

                            <h5>Colorado Lamb Rack</h5>

                            <h5>Dover Sole (Lemone, Wine Capers)</h5>

                            <h5>Jumbo Lobster (Broiled or Steamed)</h5>

                            <h5>FRIED ONIONS RINGS</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="bt-accordion deactivated" id="sideDishes">
                    <h3 class="animated">Side Dishes</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/side.jpg')">
                        <h3>Side Dishes</h3>
                    </div>
                    <div class="wrapper cf deactivated wine">

                        <h4>Enjoy in our Restaurant</h4>

                            <h5>STEAK FRIES</h5>

                            <h5>MASHED POTATOS</h5>

                            <h5>JUMBO BAKED POTATO</h5>

                            <h5>SWEET POTATO FRIES</h5>

                            <h5>SAUTED MUSHROOMS</h5>

                            <h5>MANHATTAN SPINACH</h5>

                            <h5>ASPARAGUS STEAMED</h5>

                            <h5>SPECIAL GERMAN POTATO</h5>
                    </div>
                </div>
            </div>
            <div>
                <div class="bt-accordion deactivated" id="desserts">
                    <h3 class="animated">Desserts</h3>
                    <div class="bt-accordion-itemBg" style="background:url('img/menu/dessert.jpg')">
                        <h3>Desserts</h3>
                    </div>
                    <div class="wrapper cf deactivated wine">

                        <h4>Delicious sweets, baked up fresh each day by our awesome pastry chef. <br/> The perfect end to your meal!</h4>

                            <h5>Homemade Tiramisu</h5>

                            <h5>Creme Brulee</h5>

                            <h5>Chocolate Soufflé w/ Vanilla Ice-cream</h5>

                            <h5>Lemon Sorbet</h5>

                            <h5>Apple Strudel with ice creme</h5>

                            <h5>ASPARAGUS STEAMED</h5>

                            <h5>Coconut Sorbet</h5>

                            <h5>Tartuffo Italian Ice-cream</h5>

                            <h5>Pecan Pie with ice cream</h5>

                            <h5>Key Lime Pie</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Menu END -->
        <!-- Contact Us -->
        <section id="contact">
            <div class="wrapper">
                <div id="title-contact" class="passive">
                    <h1 class="animated">Contact Us</h1>
                    <div class="bd1 animated" id="bd4">
                        <img class="animated" src="img/flower.png" alt="flw"/>
                    </div>
                    <p class="animated">Manhattan Steakhouse specializes in USDA Prime Dry Aged Steak (21-28 days) and
                        <br/>
                        sizzling platters up to 1800 degrees, big selection of fresh seafood and other.</p>
                </div>
            </div>
        </section>
        <section id="contactform" class="passive">
            <div class="wrapper">

                <div id="googleMap" class="animated" data-map-infowindow="Manhattan Steakhouse" style="width:99.9%; height:400px;"></div>

                <div id="title-message">
                    <h1 class="animated">Send a Message</h1>
                    <div class="bd1 animated" id="bd5">
                        <img class="animated" src="img/flower.png" alt="flw"/>
                    </div>
                    <p class="animated">Do you have anything in your mind to tell us? Please don't hesitate to get in touch
                        to us via our contact form.</p>
                </div>
                <div data-role="content" id="cont">
                    <form name="htmlform" method="post" action="mail.php">
                        <label class="animated" for="first_name">* First Name :</label>
                        <input class="animated" type="text" name="first_name" placeholder="Your First Name here...">

                        <label class="animated" for="last_name">* Last Name :</label>
                        <input class="animated" type="text" name="last_name" placeholder="Your Last Name here...">

                        <label class="animated" for="email">* E-mail :</label>
                        <input class="animated" type="text" name="email" placeholder="Your E-mail here...">

                        <label class="animated" for="telephone">Phone :</label>
                        <input class="animated" type="text" name="telephone" placeholder="Your Phone Number here...">

                        <label class="animated" for="messages">* Message :</label>
                        <textarea class="animated" name="messages" placeholder="Your Message here..."></textarea>
                        <p class="animated" >(*) Required</p>
                        <input class="animated" type="submit" value="Submit" id="submit">
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Us END -->

        <!-- Footer -->
        <footer>
            <div class="wrapper passive" id="footer">
                <div id="social">
                    <a href="https://www.facebook.com/manhattan.steakhouse.7?fref=ts" class="smoothScroll">
                        <img class="animated" src="img/fb.png" alt="fb">
                    </a>
                </div>
                <div id="logo-container-footer">
                    <a href="#top" class="smoothScroll"><h1 class="animated">Manhattan Steakhouse</h1></a>
                </div>
                <div id="copyright">
                    <p class="animated">Copyright © 2015 MobileGrows. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- Footer END -->

    </div>


    <!-- page1 //////////////////////////////////////////////////////////////////////-->

	<!-- Swiper JS -->
    <script src="js/swiper.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true,
        autoplay: 3500,
        keyboardControl: true,
        setWrapperSize: true,
        parallax: true,
        speed: 1300
    });
    </script>
    <!-- To Top JS -->
    <script src="js/easing.js" type="text/javascript"></script>
    <!-- UItoTop plugin -->
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
    <!-- Starting the plugin -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
</body>
</html>