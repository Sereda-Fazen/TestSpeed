<?php

use \Step\Functional;
/**
 * @group api
 */
class ApiCest
{

    function sendPutRequest(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendDELETE('alex212', []);
        $I->sendDELETE('alex1', []);
        $I->sendDELETE('alex22', []);
        $I->sendDELETE('alex222', []);
        $I->sendDELETE('alex_final', []);
        $I->sendDELETE('my_index', []);


//        $I->sendPUT('alex212?pretty', [
//
//          "mappings" => [
//                "alex_test" => [
//                    "properties" => [
//                        "date" => [
//                            "type" => "date"
//                ]
//              ]
//    ]
//
//
//        ],
//        ]);
//
//        $I->seeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//
//        $json_data = file_get_contents(__DIR__ . '/../../servers/test.json');
//        $I->sendPOST('alex212/alex_test/1?pretty', [
//
//            "host" => "Walmart-furniture",
//            "dashboard" => 2.82,
//            "content" => 2.26,
//            "product" => 3.66,
//            "insight" => 2.3,
//            "total_time" => 11.04,
//            "date" => "2017-06-13T14:37:24.123",
//            "status" => "Success"
//    ]);
//        $I->canSeeResponseCodeIs(201);
//        $I->seeResponseIsJson();
//        $I->comment('The POST request was sent to Elastic Search!');
//
//
//
//





//        $json_data = file_get_contents(__DIR__ . '/../../servers/test.json');
//        $I->sendPUT('alex_test_index/alex_type/1?pretty', [
//            'user' => 'alex',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => addslashes($json_data)]);
//        $I->canSeeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//        $I->comment('The PUT request was sent to Elastic Search!');
//
//        file_put_contents(__DIR__ . '/../../servers/test.json', '');
//        $I->comment('The file was cleared!');

    }
}


//{
//    "fields" : ["_source", "_timestamp"]
//}