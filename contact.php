<!DOCTYPE html>  
<html>  
     <head>
     <title>CHEFLICK</title>  

<?php 
  include 'linkweb.php';
  ?>
<link rel="stylesheet" href="css/about.css">
   

         <link rel="stylesheet" href="css/contact.css">
             
     </head>      
     
     <?php
        include 'header.php';
        ?>          
     <body>
        <script>
        </script>  
        <div class="container-width-adj">
            <section class="contact-bner-section">
                <div class="row cont-1" style="background-image: url(img/about/1.png);">
                    <div class="col-lg-12">
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 bnr-sec">
                            <div class="tag-bner-sec">
                                <h2>CONTACT US</h2>
                            </div>
                        </div>
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-acs-section">
                <div class="row cont-2">
                    <div class="col-lg-12">
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 bnr-sec">
                            <div class="head-bner-sec">
                                <h5>Get on board</h5>
                                <h2>Contact Us</h2>
                                <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname4">Your Name</label>
                                                <input type="text" class="form-control" id="inputname4" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPhone4">Phone Number</label>
                                                <input type="Number" class="form-control" id="inputPhone4" placeholder="+00 000 0000 0000">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="howdidyoufindus">How do you find us</label>
                                                <select id="howdidyoufindus" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="city">City</label>
                                                <select id="city" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="subject">Subject</label>
                                                <select id="subject" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                            </div>
                                                <button type="submit" class="btn btn-primary btnsingin">Sign in</button>
                                            
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 widget-sec">
                            <div class="widget-one-sec">
                                
                            </div>
                        </div>
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                    </div>                
                </div>
            </section>  
            <section class="contact-bbcs-section">
                <div class="row cont-3">
                    <div class="col-lg-12">
                        <div class="col-md-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 bbcs-sec">
                            <div class="widget-bbcs">
                                <div class="widget-basic w1">
                                    <img src="img/mail-removebg-preview.png">
                                    <h6><b> info@cheflick.com</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/location-removebg-preview.png" style="width: 70px;height: 70px;">
                                    <h6><b>+K-3, Rafi Plaza, University Road, Karachi</b></h6>  
                                </div>
                                <div class="widget-basic w1">
                                    <img src="img/whatsapp-removebg-preview.png">
                                    <h6><b>+92 323 1234567</b></h6>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">        
                            <div class="space"></div>
                        </div>
                    </div>
                </div>
            </section>  
            <section class="contact-sonl-section">
                <div class="row cont-4" style="background-image: url(img/home/15.png);">
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