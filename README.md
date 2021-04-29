# php-example
example.php.loadfunc.com



## Install from bash
bash script

    install.bat
    ./install.sh

from domain: php.loadfunc.com

    curl https://php.loadfunc.com/load_func.php --output load_func.php

from github

    curl https://loadfunc.github.io/php/load_func.php --output load_func.php


## Install with composer

create packages.json

    {
        "repositories": [
            {
                "type": "composer",
                "url": "https://php.loadfunc.com"
            }
        ]
    }

command:

    composer install

## Start

    php index.php