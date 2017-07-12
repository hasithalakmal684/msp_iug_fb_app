<?php
$pid = $_GET['pid'];
$file_path = './output/output'.$pid.'.jpeg';
$msg = '';
$link = '';
if(file_exists($file_path)) {
    header("Content-disposition: attachment; filename=".$pid.".jpeg");
    header('Content-type: application/octet-stream');
    readfile($file_path);
    unlink($file_path);
    $msg = "Thank you for supporting Inter University Games 2017. Click below button to see whats happen on IUG 2017.";
    $link='http://sports.moraspirit.com/';
}else {
    $msg = "Sorry, This image was downloaded once. You have to make another one. Click below button to make one.";
    $link='http://support.moraspirit.com';
}
?>
<html xmlns="http://www.w3.org/1999/html">
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
<body class="container-fluid" ">
    <div class="row text-center" id="count_div" style="margin-top: 150px;display: block">
        <div class="btn btn-primary" style="background-color: #3b5998;margin-bottom: 50px">
            <label style="font-family: Tahoma; font-size: 20px"><?php echo $msg;?></label>
        </div>
    </div>
    <div class="row text-center" id="continue_div" style="display: block">
        <div class="btn btn-primary" style="background-color: #3b5998;">
            <a href="<?php echo $link;?>" style="font-family: Tahoma; font-size: 20px">Inter University Games 2017</a>
        </div>
    </div>
</body>
</html>