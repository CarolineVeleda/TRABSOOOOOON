<?php
echo "Generating cookie...";
$cookie_name = "user";
$cookie_value = "Eduardo";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

echo "Cookie generated successfully";
?>