<?php
function welcome(?string $name = null) {
    if (is_null($name)) {
        echo "Welcome!<br/>";
    } else {
        echo "Welcome $name!<br/>";
    }        
}
?>

<?php
welcome("黃冠倫");
welcome(null);
welcome();
?>