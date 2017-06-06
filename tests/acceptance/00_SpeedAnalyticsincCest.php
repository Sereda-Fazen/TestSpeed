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

    /**
     * @env walmart-furniture
     */
    
    function walmartFurniture(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-furniture.contentanalyticsinc.com','Walmart-furniture');
    }
    
    /**
     * @env acosta
     */

    function acosta(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://acosta.contentanalyticsinc.com','Acosta');
    }

    function footer (\Helper\Acceptance $I){
        $I->html_footer();
    }


}




