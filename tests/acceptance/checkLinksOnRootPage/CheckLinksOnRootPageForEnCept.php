<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check links on eglish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.en > a');
$I->wait(3);


$I->click('body > div > div > div:nth-child(5) > div:nth-child(1) > div > div > div.media-right > a');
$I->wait(1);
$I->see('SIP connection settings');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(1) > div > div > div.media-right > a');
$I->see('Find a country or city');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(1) > div > div > div.media-right > a');
$I->switchToNextTab();
$I->see('The new and most efficient Zadarma');
$I->closeTab();

$I->wait(1);
// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(5) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Top up account balance');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('PBX Wizard');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Outgoing calls statistics');


