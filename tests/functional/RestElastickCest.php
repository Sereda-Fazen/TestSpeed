<?php

use \Step\Functional;
/**
 * @group api
 */
class ApiCest
{

//    function api(\FunctionalTester $I)
//    {
//
//        $I->amHttpAuthenticated('elastic', 'changeme');
//        $I->haveHttpHeader('Content-Type', 'application/json');
////        $I->sendPUT('test_index?pretty', [
////                'settings' => [
////                    'index' => [
////                    'number_of_shards' => 3,
////                    'number_of_replicas' => 2
////                ]
////            ]
////
////        ])
//
//        // $I->sendGET('test_index/_settings');
//        $I->sendPUT('test_index/test/1?pretty',[
//            'user' => 'alex',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => "{[\"date\" : \"test\", \"host\" : \"test\", \"dashboard\": \"test\", \"product\": \"test\", \"insight_report\": \"test\", \"status\": \" test\"]}"
//
//        ]);
//        $I->canSeeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//
//
//    }











    function restApiElastickSearch(FunctionalTester $I)
    {
        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->haveHttpHeader('Content-Type', 'application/json');

        $I->sendPUT('test_index/test/1?pretty',[
            'user' => 'alex',
            "post_date" => date("Y-m-d H:i:s"),
            "message" => "{[\"date\" : \"test\", \"host\" : \"test\", \"dashboard\": \"test\", \"product\": \"test\", \"insight_report\": \"test\", \"status\": \" test\"]}"

        ]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->sendGET('test_index/test/1?pretty');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
    

}