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
        $I->sendDELETE('alex_index', []);


        $I->sendPUT('alex_index?pretty=true', [

            'settings' => [
                'index' => [
                    'number_of_shards' => 1,
                    'number_of_replicas' => 0
                ],
                "_timestamp" => date("Y-m-d H:i:s"),
            ]

        ]);
//
//
//        $I->seeResponseCodeIs(200);
//        $I->seeResponseIsJson();

//        $json_data = file_get_contents(__DIR__ . '/../../servers/test.json');
//        $I->sendPUT('alex_index/alex_test/1?pretty', [
//            'user' => 'alex',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => addslashes($json_data)]);
//        $I->canSeeResponseCodeIs(201);
//        $I->seeResponseIsJson();
//        $I->comment('The PUT request was sent to Elastic Search!');



//            'index' => 'my_index',
//            'body' => [
//                'settings' => [
//                    'number_of_shards' => 3,
//                    'number_of_replicas' => 2
//                ],
//                'mappings' => [
//                    'my_type' => [
//                        '_source' => [
//                            'enabled' => true
//                        ],
//                        'properties' => [
//                            'first_name' => [
//                                'type' => 'string',
//                                'analyzer' => 'standard'
//                            ],
//                            'age' => [
//                                'type' => 'integer'
//                            ]
//                        ]
//                    ]
//                ]
//            ]
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