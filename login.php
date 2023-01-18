<?php
 session_start();
 $msg="";
// include_once 'constant.php';
$baseurlapi="https://api.cheflick.net/api/";
$url = $baseurlapi."user/login-user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "email":"$email",
    "password":"$password",
    "device_type":"device_type",
    "device_token":"device_token"
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

$obj = json_decode($resp,true);
if($obj['status']){
//   ini_set('session.cookie_domain','.domain.com');

// echo ini_get('session.cookie_domain');
// session_set_cookie_params( 0, "/", ".domain.com", false, false); 

  
   
    // $_SESSION['favcolor'] = "green";
     $_SESSION['userId'] = $obj['data']['userId'];
     $_SESSION['userFullName'] = $obj['data']['userFullName'];
     $_SESSION['userEmail'] = $obj['data']['userEmail'];
     $_SESSION['userPhoneNumber'] = $obj['data']['userPhoneNumber'];
     $_SESSION['address'] = $obj['data']['address'];
     $_SESSION['userImage'] = $obj['data']['userImage'];
     $_SESSION['remember_token'] = $obj['data']['remember_token'];
     $_SESSION['device_type'] = $obj['data']['device_type'];
     $_SESSION['device_token'] = $obj['data']['device_token'];
     $_SESSION['isSocial'] = $obj['data']['isSocial'];
     $_SESSION['provider'] = $obj['data']['provider'];
     $_SESSION['longitude'] = $obj['data']['longitude'];
     $_SESSION['latitude'] = $obj['data']['latitude'];
     $_SESSION['address_type'] = $obj['data']['address_type'];
     $_SESSION['user_city'] = $obj['data']['user_city'];
     $_SESSION['address1'] = $obj['data']['address1'];
    $_SESSION['cart_item'] = array();
    print_r( $obj['data']);
    header("Location:home.php");
}
else{

//   header("Location:login.php");
$msg='<div class="alert alert-danger" role="alert">
  Login Failed
</div>';


}


curl_close($curl);

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
                <div class="col-lg-6">
                        <div class="col-sm-3">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-9 dca-sec">
                            <div class="tag-dca-sec">
                                
                                    <h1 style="font-weight: 700; color: #3f007f; line-height: 0;">LETS ORDER</h1>
                                    <h1  style="font-size: 54px; font-weight: 800; color: #9c3dfd;">SOMETHING</h1>
                                    <p style="margin-top:20px; color:black !important;">Refer your cooking star! Since you have shared the best experience with us, we want you to refer a friend who's as good as you! Let's expand our family and let all of the remarkable chefs out there avail a chance to become an entrepreneur as you did. With a simple setup that requires no investment, they can start their own food setup and earn a good living.</p>
                                
                                <div class="social-play">
                                    <img src="img/Mask-Group-2196.png" style="width:200px; height:70px">
                                    <img src="img/Mask-Group-2197@2x.png" style="width:200px; height:70px">
                                </div>
                            </div>    
                        </div>
                        <div class="col-sm-0">        
                            <div class="space"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-sm-0">        
                            <div class="space"></div>
                        </div>
                        <div class="col-md-10 bnr-sec">
                            <div class="head-bner-sec">
                                <form  id="form" method="post" action="">
                                     <?php echo $msg;?>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" id="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputemail4" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="inputpassword" id="inputpassword">Password</label>
                                                <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                                            </div>
                                            <!--<div class="form-group col-md-6">-->
                                            <!--    <label for="device">Device Type</label>-->
                                            <!--    <select id="device" class="form-control" name="device_type" id="device_type">-->
                                            <!--    <option selected>Choose...</option>-->
                                            <!--    <option>Phone</option>-->
                                            <!--    <option>Laptop</option>-->
                                            <!--    <option>Desktop PC</option>-->
                                            <!--    <option>Tablet</option>-->
                                            <!--    <option>Smart Watch</option>-->
                                            <!--    </select>-->
                                            <!--</div>-->
                                            <!--<div class="form-group col-md-6">-->
                                            <!--    <label for="inputdevicetoken">Device Token</label>-->
                                            <!--    <input type="number" class="form-control" id="device_token" placeholder="00 00 000" name="device_token">-->
                                            <!--</div>-->
                                                <button type="submit" class="btn btn-primary btnsingin" name="login">Login</button>
                                                
                                            <div class="form-group col-md-12">
                                                <br>
                                                <br>
                                               <label for="inputEmail4"><a  href="forgetpassword.php">Forgot Password</a></label>
                                            </div>
                                        </div>
                                    </form>
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