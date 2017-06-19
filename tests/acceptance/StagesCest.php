<?php

use \Step\Acceptance;

/**
 * @group stages
 */
class StagesCest
{

//    function test (\Helper\Acceptance $I){
//        $I->html_header();
//    }

    /**
     * @env walmart-furniture
     */
    
    
    function walmartFurniture(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-furniture.contentanalyticsinc.com','Walmart-furniture');
    }

    /**
     * @env 8thandwalton
     */
        function thandwalton(\Step\Acceptance\AccountSteps $I)
        {
            $I->stepsSpeedTest('http://8thandwalton.contentanalyticsinc.com','Eightthandwalton');
        }

    /**
     * @env acosta
     */

    function acosta(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://acosta.contentanalyticsinc.com','Acosta');
    }

    /**
     * @env americantextile
     */
    
    function americantextile(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://americantextile.contentanalyticsinc.com', 'Americantextile');
    }

    /**
     * @env bdub
     */
    
    function bdub(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://bdub.contentanalyticsinc.com', 'Bdub');
    }

    /**
     * @env bemis
     */
    
    function bemis(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://bemis.contentanalyticsinc.com','Bemis');
    }


    /**
     * @env bic
     */


    function bic(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://bic.contentanalyticsinc.com','Bic');
    }

    /**
     * @env brother
     */

    function brother(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://brother.contentanalyticsinc.com','Brother');
    }

    /**
     * @env cars
     */

    function cars(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://cars.contentanalyticsinc.com', 'Cars');
    }

    /**
     * @env cheyenne
     */

    function cheyenne(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://cheyenne.contentanalyticsinc.com', 'Cheyenne');
    }

    /**
     * @env coleman
     */

    function coleman(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://coleman.contentanalyticsinc.com','Coleman');
    }

    /**
     * @env colgate
     */

    function colgate(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://colgate.contentanalyticsinc.com','Colgate');
    }

    /**
     * @env crayola
     */

    function crayola(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://crayola.contentanalyticsinc.com','Crayola');
    }

    /**
     * @env badgerbasket
     */

    function badgerbasket(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://badgerbasket.contentanalyticsinc.com', 'Badgerbasket');
    }

    /**
     * @env crazart
     */

    function crazart(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://crazart.contentanalyticsinc.com', 'Crazart');
    }

    /**
     * @env david
     */

    function david(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://david.contentanalyticsinc.com','David');
    }

    /**
     * @env dole
     */

    function dole(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://dole.contentanalyticsinc.com','Dole');
    }

    /**
     * @env educationalinsights
     */

    function educationalinsights(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://educationalinsights.contentanalyticsinc.com','Educationalinsights');
    }

    /**
     * @env emerson
     */

    function emerson(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://emerson.contentanalyticsinc.com', 'Emerson');
    }

    /**
     * @env energizer
     */

    function energizer(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://energizer.contentanalyticsinc.com', 'Energizer');
    }

    /**
     * @env enjoylife
     */
    
    function enjoylife(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://enjoylife.contentanalyticsinc.com','Enjoylife');
    }

    /**
     * @env michael-sales
     */

    function michaelSales(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://michael-sales.contentanalyticsinc.com','Michael-sales');
    }

    /**
     * @env groupm
     */

    function groupm(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://groupm.contentanalyticsinc.com', 'Groupm');
    }

    /**
     * @env handcraft
     */

    function handcraft(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://handcraft.contentanalyticsinc.com', 'Handcraft');
    }

    /**
     * @env hormel
     */

    function hormel(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://hormel.contentanalyticsinc.com','Hormel');
    }

    /**
     * @env hostess
     */

    function hostess(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://hostess.contentanalyticsinc.com','Hostess');
    }

    /**
     * @env ideanuova
     */

    function ideanuova(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://ideanuova.contentanalyticsinc.com','Ideanuova');
    }

    /**
     * @env jedi
     */

    function jedi(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://jedi.contentanalyticsinc.com', 'Jedi');
    }

    /**
     * @env justplay
     */

    function justplay(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://justplay.contentanalyticsinc.com', 'Justplay');
    }


    /**
     * @env kimberlyclark
     */

    function kimberlyclark(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://kimberlyclark.contentanalyticsinc.com','Kimberlyclark');
    }

    /**
     * @env knex
     */

