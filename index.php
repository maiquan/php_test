<?php
echo '123'; 
//phpinfo();
print_r($_SERVER['DOCUMENT_ROOT']);

// readfile('/export/data/www/u.jd.com/index.php');

print_r(range('a','z'));


$info = array('coffee', 'brown', 'caffeine');

// 列出所有变量
list($drink, $color, $power) = $info;
echo '</br>';
echo "$drink is $color and $power makes it special.\n";

list($drink, , $power) = $info;
echo "$drink has $power.\br";
?>

