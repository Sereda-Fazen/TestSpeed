<?php
namespace Step\Acceptance;

use Exception;

class AccountSteps extends \AcceptanceTester
{

    function stepsSpeedTest($url,$pass)
    {
        $s = 'success';
        $I = $this;
        $I->amOnUrl($url);
        $I->waitForText('Please login below',20);
        $I->fillField('#identity','bayclimber@gmail.com');
        $I->fillField('#password',$pass.'.2014');
        $I->click('[name="submit"]');
        $I->waitForElement('.main-menu-container');
        
        $start = microtime(true);
        $I->amOnPage('/dashboard');
        $I->waitForJS("return jQuery.active == 0;", 20);
        $dashboard = round((microtime(true) - $start), 2);
        if ($dashboard < 5){
            $I->comment($s);
        } else {
            $I->comment('load is too long');
        }


        $start = microtime(true);
        $I->amOnPage('/assess/products');
        $I->waitForJS("return jQuery.active == 0;", 20);
        $content = round((microtime(true) - $start), 2);
        if ($content < 5){
            $I->comment($s);
        } else {
            $I->comment('load is too long');
        }

        $start = microtime(true);
        $I->amOnPage('/assess/brand_report_ranking');
        $I->waitForJS("return jQuery.active == 0;", 20);
        $insight = round((microtime(true) - $start), 2);
        if ($insight < 5){
            $I->comment($s);
        } else {
            $I->comment('load is too long');
        }

        $start = microtime(true);
        $I->amOnPage('/item_setup/manage');
        $I->waitForJS("return jQuery.active == 0;", 20);
        $product = round((microtime(true) - $start), 2);
        if ($product < 5){
            $I->comment($s);
        } else {
            $I->comment('load is too long');
        }

        $I->writtenDate($pass,$dashboard,$content,$insight,$product, $s);







        
    }
}