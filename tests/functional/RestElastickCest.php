<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {
        $I->sendGET('/');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        
    }

}