<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check phone input for polish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));


$I -> amOnPage ('/');
//For english version
$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.pl > a');
$I->wait(3);

$I->fillField('number', '+79518866788');
$I->wait(3);
$I->see('Potwierdź numer telefonu');