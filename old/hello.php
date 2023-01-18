<?php


//session_start();
echo "hello world";
// echo 
// if (isset($_SESSION['token'])&& ! empty($_SESSION['token'])){
//     //echo $_SESSION['token'];
//     echo 'login successful'
// }
// else{
//     echo 'error';
// }
/** 
 * Get header Authorization
 * */
// function getAuthorizationHeader(){
//     $headers = null;
//     if (isset($_SERVER['Authorization'])) {
//         $headers = trim($_SERVER["Authorization"]);
//     }
//     else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
//         $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
//     } elseif (function_exists('apache_request_headers')) {
//         $requestHeaders = apache_request_headers();
//         // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
//         $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
//         //print_r($requestHeaders);
//         if (isset($requestHeaders['Authorization'])) {
//             $headers = trim($requestHeaders['Authorization']);
//         }
//     }
//     return $headers;
// }

/**
 * get access token from header
 * *//** 
 * Get header Authorization
 * */
$url="http://localhost/cheflick/hello.php";
print_r(get_headers($url, true));
?>

