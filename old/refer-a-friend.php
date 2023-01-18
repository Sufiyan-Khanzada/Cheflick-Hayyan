<!DOCTYPE html>  
<html>  
     <head>
         <?php 
            include 'link.php';
            ?>
         <link rel="stylesheet" href="css/sing.css">
             
     </head>           
     <body>
<?php
session_start();
$url = "https://api.cheflick.net/api/user/refer-friend";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

if(isset($_POST['refer'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone_number=$_POST['phone'];
$when_to_contact=$_POST['when_to_contact'];
$to=$_POST['to'];
$from=$_POST['from'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization: Bearer ".$_SESSION['remember_token']."" 
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
    "name":"$name",
    "email":"$email",
    "phone_number":"$phone_number",
    "when_to_contact":"$when_to_contact",
    "to":"$name",
    "from":"$from"

  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);
// echo $resp;
// echo $_SESSION['remember_token'];
// echo "sasasa";
// print_r( $_POST);

}
?>
<!DOCTYPE html>  
<html>  
     <head>

         <?php 
            include 'link.php';
            ?>
         <link rel="stylesheet" href="css/sing.css">
             
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
                            <form  id="form" method="post" action="">
                                        <div class="form-row">
                                             
                                        <div class="form-group col-md-6">
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
                                            <div class="form-group col-md-6">
                                                <label for="inputwhencontact">When To contact</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="when_to_contact">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputto">To</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="to">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputfrom">From</label>
                                                <input type="number" class="form-control" id="" placeholder="00 00 000" name="from">
                                            </div>

                                            
                                                <button type="submit" class="btn btn-primary btnsingin" name="refer">REFER</button>
                                                
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
                       
                    </div>                
                </div>
            </section>   
        </div>
        
        
     </body>
</html> 