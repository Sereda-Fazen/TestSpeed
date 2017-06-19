<?php


$envs = ['walmart-furniture', 'acosta', 'americantextile'];

foreach ($envs as $env) {
    system("codecept run -g stages --env $env");
    system("codecept run -g api --debug");
}

?>