
<?php
$lua = new Lua();
$lua->eval(<<<CODE
    print("O LUA-PHP está funcionando");
CODE
);
?>

