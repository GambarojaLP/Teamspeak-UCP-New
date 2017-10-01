<?php
require 'libraries/TeamSpeak3/TeamSpeak3.php';
require 'conf.php';
session_start();
try {
    $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(75);
    sleep(1.5);  
    if (isset($_POST['alter_0'])) {

    	$ts3_VirtualServer->clientGetByUid($result)->addServerGroup(43);
        sleep(1.5);  
    }
    if (isset($_POST['alter_12'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(44);
        sleep(1.5); 
    }
    if (isset($_POST['alter_14'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(45);
        sleep(1.5); 
    }
    if (isset($_POST['alter_16'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(46);
        sleep(1.5); 
    }
    if (isset($_POST['alter_18'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(47);
        sleep(1.5);
    }
    if (isset($_POST['alter_21'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(48);
        sleep(1.5);
    }
    if (isset($_POST['alter_24'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(49);
        sleep(1.5);
    }
    if (isset($_POST['alter_27'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(50);
        sleep(1.5);
    }
    if (isset($_POST['alter_30'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(51);
        sleep(1.5);
    }
    if (isset($_POST['cod'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(34);
        sleep(1.5);
    }
    if (isset($_POST['cs'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(35);
        sleep(1.5);
    }
    if (isset($_POST['do'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(36);
        sleep(1.5);
    }
    if (isset($_POST['dbd'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(37);
        sleep(1.5);
    }
    if (isset($_POST['gta'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(38);
        sleep(1.5);
    }
    if (isset($_POST['mc'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(39);
        sleep(1.5);
    }
    if (isset($_POST['lol'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(40);
        sleep(1.5);
    }
    if (isset($_POST['bf'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(82);
        sleep(1.5);
    }
    if (isset($_POST['wd'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(83);
        sleep(1.5);
    }
    if (isset($_POST['d3'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(84);
        sleep(1.5);
    }
    if (isset($_POST['rl'])) {

        $ts3_VirtualServer->clientGetByUid($result)->addServerGroup(41);
        sleep(1.5);
    }
    $finished = "true";
    if ($finished == "true") {
        header("Location: finished.php");
    } else {
        //Nothing
    }
} catch(Exception $e) {
    
}

session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Kappateure | Error</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-red">500</h2>
        <div class="error-content">
          <h3><i class="fa fa-warning text-red"></i> Oops! Etwas ist schief gelaufen!</h3>
          <p>
          Wir werden sofort daran arbeiten! <br> In der Zwischenzeit kannst du den Admins den Fehler bescheidgeben. <br> Information: <?php echo "Fehler!<br/>ErrorID: <b>". $e->getCode() ."</b>; Error Message: <b>". $e->getMessage() ."</b>;";?>
          </p>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
