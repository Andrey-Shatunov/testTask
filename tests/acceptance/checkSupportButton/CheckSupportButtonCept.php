<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I->click('body > footer > div > div > div.col-md-4.col-xs-12 > a.btn.btn-default.btn-xs');
$I->switchToNextTab();
$I->see('Напишите нам');
$I->closeTab();
$I->wait(1);

