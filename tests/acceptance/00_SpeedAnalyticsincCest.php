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

    function thandwalton(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://8thandwalton.contentanalyticsinc.com','Eightthandwalton');
        }

    function footer (\Helper\Acceptance $I){
        $I->html_footer();
    }

}




