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
