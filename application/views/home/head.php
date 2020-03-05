<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- My CSS move on file css -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">

    <title><?=$judul;?></title>
  </head>
  <body>

  <!-- NavBar -->
  <div class="navbar-fixed">
    <nav class="blue lighten-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Tegar</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- SlideNav for mobile -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#portofolio">Portofolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
