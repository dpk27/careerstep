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
<?php $this->load->view('sticky.php')?>
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
