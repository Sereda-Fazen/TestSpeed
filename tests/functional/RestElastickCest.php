<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {
        $I->sendGET('/');
        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        
    }

}