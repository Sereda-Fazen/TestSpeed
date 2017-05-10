<?php

use \Step\Acceptance;

/**
 * @group stages
 */
class StagesCest
{


        function Educationalinsights1(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://educationalinsights1-test.contentanalyticsinc.com','Educationalinsights1');
        }

        function Elsa7(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://elsa7.contentanalyticsinc.com','Elsa7');
        }

        function PepsicoDemoCopy(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://pepsico-demo-copy.contentanalyticsinc.com','Pepsico-demo-copy');
        }

        function GenrichTest(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://genrich-test.contentanalyticsinc.com', 'Genrich-test');
        }

        function WmFeb1Test(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://wm-feb1-test.contentanalyticsinc.com', 'Wm-feb1-test');
        }




}



