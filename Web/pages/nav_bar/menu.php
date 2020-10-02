<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu</title>
    <style media="screen">
    *{
      margin: 0px;
      padding: 0px;
    }
    ul, ol{
      list-style: none;
    }

    a{
      text-decoration: none;
    }

    @font-face{
      src: url("../../fonts/Montserrat-Light.ttf");
      font-family: mont;
    }

    @font-face{
      src: url("../../fonts/Raleway-MediumItalic.ttf");
      font-family: rale;
    }

    .main{
      background-image: linear-gradient(#400080, #000000);
    }

    .mid{
      width: 70%;
      height: 100px;
      margin: auto;
    }

    /* Header part start*/
    .header{
      height: 20%;
    }

    /* nav bar start */

    .menu{
      height: 100%;
      width: 85%;
      float: right;
    }

    .login{
      height: 100%;
      width: 20%;
      float: right;
    }

    /* logo css start */

    .logo{
      text-align: center;
      height: 100%;
      width: 15%;
      float: left;
    }

    .logo h2{
      margin-top: 20%;
      font-family: tahoma;
      color: white;
    }

    /* logo css end */

    /* menu start */

    .menu_header{
      text-align: right;
      height: 100%;
      width: 80%;
      float: left;
    }

    .menu_header ul li{
      display: inline-block;
      margin-top: 5%;
      margin-right: 5px;
      position: relative;
    }

    .menu_header ul li a{
      padding: 10px 30px;
      display: block;
      color: white;
      font-size: 18px;
      font-family: mont;
      font-weight: bold;
    }

    .menu_header ul li:hover a{
      color: #d9d9d9;
    }

    .menu_header ul li ul{
      display: none;
      position: absolute;
      height: 100px;

    }

    .menu_header ul li ul li{
      width: 140px;
      margin: 0px;
      text-align: left;
    }

    .menu_header ul li ul li a{
      margin: 0px;
    }

    .menu_header ul li:hover ul{
      display: block;
      border-top: 2px solid white;
    }

    .menu_header ul li ul li:hover a{
      background-color: transparent;
      color: white;
    }

    /* menu end */

    /* login start */

    .login button{
      width: 100px;
      height: 35px;
      border-radius: 20px;
      margin-top: 20%;
      margin-left: 15%;
      border: 1px solid white;
      background-color: transparent;
      font-size: 15px;
      font-family: mont;
      font-weight: bold;
      color: white;
    }

    /* login end */

    </style>
  </head>
  <body>
    <div class="main">
      <div class="mid">
        <div class="header">

          <!-- logo part -->
          <div class="logo">
            <h2>SpaceO</h2>
          </div>

          <!-- menu start -->

          <div class="menu">
            <div class="menu_header">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="">Sections</a>
                </li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
              </ul>
            </div>
            <div class="login">
              <button>Log in</button>
            </div>

          </div>
</div>
  </body>
</html>
