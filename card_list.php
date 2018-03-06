<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php';?>
    
<?php include 'includes/Pager.php';?>
    
$config->loadhead .= '<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>';

<body>
<?php get_header()?>

<h1>Card List</h1>

<?php

$sql = "select * from Cards";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$first = '<i class="far fa-arrow-alt-circle-left"></i>';    
$prev = '<i class="fas fa-arrow-left"></i>';
$next = '<i class="fas fa-arrow-right"></i>';
$last = '<i class="far fa-arrow-alt-circle-right"></i>';
    
$myPager = new Pager(16,$first,$prev,$next,$last);
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{//show records
    
    echo $myPager->showNAV();
    if($myPager->showTotal()==1){$itemz = "customer";}else{$itemz = "customers";}

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
    
    echo $myPager->showNAV();

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>

<?php get_footer()?>
    </body>
</html>
