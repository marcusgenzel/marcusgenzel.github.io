<!DOCTYPE html>

<html lang="de">

<head>
    <title> PHP SMPT </title>  
</head>

<body>
    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    if(isset($_POST["submit"])){
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "marcusgenzel97@gmail.com";
        $mail->Password = "igjnqggkprcblple";

        $mail->setFrom("marcusgenzel97@gmail.com", "Marcus");
        $mail->addAddress("marcusgenzel@gmx.net");

        // zip 
        // $mail->addAttachment("Anhang.zip") Dateiname 
        $mail->isHTML(true);
        $mail->Subject = "Test";
        $mail->Body = $_POST["msg"];

        if($mail->send()){
            echo "Deine Email wurde erfolgreich verschickt.";
        } else{
            echo "Es gab einen Fehler". $mail->ErrorInfo;
        }
        


    }
    ?>
    <h1>PHP SMPT Mailer</h1>
    <form method= "post" action="index.php">
        <textarea name="msg" placeholder= "Nachricht"></textarea>
        <button type="submit" name="submit">Senden</button>
    </form>



</body>

</html>
