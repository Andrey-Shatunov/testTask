<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header.');

$I->amOnUrl('https://my.zadarma.com');
$I -> setCookie ('PHPSESSID',$I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.en > a');
$I->wait(1);

// Footer
$I->see('Zadarma.com', Locator::href('https://zadarma.com')); 
$I->see('on-line chat', Locator::href('https://zadarma.com')); 
$I->see('Support', Locator::href('/tickets/')); 

