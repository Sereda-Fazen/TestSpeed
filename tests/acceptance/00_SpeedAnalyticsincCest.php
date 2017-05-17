<?php

use \Step\Acceptance;

/**
 * @group speed
 */
class SpeedAlyticsincCest
{

    function cheyenne(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://cheyenne.contentanalyticsinc.com', 'Cheyenne');
    }



}




