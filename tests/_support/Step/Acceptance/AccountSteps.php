<?php
namespace Step\Acceptance;

use Exception;

class AccountSteps extends \AcceptanceTester
{

    function stepsSpeedTest($url,$pass)
    {

        $I = $this;
        $I->amOnUrl($url);
        $I->waitForText('Please login below',120);
        $I->fillField('#identity','bayclimber@gmail.com');
        $I->fillField('#password',$pass.'.2014');
        $I->click('[name="submit"]');
        $I->waitForElement('.main-menu-container');

        $start = microtime(true);
        $I->amOnPage('/dashboard');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        $dashboard = round((microtime(true) - $start), 2);
        
        $start = microtime(true);
        $I->amOnPage('/assess/products');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        $content = round((microtime(true) - $start), 2);
        
        $start = microtime(true);
        $I->amOnPage('/assess/brand_report_ranking');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        $insight = round((microtime(true) - $start), 2);

        $start = microtime(true);
        $I->amOnPage('/item_setup/manage');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        $product = round((microtime(true) - $start), 2);

        
        if ($product > 5 || $content > 5 || $insight > 5 || $dashboard > 5){
            $I->errorData('Load is too long');
        } else {
            $I->errorData('Success');
        }
        
        $I->writtenDate($pass,$dashboard,$content,$insight,$product);







        
    }
}