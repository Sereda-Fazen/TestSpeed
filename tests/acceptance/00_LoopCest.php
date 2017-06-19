<?php

use \Step\Acceptance;

/**
 * @group loop
 */
class LoopCest
{
        function loopTests(\Step\Acceptance\AccountSteps $I)
        {
            $envs = ['walmart-furniture', '8thandwalton','acosta', 'americantextile'];
            foreach ($envs as $env) {
                exec("codecept run -g stages --env $env");
                exec("codecept run -g api --debug");
            }
        }






}