    function knex(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://knex.contentanalyticsinc.com','Knex');
    }

    /**
     * @env lego
     */

    function lego(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://lego.contentanalyticsinc.com','Lego');
    }

    /**
     * @env sales-peggy
     */

    function salesPeggy(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://sales-peggy.contentanalyticsinc.com', 'Sales-peggy');
    }

    /**
     * @env sales-brian
     */

    function salesBrian(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://sales-brian.contentanalyticsinc.com', 'Sales-brian');
    }


    /**
     * @env sales-daveb
     */

    function salesDaveb(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://sales-daveb.contentanalyticsinc.com','Sales-daveb');
    }

    /**
     * @env levis
     */

    function levis(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://levis.contentanalyticsinc.com','Levis');
    }

    /**
     * @env levis1
     */

    function levis1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://levis1.contentanalyticsinc.com','Levis1');
    }

    /**
     * @env pepsico-test
     */


    function pepsicoTest(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pepsico-test.contentanalyticsinc.com', 'Pepsico-test');
    }

    /**
     * @env pepsico-demo
     */

    function pepsicoDemo(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pepsico-demo.contentanalyticsinc.com', 'Pepsico-demo');
    }


    /**
     * @env loreal
     */



    function loreal(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://loreal.contentanalyticsinc.com','Loreal');
    }

    /**
     * @env mattel
     */

    function mattel(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://mattel.contentanalyticsinc.com','Mattel');
    }

    /**
     * @env meadjohnson
     */

    function meadjohnson(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://meadjohnson.contentanalyticsinc.com','Meadjohnson');
    }

    /**
     * @env merchants
     */

    function merchants(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://merchants.contentanalyticsinc.com', 'Merchants');
    }

    /**
     * @env monthly-dash
     */

    function monthlyDash(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://monthly-dash.contentanalyticsinc.com', 'Monthly-dash');
    }


    /**
     * @env moscoe
     */

    function moscoe(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://moscoe.contentanalyticsinc.com','Moscoe');
    }

    /**
     * @env newellco
     */

    function newellco(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://newellco.contentanalyticsinc.com','Newellco');
    }

    /**
     * @env nourison
     */

    function nourison(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://nourison.contentanalyticsinc.com','Nourison');
    }

    /**
     * @env pg-jet
     */

    function pgJet(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pg-jet.contentanalyticsinc.com', 'Pg-jet');
    }

    /**
     * @env pg-omni
     */

    function pgOmni(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pg-omni.contentanalyticsinc.com', 'Pg-omni');
    }


    /**
     * @env parispresents
     */

    function parispresents(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://parispresents.contentanalyticsinc.com','Parispresents');
    }

    /**
     * @env pepsico
     */

    function pepsico(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pepsico.contentanalyticsinc.com','Pepsico');
    }

    /**
     * @env pfizer
     */

    function pfizer(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pfizer.contentanalyticsinc.com','Pfizer');
    }

    /**
     * @env pg
     */

    function pg(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://pg.contentanalyticsinc.com', 'Pg');
    }

    /**
     * @env retailer-demo
     */

    function retailerDemo(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://retailer-demo.contentanalyticsinc.com','Retailer-demo');
    }

    /**
     * @env retail-link
     */

    function retailLink(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://retail-link.contentanalyticsinc.com','Retail-link');
    }

    /**
     * @env richcontext
     */


    function richcontext(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://richcontext.contentanalyticsinc.com','Richcontext');
    }

    /**
     * @env rockstar
     */

    function rockstar(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://rockstar.contentanalyticsinc.com','Rockstar');
    }

    /**
     * @env samsclub
     */

    function samsclub(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://samsclub.contentanalyticsinc.com', 'Samsclub');
    }

    /**
     * @env samsung
     */

    function samsung(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://samsung.contentanalyticsinc.com', 'Samsung');
    }


    /**
     * @env shell
     */

    function shell(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://shell.contentanalyticsinc.com','Shell');
    }

    /**
     * @env shurtech
     */

    function shurtech(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://shurtech.contentanalyticsinc.com','Shurtech');
    }

    /**
     * @env silver
     */

    function silver(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://silver.contentanalyticsinc.com','Silver');
    }

    /**
     * @env smuckers
     */

    function smuckers(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://smuckers.contentanalyticsinc.com', 'Smuckers');
    }

    /**
     * @env southshore
     */

    function southshore(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://southshore.contentanalyticsinc.com', 'Southshore');
    }

    /**
     * @env tcc
     */

    function tcc(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://tcc.contentanalyticsinc.com','Tcc');
    }

    /**
     * @env triad
     */

    function triad(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://triad.contentanalyticsinc.com','Triad');
    }

    /**
     * @env tracfone
     */

    function tracfone(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://tracfone.contentanalyticsinc.com','Tracfone');
    }

    /**
     * @env valvoline
     */

    function valvoline(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://valvoline.contentanalyticsinc.com', 'Valvoline');
    }

    /**
     * @env walkeredison
     */

    function walkeredison(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walkeredison.contentanalyticsinc.com', 'Walkeredison');
    }


    /**
     * @env walmart-content
     */

    function walmartContent(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-content.contentanalyticsinc.com','Walmart-content');
    }

    /**
     * @env walmart-catalog
     */

    function walmartCatalog(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-catalog.contentanalyticsinc.com','Walmart-catalog');
    }

    /**
     * @env walmart-editing
     */

    function walmartEditing(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-editing.contentanalyticsinc.com','Walmart-editing');
    }

    /**
     * @env walmart-insights
     */

    function walmartInsights(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart-insights.contentanalyticsinc.com', 'Walmart-insights');
    }

    /**
     * @env walmart
     */

    function walmart1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://walmart.contentanalyticsinc.com', 'Walmart');
    }


    /**
     * @env whalen
     */

    function whalen(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://whalen.contentanalyticsinc.com','Whalen');
    }

    /**
     * @env whitewave
     */

    function whitewave(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://whitewave.contentanalyticsinc.com','Whitewave');
    }

    /**
     * @env whytespyder
     */

    function whytespyder(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://whytespyder.contentanalyticsinc.com','Whytespyder');
    }

    /**
     * @env wm-mp
     */

    function wmMp(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mp.contentanalyticsinc.com', 'Wm-mp');
    }

    /**
     * @env wm-ondemand
     */

    function wmOndemand(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-ondemand.contentanalyticsinc.com', 'Wm-ondemand');
    }

    /**
     * @env jet
     */

    function jet(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://jet.contentanalyticsinc.com','Jet');
    }

    /**
     * @env steve-test
     */

    function steveTest(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://steve-test.contentanalyticsinc.com','Steve-test');
    }

    /**
     * @env mondelez
     */

    function mondelez(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://mondelez.contentanalyticsinc.com','Mondelez');
    }

    /**
     * @env thewhistler-group
     */

    function thewhistlerGroup(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://thewhistler-group.contentanalyticsinc.com', 'Thewhistler-group');
    }


    /**
     * @env waterpik
     */
    
    function waterpik(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://waterpik.contentanalyticsinc.com', 'Waterpik');
    }

    /**
     * @env samsung-amazon
     */

    function samsungAmazon(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://samsung-amazon.contentanalyticsinc.com','Samsung-amazon');
    }

    /**
     * @env reach
     */

    function reach(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://reach.contentanalyticsinc.com','Reach');
    }

    /**
     * @env shoebuy
     */

    function shoebuy(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://shoebuy.contentanalyticsinc.com','Shoebuy');
    }

    /**
     * @env moosejaw
     */

    function moosejaw(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://moosejaw.contentanalyticsinc.com', 'Moosejaw');
    }

    /**
     * @env wm-may1
     */

    function wmMay1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-may1.contentanalyticsinc.com', 'Wm-may1');
    }


    /**
     * @env wm-may2
     */

    function wmMay2(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-may2.contentanalyticsinc.com','Wm-may2');
    }

    /**
     * @env wm-mpmay1
     */

    function wmMpmay1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpmay1.contentanalyticsinc.com','Wm-mpmay1');
    }

    /**
     * @env tyson
     */

    function tyson(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://tyson.contentanalyticsinc.com','Tyson');
    }

    /**
     * @env intradeco
     */

    function intradeco(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://intradeco.contentanalyticsinc.com', 'Intradeco');
    }

    /**
     * @env possible
     */

    function possible(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://possible.contentanalyticsinc.com', 'Possible');
    }


    /**
     * @env wm-mpmay2
     */

    function wmMpmay2(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpmay2.contentanalyticsinc.com','Wm-mpmay2');
    }

    /**
     * @env wm-mpmay3
     */

    function wmMpmay3(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpmay3.contentanalyticsinc.com','Wm-mpmay3');
    }

    /**
     * @env wm-mpmay4
     */

    function wmMpmay4(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpmay4.contentanalyticsinc.com','Wm-mpmay4');
    }

    /**
     * @env wm-mpmay5
     */

    function wmMpmay5(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpmay5.contentanalyticsinc.com', 'Wm-mpmay5');
    }

    /**
     * @env snyderslance
     */

    function snyderslance(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://snyderslance.contentanalyticsinc.com', 'Snyderslance');
    }


    /**
     * @env sauder
     */

    function sauder(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://sauder.contentanalyticsinc.com','Sauder');
    }

    /**
     * @env mondelez-test
     */

    function mondelezTest(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://mondelez-test.contentanalyticsinc.com','Mondelez-test');
    }

    /**
     * @env mondelez-global
     */

    function mondelezGlobal(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://mondelez-global.contentanalyticsinc.com','Mondelez-global');
    }

    /**
     * @env buffalo-tools
     */

    function buffaloTools(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://buffalo-tools.contentanalyticsinc.com', 'Buffalo-tools');
    }

    /**
     * @env atkins
     */

    function atkins(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://atkins.contentanalyticsinc.com', 'Atkins');
    }


    /**
     * @env bazaarvoice
     */

    function bazaarvoice(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://bazaarvoice.contentanalyticsinc.com','Bazaarvoice');
    }

    /**
     * @env educationalinsights1
     */

    function educationalinsights1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://educationalinsights1.contentanalyticsinc.com','Educationalinsights1');
    }

    /**
     * @env samsclub-traffic
     */

    function samsclubTraffic(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://samsclub-traffic.contentanalyticsinc.com','Samsclub-traffic');
    }

    /**
     * @env wm-april1
     */

    function wmApril1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-april1.contentanalyticsinc.com', 'Wm-april1');
    }


    /**
     * @env wm-april2
     */
    function wmApril2(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-april2.contentanalyticsinc.com', 'Wm-april2');
    }

    /**
     * @env wm-mpapril1
     */

    function wmMpapril1(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpapril1.contentanalyticsinc.com','Wm-mpapril1');
    }

    /**
     * @env wm-mpapril2
     */

    function wmMpapril2(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpapril2.contentanalyticsinc.com','Wm-mpapril2');
    }

    /**
     * @env wm-mpapril3
     */

    function wmMpapril3(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpapril3.contentanalyticsinc.com','Wm-mpapril3');
    }


    /**
     * @env wm-mpapril4
     */
    function wmMpapril4(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpapril4.contentanalyticsinc.com', 'Wm-mpapril4');
    }

    /**
     * @env wm-mpapril5
     */

    function wmMpapril5(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://wm-mpapril5.contentanalyticsinc.com', 'Wm-mpapril5');
    }

    /**
     * @env target
     */

    function target(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://target.contentanalyticsinc.com','Target');
    }

    /**
     * @env hollandersleep
     */

    function hollandersleep(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://hollandersleep.contentanalyticsinc.com','Hollandersleep');
    }

    /**
     * @env acosta2
     */

    function acosta2(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://acosta2.contentanalyticsinc.com','Acosta2');
    }

    /**
     * @env philips
     */

    function philips(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://philips.contentanalyticsinc.com', 'Philips');
    }

    /**
     * @env talkingrain
     */

    function talkingrain(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://talkingrain.contentanalyticsinc.com', 'Talkingrain');
    }

    /**
     * @env heineken
     */



    function heineken(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://heineken.contentanalyticsinc.com','Heineken');
    }

    /**
     * @env jacobsmarketing
     */

    function jacobsmarketing(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://jacobsmarketing.contentanalyticsinc.com','Jacobsmarketing');
    }

    /**
     * @env hayneedle
     */

    function hayneedle(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://hayneedle.contentanalyticsinc.com', 'Hayneedle');
    }

    /**
     * @env nonnis
     */

    function nonnis(\Step\Acceptance\AccountSteps $I)
    {
        $I->stepsSpeedTest('http://nonnis.contentanalyticsinc.com', 'Nonnis');
    }


//    function footer (\Helper\Acceptance $I){
//        $I->html_footer();
//    }


}



