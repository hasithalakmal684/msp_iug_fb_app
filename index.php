<?php
include 'func.php';

$str = file_get_contents('./data/album.json');
$json = json_decode($str, true);
$count = $json['album']['count'];
$tot_count = $count;
$count = ($count - ($count % 10));
$COL = $json['album']['COL'];
$EST = $json['album']['EST'];
$JAF = $json['album']['JAF'];
$KEL = $json['album']['KEL'];
$MOR = $json['album']['MOR'];
$PER = $json['album']['PER'];
$RAJ = $json['album']['RAJ'];
$RHU = $json['album']['RHU'];
$SAB = $json['album']['SAB'];
$SEA = $json['album']['SEA'];
$SJP = $json['album']['SJP'];
$UVA = $json['album']['UVA'];
$VPA = $json['album']['VPA'];
$WAY = $json['album']['WAY'];

$COL_percentage = ($COL*100)/$tot_count;
$EST_percentage = ($EST*100)/$tot_count;
$JAF_percentage = ($JAF*100)/$tot_count;
$KEL_percentage = ($KEL*100)/$tot_count;
$MOR_percentage = ($MOR*100)/$tot_count;
$PER_percentage = ($PER*100)/$tot_count;
$RAJ_percentage = ($RAJ*100)/$tot_count;
$RHU_percentage = ($RHU*100)/$tot_count;
$SAB_percentage = ($SAB*100)/$tot_count;
$SEA_percentage = ($SEA*100)/$tot_count;
$SJP_percentage = ($SJP*100)/$tot_count;
$UVA_percentage = ($UVA*100)/$tot_count;
$VPA_percentage = ($VPA*100)/$tot_count;
$WAY_percentage = ($WAY*100)/$tot_count;
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
    <script type="text/css">
        @media all and (max-width: 1200px) { /* screen size until 1200px */
            #count_div,#continue_div{
                font-size: 1.5em; /* 1.5x default size */
            }
        }
        @media all and (max-width: 1000px) { /* screen size until 1000px */
            #count_div,#continue_div {
                font-size: 1.2em; /* 1.2x default size */
            }
        }
        @media all and (max-width: 500px) { /* screen size until 500px */
            #count_div,#continue_div {
                font-size: 0.8em; /* 0.8x default size */
            }
        }
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '799519263533753',
                status: true,
                cookie: true,
                xfbml: true
            });
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
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    accessToken = response.authResponse.accessToken;
                    window.location.href = url+"/change_frame.php";
                    console.log('Logged in.');

                } else {
                    FB.login(function (response) {
                        window.location.href = url+"/change_frame.php";
                    }, {
                        scope: 'public_profile',
                        return_scopes: true
                    });
                }
            });
        }
        login();
    </script>

    <style>
        body {
            background: url(bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body class="container-fluid" onload="login();">

<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="http://sports.moraspirit.com">InterUni 2017</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="http://sports.moraspirit.com/#rankings" style="font-size: 0.9em">Ranking</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://sports.moraspirit.com/#matches" style="font-size: 0.9em">RECENT MATCHES</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://sports.moraspirit.com/#upcomings" style="font-size: 0.9em">UPCOMING MATCHES</a>
                </li>
                <!--                    <li>
                                        <a class="page-scroll" href="#votings" style="font-size: 0.9em">VOTING</a>
                                    </li>-->
                <li>
                    <a class="page-scroll" href="http://sports.moraspirit.com/events" style="font-size: 0.9em">EVENTS</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://sports.moraspirit.com/gallery" style="font-size: 0.9em">Photos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="row text-center" id="count_div" style="margin-top: 150px;display: block">
    <div class="btn btn-primary" style="background-color: #3b5998;margin-bottom: 50px">
        <label style="font-family: Tahoma; font-size: 20px"><?php print($count); ?>+ changed their profile
            pictures.</label>
    </div>
</div>
<div class="row text-center" id="continue_div" style="display: block">
    <div class="btn btn-primary" style="background-color: #3b5998;"
         onclick="login();">
        <label style="font-family: Tahoma; font-size: 20px">
            <i class="fa fa-facebook-official" style="font-size:24px;color:white"></i> continue with
            Facebook.</label>
    </div>
</div>

<div class="row text-center" id="stat_div" style="display: block;margin-top: 70px">
    <div class="btn btn-primary" style="background-color: #3b5998;">
        <label style="font-family: Tahoma; font-size: 14px">Support Statisctics</label>
    </div>
</div>
<div class="row text-center" id="stat_div" style="display: block;margin-top: 10px">
    <table class="table table-bordered table-responsive" align="center" style="background-color:rgba(210,130,240, 0.3);width: 80%;font-family: Tahoma; font-size: 12px;color: black">
        <tr  class="info">
            <th  style="text-align: center">
                University
            </th>
            <th  style="text-align: center">
                Total Photo Changes (<?php echo $tot_count?>)
            </th>
            <th  style="text-align: center">
                Percentage (%)
            </th>
        </tr>
        <tr>
            <td>Unversity of Colombo</td>
            <td style="text-align: center"><?php echo $COL;?></td>
            <td style="text-align: center"><?php echo number_format((float)$COL_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Sri Jayawardenap</td>
            <td style="text-align: center"><?php echo $SJP;?></td>
            <td style="text-align: center"><?php echo number_format((float)$SJP_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Ruhuna</td>
            <td style="text-align: center"><?php echo $RHU;?></td>
            <td style="text-align: center"><?php echo number_format((float)$RHU_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Sabaragamuwa University</td>
            <td style="text-align: center"><?php echo $SAB;?></td>
            <td style="text-align: center"><?php echo number_format((float)$SAB_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Jaffna</td>
            <td style="text-align: center"><?php echo $JAF;?></td>
            <td style="text-align: center"><?php echo number_format((float)$JAF_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Peradeniya</td>
            <td style="text-align: center"><?php echo $PER;?></td>
            <td style="text-align: center"><?php echo number_format((float)$PER_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Moratuwa</td>
            <td style="text-align: center"><?php echo $MOR;?></td>
            <td style="text-align: center"><?php echo number_format((float)$MOR_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>University of Kelaniya</td>
            <td style="text-align: center"><?php echo $KEL;?></td>
            <td style="text-align: center"><?php echo number_format((float)$KEL_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Rajarata University</td>
            <td style="text-align: center"><?php echo $RAJ;?></td>
            <td style="text-align: center"><?php echo number_format((float)$RAJ_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Wayamba University</td>
            <td style="text-align: center"><?php echo $WAY;?></td>
            <td style="text-align: center"><?php echo number_format((float)$WAY_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Eastern University</td>
            <td style="text-align: center"><?php echo $EST;?></td>
            <td style="text-align: center"><?php echo number_format((float)$EST_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>South Eastern University</td>
            <td style="text-align: center"><?php echo $SEA;?></td>
            <td style="text-align: center"><?php echo number_format((float)$SEA_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Uva Wellassa University</td>
            <td style="text-align: center"><?php echo $UVA;?></td>
            <td style="text-align: center"><?php echo number_format((float)$UVA_percentage, 2, '.', '')."%"; ?></td>
        </tr>
        <tr>
            <td>Visual Performing Arts University</td>
            <td style="text-align: center"><?php echo $VPA;?></td>
            <td style="text-align: center"><?php echo number_format((float)$VPA_percentage, 2, '.', '')."%"; ?></td>
        </tr>
    </table>
</div>
<footer style="background-color: #1a1a1a">
    <div class="" style="width: 100%">
        <div class="row" >
            <div class="col-md-4" style="color: #f02828">
                <span class="copyright">Copyright &copy; moraspirit 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://twitter.com/moraspiritNews"><i id="twitter" class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/moraspirit.fanpage"><i id="facebook" class="fa fa-facebook-official"></i></a>
                    </li>
                    <li><a href="http://www.linkedin.com/company/moraspirit-initiative"><i id="linkedin" class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="http://www.youtube.com/user/moraspiritNews?feature=watch"><i id="youtube" class="fa fa-youtube"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/108795907592684921602/posts"><i id="plus" class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Moraspirit</a>
                    </li>
                    <li><a href="#">Support Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
