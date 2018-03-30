<?php
if ($argc !== 2){
    echo "Usage: php index.php [name]\n";
    exit(1);
}else{
    $name = $argv[1];
    echo "Hello , $name\n";
}
?>
