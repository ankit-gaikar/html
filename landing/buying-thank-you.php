<?php include "mai.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou | Sophie LP</title>
    <!--  font awesome css -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet"> -->
    <link rel="icon" href="image/favicon.png" sizes="32x32"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N5Z3G48');</script>
    <!-- End Google Tag Manager -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            margin: 0;
        }
        
        h1 {
            font-family: 'Barlow', sans-serif;
        }
        
        p {
            margin-bottom: 30px;
            margin-top: 0;
        }
        
        .hsc-grid {
            display: flex;
            flex-direction: row;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            background-image: url('image/istockphoto-1193825948.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
        }
        
        .hsc-inner {
            flex: 1;
        }
        
        
        .box-border {
            background-color: rgba(0, 0, 0, 0.7);
            margin: 30px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px;
            color: #fff;
            max-width: 800px;
        }
        
        .logo {
            margin-bottom: 40px;
        }
        
        .sub-heading {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .title {
            text-transform: uppercase;
            font-size: 34px;
            text-align: center;
        }
        
        ul.list-style {
            padding: 0;
            list-style: none;
            display: flex;
            width: 100%;
            margin-bottom: 40px;
        }
        
        .list-style>li {
            border: 1px solid #fff;
            padding: 20px;
            margin-left: 20px;
            flex: 1;
            text-align: center;
        }
        
        .list-style>li:first-child {
            margin-left: 0;
        }
        
        .d-flex {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
        }
        
        .d-flex>.inner {
            flex-basis: 50%;
            padding: 20px;
            text-align: center;
        }
        
        .d-flex>.inner:first-child {
            border-right: 1px solid #fff;
        }
        
        .button {
            padding: 20px 30px;
            background-color: #dae1e3;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 18px;
            color: #000;
            text-decoration: none;
            margin-bottom: 30px;
            display: inline-block;
        }
        
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 0px);
        }
        
        p>a {
            color: inherit;
            text-decoration: none;
        }
        
        .popup-body {
            display: none;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
            z-index: 99;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            overflow: auto;
        }
        
        .popup-body>div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            max-width: 100%;
            position: relative;
            margin-top: 80px;
        }
        
        .popup-inner {
            display: none;
            background: #fff;
            padding: 40px;
            max-width: 80%;
            position: relative;
            z-index: 999;
            border: 2px solid #777;
        }
        
        .popup-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 9;
            cursor: pointer;
            font-weight: 700;
            padding: 5px;
            line-height: 1;
            font-size: 18px;
        }
        
        .popup-open {
            overflow: hidden;
        }
        
        .form-control {
            margin-bottom: 20px;
        }
        
        .form-control label {
            width: 100%;
        }
        
        .form-control input,
        .form-control textarea {
            padding: 10px;
            width: 93%;
        }
        
        input.button {
            padding: 10px;
            border: 1px solid #ccc;
        }

        @media only screen and (max-width: 1400px) {
        .full-size {
        object-position: 70%;
        }
        }

        @media screen and (max-width: 1300px) {
            .hsc-inner{
                flex-basis: 50% !important;
            }
            .hsc-inner.content{
                flex-basis: 50% !important;
            }
        }

        @media screen and (max-width: 992px) {
            .popup-inner {
                padding: 20px;
                max-width: 80%;
            }
            .hsc-inner{
                flex-basis: 30%;
            }
            .hsc-inner.content{
                flex-basis: 70%;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .hsc-grid {
                flex-direction: column-reverse;
            }
            .hsc-grid>.hsc-inner {
                width: 100%;
                flex-basis: 100%;
            }
            ul.list-style {
                flex-direction: column;
            }
            ul.list-style>li {
                margin-bottom: 20px;
                margin-left: 0;
            }
            .d-flex {
                flex-direction: column;
            }
            .d-flex>.inner {
                flex-basis: 100%;
            }
            .d-flex>.inner:first-child {
                border-right: 0;
            }
            .box-border {
                margin: 0;
            }
            .box-border {
            background-color: #444444;
            }
        }

        @media only screen and (max-width: 520px) {

        .title {
                padding: 20px;
        }
        p{
            padding: 0px 30px;
        }
        .list-style>li:first-child {
            margin-left: 30px;
        }
        ul.list-style>li {
            margin-left: 30px;
            margin-right: 30px;
        }

        }

        @media only screen and (max-width: 380px) {
            .title {
            padding: 0px 60px;
            font-size: 20px;
            }
            p {
                padding: 0px 60px;
                font-size: 15px; 
            }
            .list-style>li:first-child {
            margin-left: 60px;
            }
            ul.list-style>li {
                margin-left: 60px;
                margin-right: 60px;
            }
        }
        


    </style>
</head>


<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5Z3G48"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="hsc-grid">

        

        <div class="hsc-inner content" >

            <div class="box-border">

                <figure class="logo">
 
                    <img src="image/Sophie-logo.png" alt="Logo">

                </figure>

                <p style="font-weight: 500; font-size: 20px; text-align:center;">Sophie Goudreau, Real Estate Agent Cornwall <br> Contact <a href="tel:6133634233">(613) 363-4233</a></p>


                <h1 class="title">Thank you for Contacting Us.</h1>

                <p style="text-align: center;">We will contact you shortly to discuss your house buying needs and set you up with a list of available properties.</p>

                

            </div>

        </div>

    </div>
    <script type="text/javascript" src="//cdn.callrail.com/companies/351221576/ad6fc0e352032f39388a/12/swap.js">
    </script> 
   
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
    $to = "rahul@wsiestrategies.com";
            
    $mail1 = mail($to,$email_subject,$email_body);

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
    $message1 .= "<p class='emailHead'>Thank you for contacting us.<br>
    We will contact you shortly to discuss your house buying needs and set you up with a list of available properties.</p>";
    $message1 .= "<p class='emailHead'>Thanks!</p>";
    $message1 .= "<p class='emailHead'>Sophie Goudreau</p>";
    $message1 .= "</body></html>";

    $file = "contact_entry.csv";
    
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
}
?>