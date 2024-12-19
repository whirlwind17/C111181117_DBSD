<?php 
$ip = $_SERVER["REMOTE_ADDR"];
print 'Ip Address' . ''. $ip .'';
?>
<table border="1">
   <Tr>
      <td>C111181117</td>
      <td>Alan</td>
   </Tr>   
   
   <?php
   foreach($_SERVER as $key => $value) {
      echo "<tr><td>" . $key . "</td>";
      echo "<td>" . $value . "</td></tr>";
   }
   ?>
   </table>