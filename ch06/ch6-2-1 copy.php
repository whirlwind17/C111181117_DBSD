<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-1.php</title>
<?php 
function printHeader() {
   print "<h3>PHP與MySQL網頁設計</h3>";
   echo "<hr/>";
} 
function printFooter() {
   print "<hr/>(c)Copyright by 陳會安<br/>";
} 
?>
</head>
<body>
<?php 
printHeader(); 
print "<p>在PHP程式使用函數建立標題和註腳文字</p>";
printFooter();  
?>
</body>
</html>