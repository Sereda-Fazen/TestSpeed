<?php

use \Step\Functional;
/**
 * @group api
 */
class ApiCest
{

    function sendPutRequest(\FunctionalTester $I)
    {

//        $I->amHttpAuthenticated('elastic', 'changeme');
//        $I->haveHttpHeader('Content-Type', 'application/json');
//        $json_data = file_get_contents(__DIR__ . '/../../servers/test.json');
//        $I->sendPUT('test_index/test/1?pretty', [
//            'user' => 'alex',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => addslashes($json_data)]);
//        $I->canSeeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//        $I->comment('The PUT request was sent to Elastic Search!');

        file_put_contents(__DIR__ . '/../../servers/test.json', '');
        $I->comment('The file was cleared!');

    }
}