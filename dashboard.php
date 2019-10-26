<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyWatchList-Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/dashboardmodal.css">
    <link rel="stylesheet" href="css/dashboardcarousel.css">
    <script type="text/javascript" src="modal.js"></script>
    <link rel="stylesheet" href="css/dashboardcards.css">
    <script type="text/javascript" src="cards.js"></script>
  </head>
  <body>
    <!--navigation Bar-->
    <header class="header">
		<h1 class="logo"><a href="#">MyWatchList</a></h1>
      <ul class="main-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Event</a></li>
          <li class="button" onclick="document.getElementById('id01').style.display='block'" ><a href="#">Login</a>
                        <div id="id01" class="modal">
              <form class="modal-content animate" action="login.php" method="post">

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <br>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                  <br>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                  <br>
                </div>

                <div class="container" style="background-color:#f1f1f1;height:80px;">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button class="login" type="submit">Login</button>
                </div>
              </form>
            </div>




          </li>
      </ul>
	</header>
  <body>
   <?php
   $conn = mysqli_connect("localhost", "root", "", "mwl");
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   $sql = "SELECT title,imglink,rating,author FROM info ORDER BY rating desc";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     $arrTITLE1=array();
     $arrIMGLINK1=array();
     $arrRATING1=array();
     $arrAUTHOR1=array();
   // output data of each row
   while($row = $result->fetch_assoc()) {

     array_push($arrTITLE1,$row["title"]);
     array_push($arrIMGLINK1,$row["imglink"]);
     array_push($arrRATING1,$row["rating"]);
     array_push($arrAUTHOR1,$row["author"]);
   }


   } else { echo "0 results"; }
   $conn->close();
   ?>



        <!--Carousel-->
        <div class="carousel">
          <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item" >
                <img src="img/onepiece.jpg" href="anime.php">
                <div class="carousel-text-block">
                  <h3>One Piece</h3>
                  <p>Eichiro Oda</p>
                </div>
            </div>

            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="img/kimetsunoyaiba.jpg">
                <div class="carousel-text-block">
                  <h3>Kimetsu no Yaiba</h3>
                  <p>Koyoharu Gotouge</p>
                </div>
            </div>

            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="img/hunterxhunter.jpg">
                <div class="carousel-text-block">
                  <h3>Hunter X Hunter</h3>
                  <p>Yoshihiro Togashi</p>
                </div>
            </div>


            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li><label for="carousel-1" class="carousel-bullet">•</label></li>
                <li><label for="carousel-2" class="carousel-bullet">•</label></li>
                <li><label for="carousel-3" class="carousel-bullet">•</label></li>
            </ol>
          </div>
        </div>


        <!--Cards-->
        <div class="topAnime">
      <h1>Top Anime</h1>


  <div class="grid-container">
        <div class="grid-item">
          <!--Card-1-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>


                        <img src="<?php print_r($arrIMGLINK1[0]);?>" style="width:100%;height:100%">

                      <div class="stats">
                          <div class="stats-container">
                              <span class="product_price"><?php print_r($arrRATING1[0]);?></span>
                              <span class="product_name"><?php print_r($arrTITLE1[0]);?></span>

                          </div>
                      </div>
                  </div>
              </div>
          </div>

        </div>
        <div class="grid-item">
          <!--Card-2-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                    <img src="<?php print_r($arrIMGLINK1[1]);?>" style="width:100%;height:100%">
                  	<div class="cardshadow"></div>
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING1[1]);?></span>
                            <span class="product_name"><?php print_r($arrTITLE1[1]);?></span>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-3-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK1[2]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING1[2]);?></span>
                            <span class="product_name"><?php print_r($arrTITLE1[2]);?></span>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-4-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                    <img src="<?php print_r($arrIMGLINK1[3]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING1[3]);?></span>
                            <span class="product_name"><?php print_r($arrTITLE1[3]);?></span>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <div class="grid-item">
          <!--Card-5-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK1[4]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING1[4]);?></span>
                            <span class="product_name"><?php print_r($arrTITLE1[4]);?></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-6-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK1[5]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING1[5]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE1[5]);?></span>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </div>

</div>    <div class="recentlyAdded">
      <h1>Recently Added Animes</h1>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "mwl");
      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT title,imglink,rating,author FROM info";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $arrTITLE2=array();
        $arrIMGLINK2=array();
        $arrRATING2=array();
        $arrAUTHOR2=array();
      // output data of each row
      while($row = $result->fetch_assoc()) {

        array_push($arrTITLE2,$row["title"]);
        array_push($arrIMGLINK2,$row["imglink"]);
        array_push($arrRATING2,$row["rating"]);
        array_push($arrAUTHOR2,$row["author"]);
      }


      } else { echo "0 results"; }
      $len=$result->num_rows;
      $conn->close();
      ?>


  <div class="grid-container">
        <div class="grid-item">
          <!--Card-1-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                    <img src="<?php print_r($arrIMGLINK2[$len-1]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-1]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-1]);?></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        </div>
        <div class="grid-item">
          <!--Card-2-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK2[$len-2]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-2]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-2]);?></span>
                              <p>Men's running shirt</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-3-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                    <img src="<?php print_r($arrIMGLINK2[$len-3]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-3]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-3]);?></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-4-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                    <img src="<?php print_r($arrIMGLINK2[$len-4]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-4]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-4]);?></span>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <div class="grid-item">
          <!--Card-5-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK2[$len-5]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-5]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-5]);?></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="grid-item">
          <!--Card-6-->
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

          <div id="make-3D-space">
              <div id="product-card">
                  <div id="product-front">
                  	<div class="cardshadow"></div>
                      <img src="<?php print_r($arrIMGLINK2[$len-6]);?>" style="width:100%;height:100%">
                      <div class="image_overlay"></div>
                      <div class="stats">
                          <div class="stats-container">
                            <span class="product_price"><?php print_r($arrRATING2[$len-6]);?></span>
                          <span class="product_name"><?php print_r($arrTITLE2[$len-6]);?></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </div>

</div>

<div class="row">
  <footer class="ct-footer">
<div class="container">
<div class="ct-footer-post">
  <div class="container" style="display: block;">
    <div class="inner-right" style="display: inline;padding-top: 0px;padding-bottom: 0px;">
      <p>Copyright © 2019 Ashutosh Bist WebCorpCo.&nbsp;<a href="">Suraj Balvanshi</a></p>
      <p><a class="ct-u-motive-color" href="" target="_blank">Web Design</a> by Us<a href="" target="_blank">Atom</a></p>
      </div>
    </div>
  </div>
</div>
</footer>

</div>


>

      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>
