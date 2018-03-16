<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body>
<?php get_header()?>

<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:card_list.php');
}


$sql = "select * from Cards where CardID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $State = stripslashes($row['State']);
        $Binary = stripslashes($row['Binary']);
        $Logic = stripslashes($row['Logic']);
        $Description = stripslashes($row['Description']);
        $title = "Title Page for " . $State . " " . $Binary;
        $pageID = $State . " " . $Binary;
        $Feedback = '';//no feedback necessary
    }

}else{//inform there are no records
    $Feedback = '<p>This customer does not exist</p>';
}

?>
<h1><?=$pageID?></h1>

<?php

if($Feedback == '')
{//data exists, show it
    echo '<div class="form-group col-lg-12">';
    echo '<p>';
    echo 'State: <b>' . $State . '</b> ' . '<br />';
    echo 'Binary: <b>' . $Binary . '</b> ' . '<br />';
    echo 'Logic: <b>' . $Logic . '</b> ' . '<br />';
    echo 'Description: <b>' . $Description . '</b>' . '<br />';
    echo '<img src="cards/card-' . $id . '.png" />';

//This is the upload section
if(startSession() && isset($_SESSION["AdminID"]))
    {# only admins can see 'peek a boo' link:
        echo '<p align="center"><a href="' . $config->virtual_path . '/upload_form.php?' . $_SERVER['QUERY_STRING'] . '">UPLOAD IMAGE</a></p>';
    }
//End of upload section

    echo '</p>';
    echo '</div>';

}else{//warn user no data
    echo $Feedback;
}
echo '<div class="form-group col-lg-12">';

echo '<p><a href="card_list.php">Back to List</a></p>';
echo '</div>';
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>

<?php get_footer()?>
</body>
</html>
