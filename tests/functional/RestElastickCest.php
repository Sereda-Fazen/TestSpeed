<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        $I->sendGET('_cat/master?format=json');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
//        $I->sendPUT(
//            [
//                'index' => 'my_index',
//                'body' => [
//                    'settings' => [
//                        'number_of_shards' => 2,
//                        'number_of_replicas' => 0
//                    ]
//                ]
//            ]);
//        $I->seeResponseCodeIs(200);
//        $I->seeResponseIsJson();




    }

}