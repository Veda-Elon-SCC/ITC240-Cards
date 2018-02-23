<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php';?>
<body>
<?php include 'includes/header.php';?>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h1>Card List</h1>

<?php
              
$sql = "select * from Cards";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<div class="form-group col-lg-12">';
        echo '<p>';
        echo 'State: <b>' . $row['State'] . '</b> ';
        echo 'Binary: <b>' . $row['Binary'] . '</b> ';
        echo 'Logic: <b>' . $row['Logic'] . '</b> ';
        //echo 'Description: <b>' . $row['Description'] . '</b> ';
        
        echo '<a href="card_view.php?id=' . $row['CardID'] . '">' . $row['State'] . $row['Binary'] . '</a>';
        
        echo '</p>';
        echo '</div>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
              </div>
          </div>
        </div>
      </div>
    </section>
    
<?php include 'includes/footer.php';?>
    </body>
</html>