<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check links on spanish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->click('body > div > div > div:nth-child(5) > div:nth-child(1) > div > div > div.media-right > a');
$I->wait(1);
$I->see('Configuraciones de conexión por SIP');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(1) > div > div > div.media-right > a');
$I->see('Buscar país o ciudad');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(1) > div > div > div.media-right > a');
$I->switchToNextTab();
$I->see('Nueva aplicación Zadarma para');
$I->closeTab();

$I->wait(1);
// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(5) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Recargar la cuenta');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Asistente de configuración de la centralita virtual');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Estadística de llamadas salientes');


