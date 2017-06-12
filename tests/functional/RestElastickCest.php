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
        #$I->sendPUT('http://172.17.0.1:9200/_cat',['attachmentFile' => codecept_data_dir('test.json')]);
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPUT('http://172.17.0.1:9200/_cat', [
            'settings' => [
                'index' => [
                    'number_of_shards' => 3,
                    'number_of_replicas' => 2
                ]
            ]
        ]);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();






        $I->sendGET('_cat/_settings');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();




    }

}