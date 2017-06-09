<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {
        $I->sendGET('/health');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        
    }

}