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

<?php
//contact.php

if(isset($_POST['Submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = "veda.elon@seattlecentral.edu";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    $FirstName = clean_post('FirstName');
    $LastName = clean_post('LastName');
    $Email = clean_post('Email');
    $Comments = clean_post('Comments');
    $Mail = clean_post('Mail');
    $Info1 = clean_post('Info1');
    $Info2 = clean_post('Info2');
    $Info3 = clean_post('Info3');
    
    $text = '';
    $text .= 'First Name: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    $text .= 'Mail: ' . $Mail . PHP_EOL . PHP_EOL;
    $text .= 'Brochure PDF: ' . $Info1 . PHP_EOL . PHP_EOL;
    $text .= 'Price List PDF: ' . $Info2 . PHP_EOL . PHP_EOL;
    $text .= 'Reseller PDF: ' . $Info3 . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@tranzine.org' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
            <div class="form-group col-lg-12">
            <h1>Message Sent</h1>
            <p>We will contact you in 24 hours!</p>
            </div>    
        </div>
    ';

}
else{//show form!
    echo '
        <form action="contact.php" method="post">
    
        <div class="form-group col-lg-12">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofucus required placeholder="Enter First Name"/><br />
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required placeholder="Enter Last Name"/><br />
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="text" name="Email" id="Email" required placeholder="Enter Valid Email"/><br />
        </div>
        
        <div class="clearfix"></div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments" placeholder="Enter Comments"></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Mail">Join Mailing List?</label> <br />
            <input type="radio" name="Mail" value="Yes" /> Yes 
            <input type="radio" name="Mail" value="No" /> No <br />
        </div>
        
        <div class="form-group col-lg-12">
            <label class="text-heading" for="Info1">Request Information</label> <br />
            <input type="checkbox" name="Info1" value="Yes" /> Brochure PDF 
            <input type="checkbox" name="Info2" value="Yes" /> Price List PDF 
            <input type="checkbox" name="Info3" value="Yes" /> Reseller PDF <br />
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>
        
        </form>
    ';

}
?>
                
            </div>
          </div>
        </div>
      </div>
    </section>
      

<?php
function clean_post($key){
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }
    else{
        return '';
    }
}
?>                
      
<?php include 'includes/footer.php'?>

</body>

</html>

