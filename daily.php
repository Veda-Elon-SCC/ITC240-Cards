<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'?>

  <body>

<?php get_header()?>

    <body>
      <?php

      if (isset($_GET['day'])){
          $day = $_GET['day'];
      }
      else{
          $day = date('l');
      };

      switch($day){
          case 'Sunday':
              $color = "red";
              $image = "images/red-flower.jpg";
              $alttag = "red flower";
          break;
          case 'Monday':
              $color = "orange";
              $image = "images/orange-flower.jpg";
              $alttag = "orange flower";
          break;
          case 'Tuesday':
              $color = "yellow";
              $image = "images/yellow-flower.jpg";
              $alttag = "yellow flower";
          break;
          case 'Wednesday':
              $color = "green";
              $image = "images/green-flower.jpg";
              $alttag = "green flower";
          break;
          case 'Thursday':
              $color = "blue";
              $image = "images/blue-flower.jpg";
              $alttag = "blue flower";
          break;
          case 'Friday':
              $color = "indigo";
              $image = "images/indigo-flower.jpg";
              $alttag = "indigo flower";
          break;
          case 'Saturday':
              $color = "violet";
              $image = "images/violet-flower.jpg";
              $alttag = "violet flower";
          break;
      };


      ?>

        <img src="<?=$image?>" alt="<?=$alttag?>"><br />
        <h2><b>Today is <?=$day?>.</b></h2>

        <h2><b><?=$day?>'s color is <font color="<?=$color?>"><?=$color?></font>.</b></h2>

        <div class="form-group col-lg-12">

            <a href="daily.php?day=Sunday">Sunday</a><br />
            <a href="daily.php?day=Monday">Monday</a><br />
            <a href="daily.php?day=Tuesday">Tuesday</a><br />
            <a href="daily.php?day=Wednesday">Wednesday</a><br />
            <a href="daily.php?day=Thursday">Thursday</a><br />
            <a href="daily.php?day=Friday">Friday</a><br />
            <a href="daily.php?day=Saturday">Saturday</a><br />
            <a href="daily.php">Today</a>

        </div>
    </body>

<?php get_footer()?>

  </body>

</html>
