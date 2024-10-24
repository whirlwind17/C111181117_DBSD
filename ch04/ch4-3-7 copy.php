<?php 
function square(mixed $v): mixed {
    return $v ** 2;
}
echo "square(2) = ".square(2)."<br/>";
echo "square(2.5) = ".square(2.5)."<br/>";
echo square(2.9) ."<br/>";
?>