<html>
<head>
    <title>Inter University Games 2017  SUPPORT</title>
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

        var image_url = "";
        var url = "http://support.moraspirit.com";
        //var url = "http://localhost/FBApp";
        var accessToken = "";
        var userID = "";
        function login(uni) {
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    accessToken = response.authResponse.accessToken;
                    userID = response.authResponse.userID;
                    FB.api('/'+userID+'/picture?type=large&height=720&width=720', function (response2) {
                        image_url = response2.data.url;
                        $.ajax({url: url + "/save_image.php",
                            data: {"url": image_url},
                            type: 'post',
                            success: function (output) {
                                console.log("Save success : "+output);
                                $.ajax({url: url + "/merge_image.php",
                                    type: 'post',
                                    data:{"uni": uni,"uid":userID},
                                    success: function (output2) {
										console.log("Merge success :"+output2);
										var json = JSON.parse(output2);
                                        console.log("Merge success :"+json["uid"]);
                                        FB.ui({
                                            /*method: "feed",
                                            name: "Inter University Games 2017",
                                            link: "http://support.moraspirit.com/download.php?pid="+userID,
                                            picture: output2,
                                            caption: "Inter University Games 2017",
                                            description: "Support Inter University Games 2017",
                                            hashtag: "#inter_uni_games_2017",
                                            mobile_iframe:true*/
                                            method: 'share_open_graph',
											action_type: 'og.shares',
											action_properties: JSON.stringify({
												object : {
												   'og:url': 'http://support.moraspirit.com/download.php?pid='+json["uid"], // your url to share
												   'og:title': 'Inter University Games 2017',
												   'og:description': 'Support Inter University Games 2017',
												   'og:image': json["image"]
												}
											})
                                        }, function(response){
                                            $('#photoModal').modal('toggle');
                                            $.ajax({
                                                url: url + "/upload_image.php",
                                                type: 'post',
                                                data:{"uni": uni},
                                                success:function (d) {
                                                    console.log(d);
                                                }
                                            });
                                            window.location.href="http://support.moraspirit.com";
                                        });
                                    },
                                    error:function(error){
                                        console.log("Merge Error : "+error);
                                    }
                                });
                            },
                            error:function(error){
                                console.log("Save Error : "+error);
                            }
                        });
                    });

                } else {
                    FB.login(function (response) {
                        window.location.href="http://support.moraspirit.com/change_frame.php";
                    });
                }
            });
        }
    </script>

    <style>
        body {
            background: url(bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Coda', cursive;
        }
    </style>
</head>
<body class="container-fluid">
<?php include_once("analyticstracking.php") ?>
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
                    <a href="#"></a>
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

<div class="row" style="margin-left: auto;margin-right: auto;position: relative;top: 15%">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('COL');">
            <img src="./uni_logo/COL.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Colombo</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('EST');">
            <img src="./uni_logo/EST.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >Eastern Unuversity</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('JAF');">
            <img src="./uni_logo/JAF.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Jaffna</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('KEL');">
            <img src="./uni_logo/KEL.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Kelaniya</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('MOR');">
            <img src="./uni_logo/MOR.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Moratuwa</label>
        </button>
    </div>
</div>
<div class="row" style="margin-left: auto;margin-right: auto;position: relative;top: 15%">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('PER');">
            <img src="./uni_logo/PER.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Peradeniya</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('RAJ');">
            <img src="./uni_logo/RAJ.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >Rajarata University</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('RHU');">
            <img src="./uni_logo/RHU.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Ruhuna</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('SAB');">
            <img src="./uni_logo/SAB.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >Sabaragamuwa University</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('SEA');">
            <img src="./uni_logo/SEA.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >South Eastern University</label>
        </button>
    </div>
</div>
<div class="row" style="margin-left: auto;margin-right: auto;position: relative;top: 15%">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('SJP');">
            <img src="./uni_logo/SJP.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of Sri Jayawardenepura</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('UVA');">
            <img src="./uni_logo/UVA.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >Uva Wellassa University</label>
        </button>
    </div>
    <div class="col-md-3">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('VPA');">
            <img src="./uni_logo/VPA.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >University of The Visual and Performing Arts</label>
        </button>
    </div>
    <div class="col-md-2">
        <button style="background-color: transparent;border-color: transparent" data-toggle="modal" data-target="#photoModal"  onclick="login('WAY');">
            <img src="./uni_logo/WAY.png" width="120px" height="120px"/>
            <label class="label label-primary" style="font-size: 12px;background-color: #3b5998" >Wayamba University</label>
        </button>
    </div>
</div>

<!-- Modal -->
<div id="photoModal" class="modal fade" role="dialog" style="top: 35%">
    <div class="modal-dialog"  style="width: 450px;height: 500px">
        <div class="modal-content">
            <div class="modal-body label label-primary"  style="font-size: 20px;position: fixed;background-color: #3b5998;margin-left: auto;margin-right: auto;width: 100%">
                Waiting for Facebook Sharing...
            </div>
        </div>
    </div>
</div>
</body>
</html>
