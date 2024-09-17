<?php
    $correctPassword = "vOU7MxDf8BB7rf1";

    if ($_POST['password'] === $correctPassword) {
        header("Location: admin-dashboard.php");
        exit();
    } else {
        echo "Błędne hasło. Spróbuj ponownie.";
    }
?>
