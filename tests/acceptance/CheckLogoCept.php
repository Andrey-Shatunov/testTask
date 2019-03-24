<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check logo availability.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->seeElement('body > div > nav > div > div.navbar-header > a > img');

$I->moveMouseOver('#navbar > ul > li > a' );
$I->click('li.en > a');
$I->seeElement('body > div > nav > div > div.navbar-header > a > img');

// $I->click('li.ua > a'); 
// $I->seeElement('body > div > nav > div > div.navbar-header > a > img');

$I->moveMouseOver('#navbar > ul > li > a' );
$I->click('li.pl > a');
$I->seeElement('body > div > nav > div > div.navbar-header > a > img');

$I->moveMouseOver('#navbar > ul > li > a' );
$I->click('li.es');
$I->seeElement('body > div > nav > div > div.navbar-header > a > img');



