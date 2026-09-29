<?php
session_start();
require("PHPMailer/PHPMailerAutoload.php");

$PROJECT_NAME = "Lavage De Vitres Jacks Inc.";
$PROJECT_URL = "https://lavagedevitresjacks.ca/";
$PROJECT_DIRECTORY = "/home/mv1ooe8s1mft/public_html/";
$TO_EMAIL = "lavagedevitre@outlook.com";
$NL = "<br />";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["captcha"] == $_SESSION["captcha_code"]) {

        // SERVICE
        $service = "";
        switch ($_POST["service"]) {
            case "A": $service = "Exterior window washing + gutter cleaning (most popular option)"; break;
            case "B": $service = "Exterior window cleaning"; break;
            case "C": $service = "Washing interior and exterior windows"; break;
            case "D": $service = "Gutter cleaning"; break;
        }

        // BODY
        $body =
            "Name : " . $_POST["name"] . $NL .
            "Email : " . $_POST["email"] . $NL .
            "Number : " . $_POST["number"] . $NL .
            "Service : " . $service . $NL .
            "Message : " . $_POST["message"] . $NL .
            "Form submitted from : " . $_POST["frompage"] . $NL .
            "Language : " . $_POST["language"] . $NL;

        if ($_POST["frompage"] == "Already Client" || $_POST["frompage"] == "New Client") {
            $body .=
                "Address : " . $_POST["address"] . $NL .
                "City : " . $_POST["city"] . $NL .
                "Province : " . $_POST["province"] . $NL .
                "Country : " . $_POST["country"] . $NL .
                "Desired Date : " . $_POST["date"] . $NL;
        }

        // ===================== UPLOAD FUNCTION =====================
        function uploadPhoto($fileKey, $index, $PROJECT_DIRECTORY, $PROJECT_URL)
        {
            if (!empty($_FILES[$fileKey]["name"])) {

                $name = $_FILES[$fileKey]["name"];
                $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

                $allowed = ["jpg", "jpeg", "png", "webp"];

                if (in_array($ext, $allowed)) {

                    if ($_FILES[$fileKey]["error"] === 0) {

                        $newName = time() . "_" . $index . "_" . $name;
                        $path = $PROJECT_DIRECTORY . "form/uploads/" . $newName;

                        move_uploaded_file($_FILES[$fileKey]["tmp_name"], $path);

                        return $PROJECT_URL . "form/uploads/" . $newName;
                    }

                    return "Upload error !";
                }

                return "Invalid extension !";
            }

            return "Not uploaded !";
        }

        // ===================== PHOTOS =====================
        $body .= $NL . "Photos :" . $NL;

        $body .= "Photo 1 : " . uploadPhoto("photo1", "1", $PROJECT_DIRECTORY, $PROJECT_URL) . $NL;
        $body .= "Photo 2 : " . uploadPhoto("photo2", "2", $PROJECT_DIRECTORY, $PROJECT_URL) . $NL;
        $body .= "Photo 3 : " . uploadPhoto("photo3", "3", $PROJECT_DIRECTORY, $PROJECT_URL) . $NL;
        $body .= "Photo 4 : " . uploadPhoto("photo4", "4", $PROJECT_DIRECTORY, $PROJECT_URL) . $NL;

        // EMAIL
        $html = PrepareEmail(
            "New Form Submission !",
            $body,
            "Administrator",
            $PROJECT_NAME,
            $PROJECT_URL
        );

        SendMail(
            $TO_EMAIL,
            "New Form Submission !",
            $html,
            "Administrator",
            $PROJECT_NAME,
            $_POST["language"]
        );

    } else {
        echo ($_POST["language"] == "english")
            ? "Invalid security code !"
            : "Code de sécurité invalide !";
    }

} else {
    echo "";
}

function PrepareEmail($pSubject, $pBody, $pTitle, $PROJECT_NAME, $PROJECT_URL)
{
    $html = file_get_contents("email.html");

    $html = str_replace('@pBody@', $pBody, $html);
    $html = str_replace('@pProjectName@', $PROJECT_NAME, $html);
    $html = str_replace('@pProjectUrl@', $PROJECT_URL, $html);
    $html = str_replace('@pSubject@', $pSubject, $html);
    $html = str_replace('@pNameOrEmail@', $pTitle, $html);

    return $html;
}

function SendMail($pEmailTo, $pSubject, $pHtml, $pTitle, $PROJECT_NAME, $pLanguage)
{
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "mail.lavagedevitresjacks.ca";

    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;

    $mail->From = "noreply@lavagedevitresjacks.ca";
    $mail->FromName = $PROJECT_NAME;

    $mail->AddAddress($pEmailTo, $pTitle);
    $mail->addCC('technologiesvian@gmail.com');

    if (!empty($_POST["email"])) {
        $mail->AddReplyTo($_POST["email"]);
    }

    $mail->isHTML(true);

    $mail->Subject = $pSubject;
    $mail->Body = $pHtml;
    $mail->AltBody = "This is the text-only body.";

    if (!$mail->Send()) {
        WriteLog($pHtml, 'email_log.html');
        WriteLog('Error : ' . $mail->ErrorInfo, 'email_log.html');

        echo ($pLanguage == "english")
            ? "Failure sending email !"
            : "Échec de l'envoi du courrier électronique !";
    } else {
        echo "success";
    }
}

function WriteLog($pLog, $pFile)
{
    $open = file_get_contents($pFile);
    $today = date("F j, Y, g:i a");

    $open .= $today . "<br />" . $pLog . "<br />";

    file_put_contents($pFile, $open);
}
?>