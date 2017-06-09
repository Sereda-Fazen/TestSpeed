<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->sendGET('/_cat/health');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        
    }

}