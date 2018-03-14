<?php 
    define('TITLE', 'Contact');
    $bodyClass = 'contact-page';
    include('header.php');
?>

<?php 
    $banner = 'banner-4';   
    $title  =  'Contact Us';
    include('include/banner_small.php');
?>

<?php

    if (isset($_POST['email'])) {

        // $to = "edmardausan15@gmail.com";
        $to = "edmar@frontside.ml";
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $from = $_POST['email'];

        echo '<script>console.log("$from");</script>';
    
        mail($to, $subject, $msg, "From:" . $from);

        if(@mail($to, $subject, $msg, $from))
        {
            echo '<label class="email-notif" id="success">Email Sent! Thank You for Getting in Touch with us!</label>';
        } else {
            echo '<label class="email-notif" id="failed">Email not sent!</label>';
        }
    }

?>

<form method="post" class="fs-form" id="contact-form">
    <input class="form-text" type="email" name="email" id="" placeholder="email@mail.com" required>
    <input class="form-text" type="text" name="subject" id="" placeholder="subject" required>
    <textarea class="form-text" name="msg" id="" placeholder="your message" required></textarea>
    <button><span>Send</span></button>
</form>


<?php 
    include('footer.php');
?>