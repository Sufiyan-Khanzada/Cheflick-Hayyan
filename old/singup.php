<?php
$msg=0;
session_start();
$url = "https://api.cheflick.net/api/user/create-user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['Register'])){
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Address=$_POST['address'];
$Password=$_POST['password'];
$ConfirmPassword=$_POST['confirm_password'];


$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
    "full_name":"$Name",
    "email":"$Email",
    "phone":"$Phone",
    "address":"$Address",
    "password":"$Password",
    "confirm_password":"$ConfirmPassword",
    "device_type":"typ",
    "device_token":"tok"
    
 
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);


$msg='<div class="alert alert-success" role="alert">
  Account Created SuccessFully Done.
</div>';

//echo $resp;

}
?>
<!DOCTYPE html>  
<html>  
     <head>
         <title>BTS 2020</title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">   
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>     
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                                            <div class="form-group col-md-12">
                                                <label for="inputname4">Your Full Name</label>
                                                <input type="text" class="form-control" id="inputname4" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputemail4" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPhone4">Phone Number</label>
                                                <input type="tel" class="form-control" id="inputPhone4" placeholder="+00 000 0000 0000" name="phone">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputaddress">Address</label>
                                                <textarea class="form-control" id="" placeholder="Address" name="address"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputpassword">Password</label>
                                                <input type="password" class="form-control" id="" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputconfirmpassword">Confirm Password</label>
                                                <input type="password" class="form-control" id="" placeholder="Confirm Password" name="confirm_password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="device">Device Type</label>
                                                <select id="device" class="form-control" name="device_type">
                                                <option selected>Choose...</option>
                                                <option>Phone</option>
                                                <option>Laptop</option>
                                                <option>Desktop PC</option>
                                                <option>Tablet</option>
                                                <option>Smart Watch</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputdevicetoken">Device Token</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="device_token">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputlatitude">Latitude</label>
                                                <input type="number" class="form-control" id="" placeholder="00.00.000.000" name="latitude">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputlongitude">Longitude</label>
                                                <input type="number" class="form-control" id="" placeholder="00.00.000.000" name="longitude">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputaddresssecondary">Secondary Address</label>
                                                <textarea type="text" class="form-control" id="" placeholder="Secondary Address" name="address1"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="city">City</label>
                                                <select id="city" class="form-control" name="user_city">
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
                                                <button type="submit" class="btn btn-primary btnsingin" name="Register">Sing Up</button>
                                            
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

     </body>
      <?php
         include 'fotter.php';
        ?> 
</html> 