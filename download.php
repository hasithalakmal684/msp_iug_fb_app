<?php
$pid = $_GET['pid'];
$uid = $_GET['uid'];
$paramTkn = $_GET['tkn'];
?>
<html>
<head>
    <title>Inter University Games 2017 - SUPPORT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://sports.moraspirit.com/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="http://sports.moraspirit.com/css/mspWeb.css"/>
    <link rel="stylesheet" href="http://sports.moraspirit.com/css/owl.theme.default.min.css"/>
    <script src="http://sports.moraspirit.com/js/owl.carousel.min.js"></script>
    <script src="http://sports.moraspirit.com/js/agency.min.js"></script>
    <script src="http://sports.moraspirit.com/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://sports.moraspirit.com/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="http://sports.moraspirit.com/js/contact_me.js"></script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '799519263533753',
                status: true,
                cookie: true,
                xfbml: true
            });
            login();
        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/all.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

          var url = "http://support.moraspirit.com";
          //var url = "http://localhost/FBApp";
          var accessToken = "";
          function login() {
            console.log("In the login function");
              FB.getLoginStatus(function (response) {
                console.log(response);
                  if (response.status === 'connected') {
                      accessToken = response.authResponse.accessToken;
                      console.log(accessToken);
                      var redrct = url+"/download_intermediate.php?pid=<?php echo $pid;?>&uid=<?php echo $uid;?>&tkn="+accessToken;
                      window.location.href = redrct;

                  } else {
                    console.log("to be Logged");
                      FB.login(function (response) {
                        var redrct = url+"/download.php?pid=<?php echo $pid;?>&uid=<?php echo $uid;?>&tkn=<?php echo $paramTkn;?>";
                        window.location.href = redrct;
                      }, {
                          scope: 'public_profile',
                          return_scopes: true
                      });
                  }
              });
              console.log("end of the login function");
          }

      /*  $(document).ready(function(){

      });*/


    </script>
  </head>
  <body>
  </body>
</html>
