<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyWatchList-Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/delete.css">
  </head>
  <body>
    <!--navigation Bar-->
    <header class="header">
		<h1 class="logo"><a href="#">MyWatchList</a></h1>
      <ul class="main-nav">
          <li><a href="#">Add Anime</a></li>
          <li><a href="#">Log Out</a></li>
      </ul>
	</header>

  <table class="rwd-table">
  <tr>
    <th>Image</th>
    <th>Anime Title</th>
    <th>Rating</th>
    <th>Delete</th>
  </tr>
  <tr>
    <td data-th="Image"> <img src="img\gintama.jpg" alt="gintama"> </td>
    <td data-th="Anime">
      <div class="animeDetails">
        <h1>Anime Name</h1>
        <p> Anime Description</p>
      </div>
    </td>
    <td data-th="Rating">1977</td>
    <td data-th="Delete"><button class="btn draw-border">Delete</button></td>
  </tr>
</table>

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
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </body>
  </html>
