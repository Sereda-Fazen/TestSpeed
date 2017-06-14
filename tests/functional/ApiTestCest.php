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

        $I->sendDELETE('test_index_1/', [

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
        ]);

        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();





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