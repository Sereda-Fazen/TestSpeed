<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->sendGET('_cat/master?format=json');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();

    }

}