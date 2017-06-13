<?php

use \Step\Acceptance;

/**
 * @group speed
 */
class SpeedAlyticsincCest
{

    /**
     * @env talkingrain
     */

    function talkingrain(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://talkingrain.contentanalyticsinc.com', 'Talkingrain');
    }
    
}




