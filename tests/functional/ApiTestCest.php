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
        $I->sendDELETE('alex', []);



//        $I->sendPUT('alex?pretty', [
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
//        $array = json_decode($json_data, TRUE );
//        foreach ($array as $post) {
//            $I->sendPOST('alex/alex_type/2',
//                $post);
//            $I->canSeeResponseCodeIs(201);
//            $I->seeResponseIsJson();
//        }
//        $I->comment('The POST request was sent to Elastic Search!');
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