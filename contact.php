<?php

$pageId             ="contact";
$metaTitle          ="Contact";
$metaDescription    ="Would you like to carry out a project or simply make contact";

include("includes/header.php");
?>


<?php 


$sent = isset($_POST['send-request']);


$userEmail  	= !empty($_POST['user-email']) 		? trim($_POST['user-email']) 	: null;
$userName 		= !empty($_POST['user-name']) 		? trim($_POST['user-name']) 	: null;
$userMessage 	= !empty($_POST['user-message']) 	? $_POST['user-message'] 		: null;

$userCompany 	= !empty($_POST['user-company']) 	? trim($_POST['user-company']) 	: null;
$userPhone   	= !empty($_POST['user-phone']) 	    ? trim($_POST['user-phone']) 	: null;

$errors = [];

if ($sent) {



	if (empty($userEmail)) 
	{
		$errors['user-email'] = "Please enter your email address";
	} 
	else if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
		$errors['user-email'] = "The email address is not valid";
	}




	if (empty($userName)) 
	{
		$error['user-name'] = "Please enter your name";
	}
	else if (!preg_match("/^([a-zA-Zéèùàôîê' -])+$/", $userName))  
	{
		$errors['user-name'] = "The name doesn't seem valid";
	}



    if (empty($errors)) {

        $message = "<html>
                    <body style='   background-color: #191D28;
                                    color: #FFF;
                                    font-family: 'Source Sans Pro', sans-serif;
                                    font-size: 24px;
                                    padding: 50px;
                                    margin: 50px;'>Vous avez reçu un message de $userName ($userEmail) : <br><br>";

        $message .= "<div style='color: #FCCA6E;'>Company:&nbsp;<p style='white-space: nowrap; color: #FFF;'>$userCompany</p></div>";
        $message .= "<div style='color: #FCCA6E;'>Phone:&nbsp;<p style='white-space: nowrap; color: #FFF;'>$userPhone</p></div>";
        $message .= "<p style='color: #FCCA6E;'>Message:</p>$userMessage";

        $message .= "</body></html>";

        $subject = "Mathieu Portfolio: un message de $userName";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $mailSuccess = mail("mfoliomecon@proton.me", $subject, $message, $headers);
    }
}

?>









    <div class="contact container">
        <h1>Would you like to carry out a <span>project</span> or simply make <span>contact </span>?</h1>


    </div>


    <div class="form">
        <form id="technical-support-request-form" method="post">

            <div>
                <label for="user-name">Name*&nbsp;:</label>
                <input id="user-name" name="user-name" type="text" minlength="2" required value="<?php echo $userName; ?>">

                <?php if (!empty($errors['user-name'])) {?> 
                <label id="user-name-error" class="error" for="user-name"><?php echo $errors['user-name']; ?></label>
                <?php } ?>
            </div>


            <div>
                <label for="user-company">Company&nbsp;:</label>
                <input id="user-company" name="user-company" type="text" minlength="2" value="<?php echo $userCompany; ?>">

                <?php if (!empty($errors['user-company'])) {?> 
                <label id="user-company-error" class="error" for="user-company"><?php echo $errors['user-Company']; ?></label>
                <?php } ?>
            </div>


            <div>
                <label for="user-phone">Phone&nbsp;:</label>
                <input id="user-phone" name="user-phone" type="text" minlength="2" value="<?php echo $userPhone; ?>">

                <?php if (!empty($errors['user-phone'])) {?> 
                <label id="user-phone-error" class="error" for="user-phone?"><?php echo $errors['user-phone']; ?></label>
                <?php } ?>
            </div>


            <div>
                <label for="user-email">Email*&nbsp;:</label>
                <input id="user-email" name="user-email" type="email" required value="<?php echo $userEmail; ?>">
                <?php if (!empty($errors['user-email'])) {?> 
                <label id="user-email-error" class="error" for="user-email"><?php echo $errors['user-email']; ?></label>
                <?php } ?>
            </div>


            <div>
                <label for="user-message">Message*:</label>
                <textarea id="user-message" name="user-message" required><?php echo $userMessage; ?></textarea>
                <?php if (!empty($errors['user-message'])) {?> 
                <label id="user-message-error" class="error" for="user-message"><?php echo $errors['user-message']; ?></label>
                <?php } ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="form-control alo">
			    <button class="submitsend" type="submit" id="send-request" name="send-request">Send</button>
		    </div> 
        </form>
    </div>


<div class="details-form">


<?php 
    if ($sent && empty($errors)) {

	$successMsg = "<p>Your message has been sent.</p>
                   <p>Thank you and I will get back to you as soon as possible</p>";

	$failureMsg = "<p>Sending a message failed</p>
                   <p>There was a problem</p>";

	$url = $mailSuccess ? "/" : $_SERVER['HTTP_REFERER'];
	echo $mailSuccess ? $successMsg : $failureMsg;
} 
else 
?>

</div>



















<script defer src="js/support-technique-validation.js"></script>

<?php
include("includes/footer-contact.php");