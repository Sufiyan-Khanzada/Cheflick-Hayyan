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


         <link rel="stylesheet" href="css/home.css">
             
     </head>      
        <body>

            <form id="form">
                <p>        Full Name <input type="text" name="full_name"/></p>
                <p>        Email <input type="email" name="email"/></p>
                <p>        Phone<input type="tel" name="phone"/></p>
                <p>        Address<input type="text" name="address"/></p>
                <p>        Password<input type="password" name="password"/></p>
                <p>        Confirm Password<input type="password" name="confirm_password"/></p>
                <p>        Device Type<input type="text" name="device_type"/></p>
                <p>        Token <input type="number" name="device_token"/></p>
                <p>        Latitude<input type="number" name="latitude"/></p>
                <p>        Longitude <input type="number" name="longitude"/></p>
                <p>        Address One<input type="text" name="address1"/></p>
                <p>        City<input type="text" name="user_city"/></p>
                <p>            <input type="submit" name="submit"/></p>
            </form>
            <script>
                const form = document.getElementById('form');

                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    
                    const prePayload = new FormData(form);
                    const payload = new URLSearchParams(prePayload);

                    console.log([...payload]);

                    fetch('https://dev.api.cheflick.net/api/user/create-user?', {
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