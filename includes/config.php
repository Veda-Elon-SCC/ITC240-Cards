<?php
include 'credentials.php';

define('DEBUG',TRUE);

$copyright = 'Veda Elon';

$year = date('Y');

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.";
		die();
    }
}

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home';
        $banner = 'Home';
        $slogan = 'The Home Page';
    break;
    case 'contact.php':
        $title = 'Contact';
        $banner = 'Contact';
        $slogan = 'How To Contact Us';
    break;
    case 'daily.php':
        $title = 'Daily';
        $banner = 'Daily';
        $slogan = 'A Daily Reactive Page';
    break;
    case 'card_list.php':
        $title = 'Cards';
        $banner = 'Cards';
        $slogan = 'List of Cards';
    break;
    case 'card_view.php':
        $title = 'Card';
        $banner = 'Card';
        $slogan = 'This is One Card';
    break; 
    default:
        $title = THIS_PAGE;
        $banner = 'Generic Page';
        $slogan = 'This Is A Place Holder';
}

$nav1['index.php'] = "HOME";
$nav1['card_list.php'] = "CARDS";
$nav1['daily.php'] = "DAILY";
$nav1['contact.php'] = "CONTACT";

function links($nav1){
    
    foreach($nav1 as $url => $text){
        
    if(THIS_PAGE == $url){
         echo '
        <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="'.$url.'">'.$text.'</a>
        </li>
    ';
    }
    else{
        echo '
        <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="'.$url.'">'.$text.'</a>
        </li>
    ';
    }
    }
}

?>