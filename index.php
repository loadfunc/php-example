<?php
// install.bat
// ./install.sh

include 'load_func.php';

# Function Async
load_func(["https://letjson.github.io/php/let_json.php"], function () {
    $objs = let_json("https://letjson.github.io/js/letjson.json");
    var_dump($objs);
});