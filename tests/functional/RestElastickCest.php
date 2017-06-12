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
        $params = [
            'index' => 'my_index',
            'body' => [
                'settings' => [
                    'number_of_shards' => 2,
                    'number_of_replicas' => 0
                ]
            ]
        ];
        $I->comment($params);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();




    }

}