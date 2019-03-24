<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on content for english version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));


$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.en > a');
$I->wait(1);

// TariffInfo
$I->click('#tariffInfoHeading > h4 > a');
$I->wait(1);
$I->see('Change the bundle');
$I->see('Change the bundle', Locator::find('a', ['class' => 'btn btn-primary btn-xs']));


// Link Buttons
$I->see('settings', Locator::find('a', ['href' => '/mysip/']));
$I->see('top up', Locator::find('a', ['href' => '/pay/']));
$I->see('order', Locator::find('a', ['href' => '/dirnum/']));
$I->see('settings', Locator::find('a', ['href' => '/mypbx/master/']));
$I->see('More News', Locator::find('a', ['href' => 'https://zadarma.com/en/info/news/']));
$I->see('View', Locator::find('a', ['href' => '/statistics/']));

// Buttons
$I->seeElement(Locator::find('button', ['class' => 'btn btn-default btn-sm']));

