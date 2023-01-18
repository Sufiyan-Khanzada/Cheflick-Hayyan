<!DOCTYPE html>  
<html>  
     <head>
         <title>CHEFLICK</title>  

         <link rel="stylesheet" href="css/sing.css">
         <?php 
            include 'link.php';
            ?>
     </head>      
     <body>
        
     <?php
        include 'panelhead.php';
        ?>        
        <div class="container-width-adj">

            <section class="contact-acs-section">
                <div class="row cont-3">
                    <div class="col-lg-12">
                        <div class="col-sm-2">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-8 bnr-sec">
                            <div class="head-bner-sec">
                                <form  id="form">
                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                                <label for="inputaddress">Address</label>
                                                <textarea class="form-control" id="" placeholder="Address" name="address"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputwhencontact">Latitude</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="latitude">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputwhencontact">Longitude</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="longitude">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="device">Type</label>
                                                <select id="device" class="form-control" name="type">
                                                <option selected>Choose...</option>
                                                <option>Home</option>
                                                <option>Work</option>
                                                <option>Office</option>
                                                <option>Shared Space</option>
                                                <option>Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputaddressone">Secondary Address</label>
                                                <textarea class="form-control" id="" placeholder="Address" name="address1"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="city">City</label>
                                                <select id="city" class="form-control" name="city">
                                                <option selected>Choose...</option>
                                                <option>Karachi</option>
                                                <option>Lahore</option>
                                                <option>Faisalabad</option>
                                                <option>Rawalpindi</option>
                                                <option>Gujranwala</option>
                                                <option>Peshawar</option>
                                                <option>Multan</option>
                                                <option>Saidu Sharif</option>
                                                <option>Hyderabad</option>
                                                <option>Islamabad</option>
                                                <option>Quetta</option>
                                                <option>Bahawalpur</option>
                                                <option>Sargodha</option>
                                                <option>Sialkot City</option>
                                                <option>Sukkur</option>
                                                </select>
                                            </div>
                                                <button type="submit" class="btn btn-primary btnsingin">Send</button>
                                                
                                            <div class="form-group col-md-12">
                                                
                                               <!-- <label for="inputEmail4"><a  href="forgetpassword.php">Forgot Password</a></label> -->
                                            </div>
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
        </div>  
        <script>
               var status = "";
                const form = document.getElementById('form');

                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    
                    const prePayload = new FormData(form);
                    const payload = new URLSearchParams(prePayload);

                    console.log([...payload]);

                    fetch('https://api.cheflick.net/api/user/refer-friend?', {
                        method:"POST",
                        body: payload,
                        headers:{
                            'Content-Type':'application/x-www-form-urlencoded;charset=utf-8',
                        },
                    })
                    .then(res => res.json())
                    // .then(data => console.log(data.message))
                    .then(data => alert(data.message))
                    // alert('Hello\nHow are you?')
                    .catch(err => console.log(err));


                })
                  
            </script>
     </body>
 
</html> 