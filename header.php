
      <head>

        <link rel="stylesheet" href="css/header.css">
        <script>
          function myFunction(id) {
              alert(id);
              var copyText = document.getElementById(id).value;
              alert(copyText);
              copyTextToClipboard(copyText);
          } 
          
          function copyText(me)
           {
              let input1 = me.parentElement.children[0];
              input1.select();
              navigator.clipboard.writeText(input1.value);
          };            
        
          function myFunctionsidebaropn() 
          {
            var x = document.getElementById("navdown");
            if (x.style.display === "flex") {
              x.style.display = "none";
            } else {
              x.style.display = "flex";
            }
          }
           
          function myFunctionsidebarclo() 
          {
            var x = document.getElementById("navdown");
            if (x.style.display === "flex") {
              x.style.display = "none";
            } else {
              x.style.display = "flex";
            }
          }
  </script>    
    </head>      


      <header>
            <div class="container-width-adj">
            <div class="top-bar row">
                <div class="navbar-log singupinfo md-3">
                    <a class="navbar-brand-crt" href="singup.php">Doesn’t Have an Account <i>Signup</i></a>
                </div>
                <div class="navbar-log channel md-4">
                    <span>Become  Cooking Star  </span>
                    <span>Become  Cooking Star  </span>
                    
                </div>
                <div class="navbar-log linksinfo md-3">
                    <div class="none-dropdown">
                        <div class="eng">                                          
                            <span><i style='font-size:24px' class='bi bi-globe'></i>
                                <a> ENG</a>
                            </span>
                        </div>  
                        <div class="login">                                          
                            <span><i style='font-size:24px' class='bi bi-person-fill'></i>
                                <a  href="login.php"> LOGIN</a>
                            </span>
                            
                        </div>  
                    </div>
                </div>
            </div>
                <div class="navb-wrapper">
                    <div class="cont-fluid row">
                        <nav class="navbar navbar-fixed-top">
                            <div class="container-nav ">
                                    <div class="navbar-header-log md-3">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                                        </button>
                                        <a class="navbar-brand" href="home.php"><img src="img/1-removebg-preview-300x91.png" style="height: 50px; width:150px"></a>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse md-4">
                                        <ul class="nav navbar-nav">
                                            <li>
                                            <a href="home.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.php">About</a>
                                            </li>
                                            <li>
                                                <a href="cookingstar.php">Cooking Star</a>
                                            </li>
                                            <li>
                                                <a href="faq.php">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="affiliated-program.php">Affiliate Program</a>
                                            </li>
                                            <li>
                                                <a href="contact.php">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="navbar-header-cresed md-3">
                                        <div class="dropdown">
                                            <div class="toggle">                                          
                                                <span  onclick="myFunctionsidebaropn()"><i style='font-size:50px; color:#000 !important;' class='bi bi-list'></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="none-dropdown">
                                            <div class="whislist">                                          
                                                <span><i style='font-size:60px' class='bi bi-heart-fill'></i>
                                                    <a> Fav</a>
                                                </span>
                                            </div>  
                                            <div class="addtocart">                                          
                                                <span><i style='font-size:50px' class='bi bi-bag-fill'></i></span>
                                            </div>  
                                        </div>
                                    </div>   
                            </div>
                        </nav>
                    </div>
                    <div class="sidebar-appar row" id="navdown">
                        <div class="navdown-content col-sm-5" >
                            <div class="sidebar-close" onclick="myFunctionsidebarclo()">
                            <i class="bi bi-x-circle"></i>
                            </div>
                            <div class="sidebar-nav">
                                <ul>
                                    <li>
                                        <a href="home.php" class="">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>
                                    </li>
                                    <li>
                                        <a href="cookingstar.php">Cooking Star</a>
                                    </li>
                                    <li>
                                        <a href="faq.php">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="affiliated-program.php">Affiliate Program</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    <li>
                                        <a  href="singup.php">Sing Up</a>
                                    </li>
                                </ul>    
                            </div>  
                        </div>  
                    </div>      
                </div>        
            </div>
      </header> 