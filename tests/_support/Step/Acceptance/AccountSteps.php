<?php
namespace Step\Acceptance;

class AccountSteps extends \AcceptanceTester
{


    public static $pass;
    public static $dashboard;
    public static $content;
    public static $insight;
    public static $product;
    
    function stepsSpeedTest($url, $pass)
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
        self::$dashboard = round((microtime(true) - $start), 2);

        $start = microtime(true);
        $I->amOnPage('/assess/products');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        self::$content = round((microtime(true) - $start), 2);

        $start = microtime(true);
        $I->amOnPage('/assess/brand_report_ranking');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        self::$insight = round((microtime(true) - $start), 2);

        $start = microtime(true);
        $I->amOnPage('/item_setup/manage');
        $I->waitForJS("return jQuery.active == 0;", 1200);
        self::$product = round((microtime(true) - $start), 2);


//        if (self::$product > 5 || self::$content > 5 || self::$insight > 5 || self::$dashboard > 5){
//            $I->errorData('Load is too long');
//        }
//        elseif($product > 10 || $content > 10 || $insight > 10 || $dashboard > 10) {
//            $I->errorData('Critical load');
//        }
//        else {
//            $I->errorData('Success');
//        }

       //$I->writeJson($pass,self::$dashboard,self::$content,self::$insight,self::$product);







        
    }
}