<?php

use \Step\Acceptance;

/**
 * @group speed
 */
class SpeedAlyticsincCest
{

    function walmartFurniture(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-furniture.contentanalyticsinc.com','Walmart-furniture');
    }


}




