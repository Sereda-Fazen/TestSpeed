<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {
        
        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->haveHttpHeader('Content-Type', 'application/json');
//        $I->sendPUT('test_index?pretty', [
//                'settings' => [
//                    'index' => [
//                    'number_of_shards' => 3,
//                    'number_of_replicas' => 2
//                ]
//            ]
//
//        ])

        $I->sendGET('_cat/indices?v');
//        $I->sendPUT('test_index?pretty',[
//            'user' => 'test',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => "test form codeception"
//        ]);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();


    }

}