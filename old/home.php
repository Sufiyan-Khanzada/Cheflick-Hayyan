<!DOCTYPE html>  
<html>  
     <head>
     <title>CHEFLICK</title>  
        <?php 
        include 'linkweb.php';
        ?>
         <link rel="stylesheet" href="css/home.css">
     </head>      
     <?php
        include 'header.php';
        ?>
     <body>
        <script>
            	$(document).ready(function(){
		// set up hover panels
		// although this can be done without JavaScript, we've attached these events
		// because it causes the hover to be triggered when the element is tapped on a touch device
		$('.hover').hover(function(){
			$(this).addClass('flip');
		},function(){
			$(this).removeClass('flip');
		});
	});
        </script>
        <div class="container-width-adj">
            <section class="home-search-section">
                <div class="row cont-1" style="background-image: url(img/home/9335.png);">
                    <div class="col-md-6 hsf-sec">
                        <div class="home-search-food">
                            <div class="tag-hsf-sec">
                                <h4>Food Craving Calls?</h4>
                                <h2>Bhook Lagi h? Tou <br>Order kro yaar!</h2>
                                <p>Enter your full address</p>
                            </div>
                            <div class="hsf-bar">
                                <input class="input-field" type="text" placeholder="Username" name="usrnm"> <i class="fa fa-map icon location"></i><br>
                                <a href="dashboard/index.php">
                                <button class="deliver-hsf">Delivery</button>
                            </a>
                                <a href="dashboard/index.php">
                            <button class="pickup-hsf">Pickup</button>
                        </a>
                            </div>
                            <div class="hsf-location">
                                <div class="hsf-widget isl">
                                    <img src="img/Group-8785.png">
                                </div>
                                <div class="hsf-widget lah">
                                    <img src="img/Group-8784.png">
                                </div>
                                <div class="hsf-widget kc">
                                    <img src="img/Group-8786.png">
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <div class=" hsf-img-sec">
                        <div class="home-dish-one">
                            <img src="img/4-removebg-preview.png" style="width: 500px; height: 500px;">
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-wwa-section">
                <div class="row cont-2">
                    <div class="col-md-6 wwa-sec">
                        <div class="tag-wwa-sec">
                            <h5>About us</h5>
                            <h2>WHO WE ARE</h2>
                            <p>Cheflick’s business strategy is multi-faceted, with two interdependent client segments that are both our assets: Our Foodies - People who desire to order food from restaurants or our home chefs over the internet or through our app. Vendors – Use and explore the platform to sell their food, be it home chefs or restaurants, we accommodate all. Whether you are craving to order your favourite food or hustling for an online presence Cheflick is your one-stop! So shout out to all the foodies out there, ab mangana ho apnay favourite restaurant sy ya chye ho ghar jaisa zaiqa, Cheflick py sb kch milayga!</p>
                            <button class="wwa-readmore"><a href="about.php">Read More</a></button>
                        </div>    
                    </div>
                    <div class="col-md-6 wwa-img-sec">
                        <img src="img/Mask-Group-2193@2x.png" style="width:450px; height:450px;">
                    </div>
                </div>
            </section>   
            <section class="home-bcs-section">
                <div class="row cont-3"  style="background-image: url(img/home/13.png);">
                    <div class="col-md-6 bcs-sec">
                        <div class="tag-bcs-sec">
                            <h2>Become A<br>
                                Cooking Star</h2>
                            <p>Refer your cooking star! Since you have shared the best experience with us, we want you to refer a friend who's as good as you! Let's expand our family and let all of the remarkable chefs out there avail a chance to become an entrepreneur as you did. With a simple setup that requires no investment, they can start their own food setup and earn a good living.</p>
                            <button class="bcs-readmore"><a href="cookingstar.php" style="color:white">Register Now</a></button>
                        </div>    
                    </div>
                    <div class="col-md-6 bcs-img-sec">
                        <div class="bcs-img-cont">
                            <img src="img/Group-8854.png" style="width:460px; height: 550px;">
                        </div>
                    </div>
                </div>
            </section>    
            <section class="home-acs-section">
                <div class="row cont-4">
                    <div class="col-md-6 acs-sec">
                        <div class="tag-acs-sec">
                            <h5>REFER</h5>
                            <h2>A Cooking Star</h2>
                            <p>Refer your cooking star! Since you have shared the best experience with us, we want you to refer a friend who's as good as you! Let's expand our family and let all of the remarkable chefs out there avail a chance to become an entrepreneur as you did. With a simple setup that requires no investment, they can start their own food setup and earn a good living.</p>
                            <button class="acs-readmore"><a href="cookingstar.php"> Register Now</a></button>
                        </div>    
                    </div>
                    <div class="col-md-6 acs-img-sec">
                        <div class="acs-img-cont">
                            <img src="img/8.png"  style="width:500px;">
                        </div>
                    </div>
                </div>
            </section>  
            <section class="home-dca-section">
                <div class="row cont-5" style="background-image: url(img/home/14.png);">
                    <div class="col-md-6 dca-sec">
                        <div class="tag-dca-sec">
                            <h2>DOWNLOAD<br>
                                ChiefLick App</h2>
                            <div>
                                <img src="img/Mask-Group-2196.png" style="width:200px; height:70px">
                                <img src="img/Mask-Group-2197@2x.png" style="width:200px; height:70px">
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-6 dca-img-sec">
                        <div class="dca-img-cont">
                            <img src="img/Layer-1-copy-3@2x.png" style="width:450px; height:500px;">
                        </div>
                    </div>
                </div>
            </section> 
            <section class="home-bbcs-section">
                <div class="row cont-9">
                    <div class="col-lg-12">
                        <div class="col-md-3">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6 bbcs-sec">
                            <div class="tag-bbcs-sec">
                                <h5>WHAT WE OFFER</h5>
                                <h2>Benifits of Becoming A Cooking Star</h2>
                            </div>
                            <div class="widget-bbcs">
                                <div class="widget-basic w1">
                                    <img src="img/Group-8827.png">
                                    <h6><b> Commission</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/Group-8830.png">
                                    <h6><b>Multiple Delivery Option</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/Group-8831.png">
                                    <h6><b>No Investment Required</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/Group-8832.png">
                                    <h6><b>No Location Restriction</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/Group-8833.png">
                                    <h6><b>Free Digital Marketing</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/Group-8836.png">
                                    <h6><b>Ongoing Support & Assistance</b></h6>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">        
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
            </section>  
            <section class="home-lgrh-section">
                <div class="row cont-10">
                    <div class="col-lg-12 main-g">
                        <div class="col-md-12 lgrh-sec-full">
                            <div class="tag-lgrh-sec-full">
                                <h5>WHAT WE OFFER</h5>
                                <h2>Benifits of Becoming A Cooking Star</h2>
                            </div>
                        </div>
    
                        <div class="col-md-3">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6 lgrh-sec-half">
                            <div class="tag-lgrh-sec-half">
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/1.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/2.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/3.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/4.png);">
                                </div>
                                
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/5.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/6.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/7.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/8.png);">
                                </div>
    
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/9.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/10.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/11.png);">
                                </div>
                                <div class="widget-lgrh wi1"  style="background-image: url(img/home/12.png);">
                                </div>
                            </div>
                        </div>    
                        <div class="col-sm-3">        
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
            </section> 
            <section class="home-jfp-section">
                <div class="row cont-6" style="background-image: url(img/home/16.png);">
                    <div class="col-md-6 jfp-sec">
                        <div class="tag-jfp-sec">
                            <h2>Join Our<br>
                                Affiliate Program</h2>
                            <p>Refer your cooking star! Since you have shared the best experience with us, we want you to refer a friend who's as good as you! Let's expand our family and let all of the remarkable chefs out there avail a chance to become an entrepreneur as you did. With a simple setup that requires no investment, they can start their own food setup and earn a good living.</p>
                            <button class="jfp-readmore"><a href="affiliated-program.php" style="color:white">Register Now</a></button>
                        </div>    
                    </div>
                    <div class="col-md-6 jfp-img-sec">
                        <div class="jfp-img-cont">
                            <img src="img/pngegg-19.png" style="width:300px;">
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-hiw-section">
                <div class="row cont-7">
                   <div class="col-lg-12">
                    <div class="col-sm-1">        
                        <div class="space"></div>
                    </div>
                    <div class="col-sm-10  hiw-sec">
                        <div class="hiw-sec-des">
                           <div class="hiw-sec-cont">
                                <h5>Our Process</h5>
                                <h2>How it Works</h2>
                           </div>                         
                            <div class="wrapper">
                                <div class="col_third">
                                  <div class="hover panel">
                                    <div class="front">
                                      <div class="box1">
                                        <img src="img/Order-food-rafiki.png">
                                        <h3>ORDER</h3>
    
                                      </div>
                                    </div>
                                    <div class="back">
                                      <div class="box2">
                                        <p>On the Cheflick App, customers order food from Cooking Stars.</p>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                          
                                  <div class="col_third">
                                  <div class="hover panel">
                                    <div class="front">
                                      <div class="box1">
                                        <img src="img/Delivery-cuate.png">
                                        <h3>ACCEPT</h3>
                                      </div>
                                    </div>
                                    <div class="back">
                                      <div class="box2">
                                        <p>Cooking Star accepts the order on the App after receiving an order notification from Cheflick.</p>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  
                                  <div class="col_third">
                                    <div class="hover panel">
                                      <div class="front">
                                        <div class="box1">
                                          <img src="img/Order-food-rafiki.png">
                                          <h3>PREPARE</h3>
                                        </div>
                                      </div>
                                      <div class="back">
                                        <div class="box2">
                                          <p>On the Cheflick App, customers order food from Cooking Stars.</p>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
    
                                  <div class="col_third end">
                                  <div class="hover panel">
                                    <div class="front">
                                      <div class="box1">
                                        <img src="img/Delivery-cuate.png">
                                        <h3>DELIVERY</h3>
                                      </div>
                                    </div>
                                    <div class="back">
                                      <div class="box2">
                                        <p>Cooking Star accepts the order on the App after receiving an order notification from Cheflick.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               </div>
                               
                               
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="space"></div>
                    </div>
                </div> 
                    
                    <!-- <div class="col-md-6">
                        <div class="space"></div>
                    </div> -->
                    <!-- <div class="col-md-7 hiw-sec">
                        <div class="hiw-sec-des">
                            <h5>Our Process</h5>
                            <h2>How it Works</h2>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6">
                        <div class="space"></div>
                    </div> -->
                </div>
            </section>
            <section class="home-sonl-section">
                <div class="row cont-8" style="background-image: url(img/home/15.png);">
                    <div class="col-lg-12">
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 sonl-sec">
                            <div class="tag-sonl-sec">
                                <h2>Subscribe Our News Letter</h2>
                                <p>By entering my email below, I agree Cheflick can send me emailsfor promotions,
                                    newsletters, blogs, discounts, updates and announcements.By subscribing I agree to the terms and conditions and privacy policy of Cheflick</p>
                                <input class="input-field inpu-email" type="text" placeholder="Email" name="usrnm"> <i class="fa fa-envelope icon email"></i><br><button class="sonl-readmore">Send Mail</button>
                            </div>
                        </div>
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
     </body>
       
     <?php
         include 'fotter.php';
        ?>
</html> 