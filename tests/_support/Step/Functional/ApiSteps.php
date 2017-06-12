<?php
namespace Step\Functional;

class ApiSteps extends \FunctionalTester
{

    function connectToElastick($url, $pass)
    {

        $I = $this;
        $I->amHttpAuthenticated($url, $pass);
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->seeResponseCodeIs(200);

    }

    function createIndex()
    {

        $I = $this;
        $I->sendPUT('test_index?pretty', [
            'settings' => [
                'index' => [
                    'number_of_shards' => 3,
                    'number_of_replicas' => 2
                ]
            ]

        ]);

        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();

    }
    
    function  createPutRequest($dash, $content, $prod, $insight)
    {
        $I = $this;
        $I->sendGET('test_index/test/1?pretty');
        $I->sendPUT('test_index/test/1?pretty',[
            'user' => 'alex',
            "post_date" => date("Y-m-d H:i:s"),
            "message" => "{[\"date\" : \"$date_time\", \"host\" : \"$host\", \"dashboard\": \"$dash\",\"content_health\": \"$content\" , \"product\": \"$prod\", \"insight_report\": \"$insight\", \"total_time\": $total_time\", \"status\": \" $status\"]}"

        ]);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
    
}