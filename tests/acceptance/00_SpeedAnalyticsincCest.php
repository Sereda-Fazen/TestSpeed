<?php

use \Step\Acceptance;

/**
 * @group speed
 */
class SpeedAlyticsincCest
{

    function test (\Helper\Acceptance $I){
        $I->html_header();
    }

    function walmartFurniture(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-furniture.contentanalyticsinc.com','Walmart-furniture');
    }

    function footer (\Helper\Acceptance $I){
        $I->html_footer();
    }


}




