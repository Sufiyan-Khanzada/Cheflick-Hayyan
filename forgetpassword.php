<!DOCTYPE html>  
<html>  
     <head>
     <title>CHEFLICK</title>  

<?php 
  include 'linkweb.php';
  ?>
         <link rel="stylesheet" href="css/sing.css">
             
     </head>      
     <?php
        include 'header.php';
        ?>     
     <body>
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
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputemail4" placeholder="Email" name="email">
                                            </div>                           
                                                <button type="submit" class="btn btn-primary btnsingin">Reset Password</button>
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
                const form = document.getElementById('form');

                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    
                    const prePayload = new FormData(form);
                    const payload = new URLSearchParams(prePayload);

                    console.log([...payload]);

                    fetch('https://api.cheflick.net/api/user/forgot-password', {
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
      <?php
         include 'fotter.php';
        ?> 
</html> 