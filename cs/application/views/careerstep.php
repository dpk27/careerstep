<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/common.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div class="sticky">
    <div class="gnb">
      <div class="logoWrap fl" href="#"><img class="logo" src="<?php echo base_url();?>image/logo.jpg"/></div>
      
      <ul class="gnbMenu">
        <li class="singleMenu active"><a href="javascript:void()">Home</a></li>
        <li class="singleMenu"><a href="http://localhost/careerstep/html/events.html">Events</a></li>
        <li class="singleMenu">
          <a href="javascript:void()">Jobs</a>
          <div>
          <ul>
            <li><a href="index.html">Books</a></li>
            <li><a href="index.html">eBooks</a></li>
            <li><a href="index.html">Books For Study</a></li>
            <li><a href="index.html">Audiobooks</a></li>
          </ul>
        </div>
        </li>
        <li class="singleMenu"><a href="javascript:void()">About Us</a></li>
        <li class="singleMenu"><a href="javascript:void()">Email Us</a></li>
        <li class="singleMenu">
          <a href="javascript:void()">Login</a>
          <div>
            <form name="login" action="#" method="POST">
              <table class="login">
                <tr><td>Email-Id :</td> <td><input type="text"></td></tr>
                <tr><td>Password : </td> <td><input type="password"></td></tr>
                <tr><td><button type="submit">Login</button></td> <td>
                <a href="javascript:void">Forgot Password</a></td></tr>
              </table>
            </form>
          </div>
        </li>
      </ul>

      <marquee>GET THE BEST FROM THE BEST</marquee>

    </div>

    <div class="searchBar">
      <div class="dispIB"><span>Search Jobs</span></div><br>
      <div class="dispN">
        <form>
          <span>Search for</span>
          <input type="text" name="kwd" placeholder="Keywords" />
          <span>in</span>
          <input type="text" name="loc" placeholder="Locations" />
          <input type="submit" value="Search" />
        </form>


      </div>
    </div>
  </div>

    <div style="height:133px;"></div>
    <div class="mainSec">
      <div class="jobSection"></div>
        <div class="sliderSection">
            <div class="divSlider">
            <img class="imgSlider" src="http://demosthenes.info/assets/images/austin-fireworks.jpg" alt="austin">
            <img class="imgSlider" src="http://demosthenes.info/assets/images/taj-mahal.jpg" alt="">
            <img class="imgSlider" src="http://demosthenes.info/assets/images/ibiza.jpg" alt="">
            <img class="imgSlider" src="http://demosthenes.info/assets/images/ankor-wat.jpg" alt="ankor-wat">
          </div>
      </div>
      <div class="eventSection"></div>
    <div class="footer">
    </div>

  </body>

</html>
