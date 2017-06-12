<?php


/**
 * @group api
 */
class ApiCest
{

    function api(\FunctionalTester $I)
    {

        $I->amHttpAuthenticated('elastic', 'changeme');
        #$I->sendPUT('http://172.17.0.1:9200/_cat',['attachmentFile' => codecept_data_dir('test.json')]);
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPUT('localhost:9200/twitter?pretty', [
            'index' => 'test_index',
            'body' => [
                'settings' => [
                    'number_of_shards' => 3,
                    'number_of_replicas' => 2
                ],
                'mappings' => [
                    'my_type' => [
                        '_source' => [
                            'enabled' => true
                        ],
                        'properties' => [
                            'first_name' => [
                                'type' => 'string',
                                'analyzer' => 'standard'
                            ],
                            'age' => [
                                'type' => 'integer'
                            ]
                        ]
                    ]
                ]
            ]

        ]);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();





    }

}