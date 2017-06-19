
<?php


$envs = ['walmart-furniture', '8thandwalton','acosta', 'americantextile', ''];

foreach ($envs as $env) {
    system("codecept run -g stages --env $env");
    system("codecept run -g api --debug");
}

?>