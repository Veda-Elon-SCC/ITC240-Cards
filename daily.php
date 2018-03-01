<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'?>

  <body>

<?php include 'includes/header.php'?>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">

    <body>
        <?php include 'includes/dow.php'?>

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

            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php'?>

  </body>

</html>
