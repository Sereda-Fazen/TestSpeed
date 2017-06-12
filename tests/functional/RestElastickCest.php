<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I, \Step\Acceptance\AccountSteps $I)
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
//        ]);
        $I->sendPUT('test_index?pretty',[
            'user' => 'кому отправлено',
            "post_date" => "дата отправления",
            "message" => "{[\"date\" : \"2012-10-10\", \"walmart\" : \"\", \"dashboard\": \"2.2\", \"product\": \"3.4\", \"insight_report\": \"3.5\", \"status\": \" success\"]}"
        ]);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();





    }

}