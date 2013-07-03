<!DOCTYPE html>
<html>
<head>
    <title>Session Demo - <?php echo $subtitle ?></title>
    <style type="text/css" media="all">
        @import url("css/bootstrap.css");
        body {
            padding-top: 40px;
        }
    </style>
    <?php session_start(); ?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="index.php">Sessions Demo</a>
                <ul class="nav">
                    <li><a href="store.php">Store Data</a></li>
                    <li><a href="view.php">View Data</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
