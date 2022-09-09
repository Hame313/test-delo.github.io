
<?php
    $toEmail = "beganhame@gmail.com";
    $mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
    if(mail($toEmail,$_POST["userNum"], $_POST["userEmail"], $_POST["userPodj"], $_POST["check1"], $_POST["check2"], $_POST["content"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>