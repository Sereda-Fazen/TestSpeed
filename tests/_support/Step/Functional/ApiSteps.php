<?php
namespace Step\Functional;

class ApiSteps extends \FunctionalTester
{

    function elastikSearchApi($date, $host, $dash, $prod, $insight, $status)
    {
        $I = $this;
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

        // $I->sendGET('test_index/_settings');
        $I->sendPUT('test_index/test/1?pretty', [
            'user' => 'alex',
            "post_date" => date("Y-m-d H:i:s"),
            "message" => '{[\"date\" : \"' . $date . '\", \"host\" : \"' . $host . '\", \"dashboard\": \"' . $dash . '\", \"product\": \"' . $prod . '\", \"insight_report\": \"' . $insight . '\", \"status\": \"' . $status . '\"]}']);
        $I->canSeeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//    function connectToElastick($url, $pass)
//    {
//
//        $I = $this;
//        $I->amHttpAuthenticated($url, $pass);
//        $I->haveHttpHeader('Content-Type', 'application/json');
//        $I->seeResponseCodeIs(200);
//
//    }
//
//    function createIndex()
//    {
//
//        $I = $this;
//        $I->sendPUT('test_index?pretty', [
//            'settings' => [
//                'index' => [
//                    'number_of_shards' => 3,
//                    'number_of_replicas' => 2
//                ]
//            ]
//
//        ]);
//
//        $I->seeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//
//    }
//    
//    function  createPutRequest($host, $dash, $content, $prod, $insight)
//    {
//        $I = $this;
//        $date_el = date("Y-m-d H:i:s");
//
//        $total_time = $dash + $content + $prod + $insight;
////        if ($dash > 5 || $content > 5 || $prod > 5 || $insight > 5)
////        {
////          $status  =  "Load is too long";
////        }
////        elseif ($dash > 10 || $content > 10 || $prod > 10 || $insight > 10){
////          $status =   "Load is critical";
////        }
//
//        $I->sendPUT('test_index/test/1?pretty',[
//            'user' => 'alex',
//            "post_date" => date("Y-m-d H:i:s"),
//            "message" => "{[\"date\" : \"$date_el\", \"host\" : \"$host\", \"dashboard\": \"$dash\",\"content_health\": \"$content\" , \"product\": \"$prod\", \"insight_report\": \"$insight\", \"total_time\": $total_time\"]}"
//
//        ]);
//        $I->seeResponseCodeIs(200);
//        $I->seeResponseIsJson();
//    }
    