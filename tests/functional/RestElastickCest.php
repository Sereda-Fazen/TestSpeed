<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->sendGET('/');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        
    }

}