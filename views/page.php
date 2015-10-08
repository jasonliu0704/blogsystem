<?php
return "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

<title>$pageData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
<!-- Bootstrap Core CSS -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href='css/clean-blog.min.css' rel='stylesheet'>

    <!-- Custom Fonts -->
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='css/signin.css' rel='stylesheet'>
    <link href='css/dashboard.css' rel='stylesheet'>
$pageData->css
$pageData->embeddedStyle

</head>

 <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

    <!-- Custom Theme JavaScript -->
    <script src='js/clean-blog.js'></script>
<body>
$pageData->content
$pageData->scriptElements
</body>
</html>";
