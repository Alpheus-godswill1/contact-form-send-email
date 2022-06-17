<?php include "./config.php";?>
<?php
global $connect;
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect,$_POST['name']) ;
    $mailFrom = mysqli_real_escape_string($connect, $_POST['mail']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $services =mysqli_real_escape_string($connect, $_POST['service']);
    $subject =mysqli_real_escape_string($connect, $_POST['subject']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);
    //preparing a PHP function 
    //must have at least three parameters
    //1. Email which mail is to be sent to.
    //2. Subject of the mail
    //3. Message or content of the mail gotten from the person
    $mailTo = "willyelv67@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from ". $name .".\n\n".$message;

    mail($mailTo, $subject, $txt , $headers);
    header("Location: ./index.php?mail_sent_to_admin");
}


?>