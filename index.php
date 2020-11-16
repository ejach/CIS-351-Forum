<?php session_start();
include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Talko Forum</title>
  <link rel="icon" href="logo.png" type="image/x-icon">
</head>
<body>
  <div class="topnav">
    <div class="topnav-img" id="logo">
        <img src="logo.png" width="45" height="45" draggable="false" alt="logo">
      </div>
    <a href="/" id="home" draggable="false">Talko Forum</a>
    <?php loginBar(); ?>
  </div>
  <div id="main">
    <h2>Talko Forum</h2>
    <?php welcomeBar(); ?>
    <!-- forum search box -->
    <style>
      #country-list{list-style:none;margin-top:-3px;position: absolute; top:40px; left:190px;}
      #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
      #country-list li:hover{background:#ece3d2;cursor: pointer;}
      #search-box{padding: 10px;border:#2F1B1B 1px solid;}
      </style>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
      <script>
      $(document).ready(function(){
      	$("#search-box").keyup(function(){
      		$.ajax({
      		type: "GET",
      		url: "readPostName.php",
      		data:'keyword='+$(this).val(),
      		success: function(data){
      			$("#suggesstion-box").show();
      			$("#suggesstion-box").html(data);
      			$("#search-box").css("background","#FFF");
      		}
      		});
      	});
      });

      function selectPost(val, id) {
        $("#search-box").val(val);
        $("#suggesstion-box").hide();
      }
    </script>
    <div class="frmSearch">
      <form action="redirect.php" method="GET">
      <div style="position:relative;">
        <label class="label" for="searchBox">Search for a post here:</label>
        <input type="text" id="search-box" autocomplete="off" placeholder="Post Topic" />
        <div id="suggesstion-box"></div>
        <input type="submit" style="background-color:#2F1B1B; height:36px; width: 60px; border-radius:8px; position:absolute; top:1px; left:400px" class="buttonStyle" value="GO!">
      <div>
    </form>
    </div>
    <!-- post suggestions -->
    <div class="container">
      <h3 id="divider">General</h3>
      <input type="image"  id="minus" src="minus.png" class="collapsible"  alt="Submit Form" />
      <br><a href="introductions.php" id="content" draggable="false">Introductions</a>
      <br><i id="subtext">Introduce yourself</i>
      <br><a href="#" id="content" draggable="false">Forum-specific</a>
      <br><i id="subtext">Questions about the forum</i>
      <br><a href="#" id="content" draggable="false">Birthday Wishes</a>
      <br><i id="subtext">Wish the members of the forum Happy Birthday!</i>
    </div>
    <div class="container">
      <br><h3 id="divider">Off-Topic</h3><img src="minus.png" id="minus" height="15" width="17">
      <br><a href="#" id="content" draggable="false">Video Games</a>
      <br><i id="subtext">See what videogames your fellow members play</i>
      <br><a href="#" id="content" draggable="false">Music</a>
      <br><i id="subtext">Looking for music suggestions? Look no further!</i>
      <br><a href="#" id="content" draggable="false">Misc</a>
      <br><i id="subtext">Can't find a topic? Post it here!</id>
    </div>
    <footer id="footer" style="position: absolute; text-align: center; bottom: 0; width: 100%; height: 2.5rem;">
    <?php footerBar();?>
    </footer>
  </div>
</body>
</html>
