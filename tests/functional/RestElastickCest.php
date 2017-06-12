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
//        ]);
        $I->sendPUT('test_index?pretty',['attachmentFile' => codecept_data_dir('../Test_Param/servers/test.json')]);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();





    }

}