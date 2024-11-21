<?php
function welcome(?string $name) {
    echo $name;
}
?>

<?php
welcome("黃冠倫");
welcome(null);
// welcome();
?>
