<?php
require 'libraries/TeamSpeak3/TeamSpeak3.php';
require 'conf.php';
session_start();
if( !isset($_SESSION["code"]) ){
    header("location:nocode.php");
    exit();
}

if ($_SESSION['code'] == $_GET["code"]) {
	
} else  {
	header( "Location: false.php" );
}

session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Kappateure | Freischaltung</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/slider.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b>The</b>Kappateure</a>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <h1>
          Freischaltung
          <small>The Kappateure</small>
        </h1>
      </section>
      <section class="content">
        <div class="box box-primary">
          <div class="box-body">
            <h2> Freischaltung - Schritt 3</h2>
            <hr>
            Du hast deine Identität erfolgreich bestätigt! Nun suche dir aus den unten stehenden Boxen die Server-Gruppen aus, die deinen Kriterien entsprechen. <br> Abuse der Auswahlmöglichkeit werden mit einem Permanentem Bann bestraft! (Mehrfache Altersgruppen etc.) <br> <h5> Achtung! Nach dem abschicken kann es bis zu einer Minute dauern bis du zur nächsten Seite gelangst, da dir deine Server-Gruppen asynchron zugeteilt werden!
            <hr>
            <form role="form" action="worker.php" method="post">
            <div class="form-group">
              <label>Bitte wähle hier dein Alter aus!</label>
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_0">
                <div class="slider round"></div>
              </label>
              0+ Jahre alt
              <hr>
    					<label class="switch">
    					  <input type="checkbox" name="alter_12">
    					  <div class="slider round"></div>
    					</label>
    					12+ Jahre alt
    					<hr>
    					<label class="switch">
    					  <input type="checkbox" name="alter_14">
    					  <div class="slider round"></div>
    					</label>
    					14+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_16">
                <div class="slider round"></div>
              </label>
              16+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_18">
                <div class="slider round"></div>
              </label>
              18+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_21">
                <div class="slider round"></div>
              </label>
              21+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_24">
                <div class="slider round"></div>
              </label>
              24+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_27">
                <div class="slider round"></div>
              </label>
              27+ Jahre alt
              <hr>
              <label class="switch">
                <input type="checkbox" name="alter_30">
                <div class="slider round"></div>
              </label>
              30+ Jahre alt
              <hr>
              <hr>
              <div class="form-group">
              <label>Bitte wähle hier deine Spiele aus!</label>
              <hr>
              <label class="switch">
                <input type="checkbox" name="cod">
                <div class="slider round"></div>
              </label>
              Call of Duty
              <hr>
              <label class="switch">
                <input type="checkbox" name="cs">
                <div class="slider round"></div>
              </label>
              Counter Strike
              <hr>
              <label class="switch">
                <input type="checkbox" name="do">
                <div class="slider round"></div>
              </label>
              Dark Orbit
              <hr>
              <label class="switch">
                <input type="checkbox" name="dbd">
                <div class="slider round"></div>
              </label>
              Dead by Daylight
              <hr>
              <label class="switch">
                <input type="checkbox" name="gta">
                <div class="slider round"></div>
              </label>
              GTA
              <hr>
              <label class="switch">
                <input type="checkbox" name="mc">
                <div class="slider round"></div>
              </label>
              Minecraft
              <hr>
              <label class="switch">
                <input type="checkbox" name="lol">
                <div class="slider round"></div>
              </label>
              League of Legends
              <hr>
              <label class="switch">
                <input type="checkbox" name="bf">
                <div class="slider round"></div>
              </label>
              Battlefield
              <hr>
              <label class="switch">
                <input type="checkbox" name="wd">
                <div class="slider round"></div>
              </label>
              Watch Dogs
              <hr>
              <label class="switch">
                <input type="checkbox" name="d3">
                <div class="slider round"></div>
              </label>
              Diablo 3
              <hr>
              <label class="switch">
                <input type="checkbox" name="rl">
                <div class="slider round"></div>
              </label>
              Rocket League
              <hr>
              </div>
              <button type="submit" class="btn bg-green btn-block">Abschicken</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>