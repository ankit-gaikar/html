<?php include "mai.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou | Sophie LP</title>
    <!--  font awesome css -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    .title {
    text-transform: uppercase;
    font-size: 34px;
    text-align: center;
    }
    h1 {
        font-family: 'Barlow', sans-serif;
    }
    </style>
</head>


<body>
    
    
    <div class="pandamic">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pandamic_text">
                    <div class="row">
                        <div class="thankcon">
                            <h1 class="title">Thank you for Contacting Us.</h1>
                            <p>One of our team members will contact you shortly.</p>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php
//start email build code



if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $address= $_POST['address'];
    $choice= $_POST['choice'];

       
             
    $email_from = 'sophie.goudreau@century21.ca';

    $email_subject = "Sophie Goudreau Enquiry Form";
        
    $email_body = "Hi Admin, There is a new enquiry notification. Following are the details:\n".
            "\n Name: $name".
            "\n Email: $email".
            "\n Phone: $mobile".
            "\n Address: $address".
            "\n Action: $choice";
             
           

    $headers = "From: $email_from \r\n";
    $to = "sophie.goudreau@century21.ca";
            
    mail($to,$email_subject,$email_body);

    //send email if no errors are found and write to file.
    $data = "Date," . date('Y-m-d') . PHP_EOL;
    $data .= "Name," . ($_POST['name']) . PHP_EOL;
    $data .= "Email," . ($_POST['email']) . PHP_EOL;
    $data .= "Phone," . ($_POST['phone']) . PHP_EOL;
    $data .= "Address," . ($_POST['address']) . PHP_EOL;
    $data .= "Action," . ($_POST['choice']) . PHP_EOL;



    $from1 = "Sophie Goudreau  <sophie.goudreau@century21.ca>";
    $username = ucfirst($_POST['name']);
    $to1 = $_POST['email'];
        //set recipients of form post email below
    $subject1  = "Sophie Goudreau - Thank you for requesting a quote";
    //$headers1  = 'From: <info@sureprint.ca>' . "\r\n";
    $headers1 .= "Reply-To: " . $from1 . "\r\n";
    $headers1 .= "Return-Path: " . $from1 . "\r\n";
    $headers1 .= "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
    $message1 = "<html><head><style> .emailHead { margin-bottom: 20px; }</style></head><body>";
    $message1 .= "<p class='emailHead'>Hello $username, </p>";
    $message1 .= "<p class='emailHead'>Thank you for requesting a quote. One of our team members will contact you shortly.</p>";
    $message1 .= "<p class='emailHead'>Thanks!</p>";
    $message1 .= "<p class='emailHead'>Sophie Goudreau</p>";
    $message1 .= "</body></html>";

    $file = "contact_entry.csv";
    $mail1 = mail($to,$email_subject,$email_body);
    if ($mail1) {
    mail($to1,$subject1,$message1,$headers1);
    ?>
    '<script type="text/javascript">
      window.location = "<?php echo $_POST['thankyou']; ?>";
    </script>';
    <?php
    $write = file_put_contents($file, $data , FILE_APPEND);
    $writeFile = file_put_contents($file, $filedata.PHP_EOL , FILE_APPEND);
    } 
    else 
    {
      echo "<h1>Error</h1>\n
      <p>Accessing this page caused an error, please try again later.</p>";
    }




    /*$to = "ankit.gaikar@vidushigoc.com";
    $data = "Date," . date('Y-m-d H:i') . PHP_EOL;
    $data .= "Form Name," . ($_POST['EmailSubject']) . PHP_EOL;
    //Save Attached File
    $target_file = $target_dir . $_POST['Email'].'-'.basename($_FILES["upfile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "Return-Path: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
    $subject = ($_POST['EmailSubject']);
    $message = "<html><head><style>table { border-collapse: collapse; } table td { border: 1px solid #cecece; padding: 5px; word-wrap: break-word; } .emailHead { margin-bottom: 20px; }</style></head><body>";
    $message .= "<p class='emailHead'>Hello Admin,</p>";
    $message .= "<p class='emailHead'>There is a new contact us notification. Following are the details:</p>";
    $message .= "<table>";
    foreach ($_POST as $key => $val) {
        if((strtoupper($key) != 'SUBMIT') && (strtoupper($key) != 'OKMESSAGE') && (strtoupper($key) != 'EMAILSUBJECT') && (strtoupper($key) != 'REQUIREDFIELDS') && (strtoupper($key) != 'THANKYOU')) {
        
        $message .= "<tr><td style='width: 200px;'><strong>".htmlentities($key)."</strong></td><td style='width: 500px;'>".htmlentities($val)."</td></tr>\n";
        $data .= htmlentities($key).",".htmlentities($val)."\n";
        }
    }
    $message .= "<tr><td style='width: 200px;'><strong>Attachment</strong></td><td style='width: 500px;'><a href='".$file."'>".$file."</a></td></tr>\n";
    $data .= "Attachment,".$file."\n";
    $message .= "</table>";
    $message .= "<p class='emailHead'>Thanks!</p>";
    $message .= "<p class='emailHead'>Sophie</p>";
    $message .= "</body></html>";
    //send email if no errors are found and write to file.
    // user email
    $from1 = "Sophie <ankit.gaikar@vidushigoc.com>";
    $username = ucfirst($_POST['Name']);
    $to1 = $_POST['Email'];
        //set recipients of form post email below
    $subject1  = "Sophie - Thank you for requesting a quote";
    //$headers1  = 'From: <ankit.gaikar@vidushigoc.com>' . "\r\n";
    $headers1 .= "Reply-To: " . $from1 . "\r\n";
    $headers1 .= "Return-Path: " . $from1 . "\r\n";
    $headers1 .= "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  
    $message1 = "<html><head><style> .emailHead { margin-bottom: 20px; }</style></head><body>";
    $message1 .= "<p class='emailHead'>Hello $username, </p>";
    $message1 .= "<p class='emailHead'>Thank you for requesting a quote. One of our team members will contact you shortly.</p>";
    $message1 .= "<p class='emailHead'>Thanks!</p>";
    $message1 .= "<p class='emailHead'>Sophie</p>";
    $message1 .= "</body></html>";
    $file = "contact_entry.csv";
    //admin email
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->setFrom('ankit.gaikar@vidushigoc.com', 'Sophie');            
    $mail->addAddress($to); 
    //$mail->addAddress('andrew.goldenberg@matrixit.net');
    //$mail->addAddress('developerwsi7@gmail.com', 'Sureprint');
    //user email
    $mail2->isHTML(true);                                  // Set email format to HTML
    $mail2->Subject = $subject1;
    $mail2->Body    = $message1;
    $mail2->setFrom('ankit.gaikar@vidushigoc.com', 'Sophie');            
    $mail2->addAddress($to1);
    //error_log(print_r($mail->send()));
    //$mail2->send(); 
    //$mail2->addAddress('andrew.goldenberg@matrixit.net', 'Sureprint');*/

    /*if ($mail->send()) {
    $mail2->send(); 
    ?>
    '<script type="text/javascript">
      //window.location = "<?php echo $_POST['thankyou']; ?>";
    </script>';
    <?php
    $write = file_put_contents($file, $data , FILE_APPEND);
    $writeFile = file_put_contents($file, $filedata.PHP_EOL , FILE_APPEND);
    } 
    else 
    {
      echo "<h1>Error</h1>\n
      <p>Accessing this page caused an error, please try again later.</p>";
    }*/
}
?>