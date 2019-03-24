<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check links on polish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->click('body > div > div > div:nth-child(5) > div:nth-child(1) > div > div > div.media-right > a');
$I->wait(1);
$I->see('Konfiguracja podłączenia z loginem SIP');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(1) > div > div > div.media-right > a');
$I->see('Znajdź kraj lub miasto');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(1) > div > div > div.media-right > a');
$I->switchToNextTab();
$I->see('Nowa najbardziej ekonomiczna aplikacja Zadarma');
$I->closeTab();

$I->wait(1);
// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(5) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Doładuj konto');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Ustawienia konfiguracji centrali telefonicznej');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Statystyki połączeń wychodzącyh');


