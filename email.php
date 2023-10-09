<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $text = test_input($_POST["message"]);
    $company = test_input($_POST["company"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Hibás email cím formátum.";
        exit;
    }

    // Az email küldése
    $to = "h.milan0713@gmail.com";
    $subject = "Üzenet a weboldalról";
    $message = "Név: " . $name . "\nCompany: " . $company . "\nEmail: " . $email . "\n\nÜzenet:\n" . $text;

    if (mail($to, $subject, $message)) {
        echo "Az üzenet sikeresen elküldve!";
    } else {
        echo "Hiba történt az üzenet küldése közben.";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>



