<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);
$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.ua > a');
$I->wait(3);

$I->click('body > footer > div > div > div.col-md-4.col-xs-12 > a.btn.btn-success.chat.btn-xs');
$I->wait(3);
$I->switchToWindow('chat');
$I->wait(3);
$I->see('Онлайн чат');
$I->closeTab();