<?php
require 'libraries/TeamSpeak3/TeamSpeak3.php';
require 'conf.php';
session_start();
$digits = 4;
$_SESSION['code'] = rand(pow(10, $digits-1), pow(10, $digits)-1);
try {
  $ts3_VirtualServer->clientGetByUid($result)->poke($_SESSION['code']);
} catch(Exception $e) {
    header('Location: connected.php');
}
?>
<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Kappateure | Registrierung</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
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
            <h2> Freischaltung - Schritt 2</h2>
            <hr>
            Der Bot hat dir nun einen Code zugeschickt. Bitte gebe diesen in das unten stehende Feld ein um deine Identität zu bestätigen. <br> Nachdem dies validiert wurde, kannst du dir deine Server-Gruppen aussuchen und danach ist die Registrierung abgeschlossen.
            <hr>
              <form role="form" action="registration.php" method="get">
                  <div class="form-group">
                    <label>Bitte gebe hier den Code ein, den dir der Bot zugeschickt hat</label>
                    <input type="text" maxlength="4" class="form-control" name="code" placeholder="Code ...">
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
