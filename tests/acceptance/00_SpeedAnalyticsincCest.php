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

    function acosta(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://acosta.contentanalyticsinc.com','Acosta');
    }

    function americantextile(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://americantextile.contentanalyticsinc.com', 'Americantextile');
    }

    function footer (\Helper\Acceptance $I){
        $I->html_footer();
    }

}




