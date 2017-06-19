#! /usr/bin/php
<?php


$envs = ['walmart-furniture', 'acosta', 'americantextile'];

foreach ($envs as $env) {
    exec("codecept run -g stages --env $env");
    exec("codecept run -g api --debug");
}

?>