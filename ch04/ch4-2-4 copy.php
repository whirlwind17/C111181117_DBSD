<?php
$name = "myName";
$$name = "黃冠倫";
$username = $$name;
$username1 = ${$name};
echo "變數\$name = $name<br/>";
echo "變數$$name = $myName<br/>";
echo "變數$$name = ${$name}<br/>";
echo "變數\$username = $username<br/>";
echo "變數\$username1 = $username1<br/>";
?>