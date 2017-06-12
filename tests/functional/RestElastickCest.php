<?php

use \Step\Functional;
/**
 * @group api
 */
class ApiCest
{

    function restApiElastickSearch(\Step\Functional\ApiSteps $I, Step\Acceptance\AccountSteps $I)
    {
        $I->connectToElastick('elastic', 'changeme');
        #$I->createIndex();
        $I->createPutRequest('1','2','3','4','5'
          );
        
        $I->sendGET('test_index/test/1?pretty');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
    

}