
<?php
$lua = new Lua();
$lua->eval(<<<CODE
    print(2);
CODE
);
?>

