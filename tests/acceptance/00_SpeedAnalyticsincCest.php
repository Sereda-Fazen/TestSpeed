<?php

use \Step\Acceptance;

/**
 * @group speed
 */
class SpeedAlyticsincCest
{
    
    /**
     * @env walmart-furniture
     */
    
    function walmartFurniture(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-furniture.contentanalyticsinc.com','Walmart-furniture');
    }
    
}




