<?php
include_once 'db.php';

$planet_name = mysqli_real_escape_string($db, $_POST['planet_name']);

$sql = "SELECT * FROM planet WHERE planet_name = '$planet_name';";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

if ($check > 0) {
    while($row = mysqli_fetch_assoc($res)) {
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Planets</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

    @font-face{
    	src: url("../fonts/Montserrat-Light.ttf");
    	font-family: mont;
    }

    @font-face{
    	src: url("../fonts/Raleway-MediumItalic.ttf");
    	font-family: rale;
    }
      .a{
        height: 1000px;
        width: 90%;
        margin-left: 70px;
        background-image: url("../images/mars.png");
        background-repeat: no-repeat;
        background-size:1450px 1100px;
        text-align: center;
      }
      .b{
        margin-top: 20px;
        height: 500px;
        width: 90%;
        margin-left: 70px;
      }
      .c{
        margin-top: 20px;
        height: 600px;
        width: 90%;
        margin-left: 70px;
        margin-bottom: 100px;
        background-image: url("../images/mars2.png");
        background-repeat: no-repeat;

      }
      .d{
        margin-top: 100px;
        height: 410px;
        margin-left: 20px;
        margin-bottom: 70px;
        width: 90%;

      }
      .planet_name{
        align-items: center;
        margin-top: 400px;
        margin-left: 500px;
        margin-right: 300px;
        font-family: mont;
        /*background-image: linear-gradient(to right,#360033,#0b8793);*/
        font-size: 70px;
        color: white;
        border-radius: 10px;
        text-shadow: 4px 4px 4px 4px gray;
      }
      .p_data{
        margin-left: 45px;
        margin-top: 80px;
        margin-right: 20px;
      }
      .op{

        height: 300px;
        width: 90%;
        margin-left: 70px;
      }
      .likha{
        margin-bottom: 100px;
      }
      body{
        background-image: url("../images/bg.webp");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;

      }

      th,td{
        color: white;
        font-size: 25px;
        align-items: center;
      }
      h1,h2,h3{
        color: white;
      }

    </style>
  </head>
  <body>
    <div>
      <?php include "nav_bar/menu.php"?>
    </div>
    <div class="w3-container w3-back a">
      <div class="planet_name w3-center">
        <p>
          <?php
                echo($row['planet_name']);
            ?>
        </p>
      </div>
    </div>
    <div class="w3-container  b">
    <div class="w3-container p_data">
  <h1>Various characteristic data is shown about "<?php
        echo($row['planet_name']);
    ?>"</h1>
<div class="data-p1 w3-half">
  <table class="w3-table op">
    <tr>
      <td>Mass (10<sup>24</sup>kg)</td>
      <td><?php
            echo($row['mass']);
        ?></td>
    </tr>
    <tr>
      <td>Diameter(km)</td>
      <td><?php
            echo($row['diameter']);
        ?></td>
    </tr>
    <tr>
      <td>Density(kg/m<sup>3</sup>)</td>
      <td><?php
            echo($row['density']);
        ?></td>
    </tr>
    <tr>
      <td>Gravity(m/s<sup>2</sup>)</td>
      <td><?php
            echo($row['gravity']);
        ?></td>
    </tr>
    <tr>
      <td>Length of day(hour)</td>
      <td><?php
            echo($row['day_length']);
        ?></td>
    </tr>

  </table>
</div>
<div class="data-p2 w3-half">
  <table class="w3-table op">
    <tr>
      <td>Distance from Sun (10<sup>6</sup>km)</td>
      <td><?php
            echo($row['distance_from_sun']);
        ?></td>
    </tr>
    <tr>
      <td>Orbital Velocity(km/s)</td>
      <td><?php
            echo($row['orbital_velocity']);
        ?></td>
    </tr>
    <tr>
      <td>Mean Temperature (C)</td>
      <td><?php
            echo($row['mean_temp']);
        ?></td>
    </tr>
    <tr>
      <td>Surface Pressure(bars)</td>
      <td><?php
            echo($row['surface_press']);
        ?></td>
    </tr>
    <tr>
      <td>Number of Moon</td>
      <td><?php
            echo($row['moon_number']);
        ?></td>
    </tr>

  </table>
</div>

</div>
    </div>
    <div class="w3-container c">
      <div class="w3-container w3-half ">

      </div>
      <div class="w3-container w3-half likha">
        <h1>Some Facts!! </h1>
        <h3><?php
              echo($row['detail_des']);
          ?></h3>
      </div>

    </div>
  </body>
</html>
<?php }} ?>
