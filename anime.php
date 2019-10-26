<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyWatchList-Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/dashboardmodal.css">
    <link rel="stylesheet" href="css/animepage.css">
  <body>
    <!--navigation Bar-->
    <header class="header">
		<h1 class="logo"><a href="#">MyWatchList</a></h1>
      <ul class="main-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Event</a></li>
          <li><span class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</span>

            <div id="id01" class="modal">
              <form class="modal-content animate" action="/action_page.php" method="post">

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>
                  <br>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                  <br>

                  <button type="submit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                  <br>
                </div>

                <div class="container" style="background-color:#f1f1f1;height:50px;">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <button class="login" type="submit">Login</button>
                </div>
              </form>
            </div>
          </li>
      </ul>
	</header>

<!--Body-->
<div class="bodycontainer">
  <div class="image">
    <img src="https://cdn.myanimelist.net/images/anime/1315/102961.jpg" alt="Boku no Hero">
  </div>
  <div class="details">
    <span class="notaions">
    <p>Title: <span>Boku no Hero Academia</span></p>
    <p>Rating: <span>10</span></p>
    <p>Author: <span>Heroshaka Noga</span></p>
    <p>source: <span>Manga</span></p>
    <p>Episodes: <span>65</span></p></span>
  </div>
  <br>
  <div class="trailer">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/PRjWwLV_Xuo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <br>
  <div class="description">
      <p style="padding-left:20%">The appearance of "quirks," newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.
        Since he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku's unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might's quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!
        Enduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year's freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.</p>
  </div>
  <br>

</div>




<!--Footer-->
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

  </body>
</html>
