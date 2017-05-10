<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I


use Codeception\Test\Descriptor;
use Codeception\TestInterface;

class Acceptance extends \Codeception\Module
{



    public function scrollDown($scroll_Y = null) {
        $driv = $this->getModule('WebDriver')->webDriver;
        $scroll_Y = abs(intval($scroll_Y));
        $script= '';
        if (!$scroll_Y) {
            $script = '$heig = window.screen.availHeight; ';
        } else {
            $script = '$heig = ' . $scroll_Y . '; ';}
        $script .= 'window.scrollBy(0, $heig)';
        $driv->executeScript($script);
    }

    public function scrollUp($scroll_Y = null) {
        $driv = $this->getModule('WebDriver')->webDriver;
        $scroll_Y = -abs(intval($scroll_Y));
        $script= '';
        if (!$scroll_Y) {
            $script = '$heig = -window.screen.availHeight; ';
        } else {
            $script = '$heig = ' . $scroll_Y . '; ';}
        $script .= 'window.scrollBy(0, $heig)';
        $driv->executeScript($script);
    }


    public function waitAlertAndAccept($timeout = 5, $interval = 200)
    {
        $driv = $this->getModule('WebDriver')->webDriver;
        $alert = $driv->wait($timeout, $interval)->until(function($driv) {
            try {
                $alert = $driv->switchTo()->alert();
                $alert->getText();
                return $alert;
            } catch (NoAlertOpenException $e) {
                return null;
            }
        });
        $alert->accept();
    }


    public function waitForAjax($timeout = 15, $interval = 200)
    {
        $driv = $this->getModule('WebDriver')->webDriver;
        $driv->wait($timeout, $interval)->until(function($driv) {
            $condition = 'return (jQuery.active == 0);';
            return $driv->executeScript($condition);
        });
    }

    public function secondWindow(){
        $I = $this;
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
    }
    /**
     * localStorageClear : очищает локальное хранилище браузера
     * @param  string $key : имя ключа в хранилище, при пустом значении очищает все хранилище
     */
    public function localStorageClear($key = null) {
        $wb = $this->getModule('WebDriver');
        $wb->executeJS('window.localStorage.' . ((is_string($key) == true) ? "removeItem(\"$key\"" : 'clear(') . ');');
    }

    /**
    * seeImage : проверяет отображение картинки методом проверки реального размера изображения
    * @param  string $element : XPath или CSS локатор
    * @param  string $cssValue : минимальные размер по X и Y
    **/

    public function seeImage($element, $minSizeXY = 10) {
        $wb = $this->getModule('WebDriver');
        $realSizeX = $wb->grabAttributeFrom($element, 'naturalWidth');
        $realSizeY = $wb->grabAttributeFrom($element, 'naturalHeight');
        $this->assertGreaterThanOrEqual($minSizeXY, $realSizeX);
        $this->assertGreaterThanOrEqual($minSizeXY, $realSizeY);
    }

    public function waitAndClick($locator){
        $wait = $this->getModule('WebDriver');
        $wait->waitForElement($locator);
        $wait->click($locator);
    }

/*
    public function _failed(TestInterface $test, $fail)
    {
        $wd = $this->getModule('WebDriver');
        $bv = $wd->_getConfig('browser');
        $wd->debugWebDriverLogs();
        $fileName = preg_replace('~/W~', '.', Descriptor::getTestSignature($test));
        $outputDir = codecept_output_dir();
        if (!$outputDir . $bv) {
            mkdir($outputDir . $bv.date(" - F j, Y, g:i a"), 0777, true);
            $wd->_saveScreenshot($outputDir . $bv.date(" - F j, Y, g:i a"). '/' . mb_strcut($bv . '-' . $fileName,
                            0, 245, 'utf-8') . ' - ' . date("F j, Y, g:i a") . '.fail.png');
        }
    }
*/
    public function writtenDate($host,$dashboard,$content,$product_list,$insight_report,$error)
    {
        $file = '../TestSpeedPages/servers/Stages.csv';
        $total_time = $dashboard + $content + $product_list + $insight_report;
        $current = file_get_contents($file);
        $date = date("Y-m-d H:i:s");

        
        $current .= "$host,";
        $current .= "$date,";
        $current .= "$dashboard,";
        $current .= "$content,";
        $current .= "$product_list,";
        $current .= "$insight_report,";
        $current .= "$total_time,";
        $current .= "$error;\n";
        file_put_contents($file, $current);
    }







}