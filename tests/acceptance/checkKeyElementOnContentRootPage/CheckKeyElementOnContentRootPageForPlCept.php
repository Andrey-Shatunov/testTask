<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on content for polish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));


$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.pl > a');
$I->wait(1);

// TariffInfo
$I->click('#tariffInfoHeading > h4 > a');
$I->wait(1);
$I->see('Zmień pakiet');
$I->see('Zmień pakiet', Locator::find('a', ['class' => 'btn btn-primary btn-xs']));


// Link Buttons
$I->see('skonfiguruj', Locator::find('a', ['href' => '/mysip/']));
$I->see('doładuj', Locator::find('a', ['href' => '/pay/']));
$I->see('aktywuj', Locator::find('a', ['href' => '/dirnum/']));
$I->see('skonfiguruj', Locator::find('a', ['href' => '/mypbx/master/']));
$I->see('wszystkie', Locator::find('a', ['href' => 'https://zadarma.com/pl/info/news/']));
$I->see('Przejrzeć', Locator::find('a', ['href' => '/statistics/']));

// Buttons
$I->seeElement(Locator::find('button', ['class' => 'btn btn-default btn-sm']));

