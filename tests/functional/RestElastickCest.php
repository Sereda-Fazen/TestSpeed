<?php

/**
 * @group api
 */
class ApiCest
{

    function restApiElastickSearch(\Step\Functional\ApiSteps $I, Step\Acceptance\AccountSteps $I)
    {
        $I->connectToElastick('elastic', 'changeme');
        #$I->createIndex();
        $I->createPutRequest(
            Step\Acceptance\AccountSteps::$dashboard,
            Step\Acceptance\AccountSteps::$content,
            Step\Acceptance\AccountSteps::$insight,
            Step\Acceptance\AccountSteps::$product
          );
        
        $I->sendGET('test_index/test/1?pretty');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
    

}