<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->sendGET('_cat/health');
        $I->seeResponseCodeIs(200);
        $I->sendGET('/_cat/master?v');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->sendGET('/_cat/indices?format=json&pretty');
        $I->seeResponseCodeIs(200);
    }

}