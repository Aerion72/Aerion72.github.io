<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo BASEURL;?>/img/us_pi/master-pic.jpg" rel="icon" type="image/jpg">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/style.css">
 <!--  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/animate.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/fontawesome-free-5.2.0-web/css/all.css">
  <script type="text/javascript" url="<?php echo BASEURL;?>/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" url="<?php echo BASEURL;?>/js/main.js"></script>
	<title><?= $data['judul'];?></title>
</head>
<body>

   <header class="header">
      <ul>
          <li id="strok">
              <img class="admimg" src="<?php echo BASEURL;?>/img/us_pi/master-pic.jpg" alt="">
          </li>
          <li><span>Hy, <a href="" id="ad-l">Admin !</a></span></li>
          <li>
              <input type="text" placeholder="Type Something Here..">
          </li>
          <li>        
               <a href=""><span class="fa-fw select-all fas"></span></a>
          </li>
          <li id="setting">
              <a href="#setting" title="Setting" ><span class="fa-fw select-all fas"></span></a>
          </li>

          <li>
              <a href="#logout" title="Logout"><span class="fa-fw select-all fas"></span></a>
          </li>
      </ul>
  </header>
<div id="wrap" class="main-wrap">
<header class="pageinfo">
<!--             <nav id="inf-one">
              <h1><span class="fa-fw select-all fas"></span> Dashboard </h1>
            </nav>
            <nav id="inf-two">
              <H1><?= $data['firstjudul'];?></H1>  
            </nav>
            <nav id="inf-tree" class="bea">
              <H1>></H1>                
            </nav>
</header> -->
