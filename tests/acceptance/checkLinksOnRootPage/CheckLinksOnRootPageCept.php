<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check links.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));
$I -> amOnPage ('/');
$I->wait(1);

$I->click('body > div > div > div:nth-child(5) > div:nth-child(1) > div > div > div.media-right > a');
$I->wait(1);
$I->see('Настройки подключения по SIP');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(1) > div > div > div.media-right > a');
$I->see('Найти страну или город');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(1) > div > div > div.media-right > a');
$I->switchToNextTab();
$I->see('Новости проекта Zadarma');
$I->closeTab();

$I->wait(1);
// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(5) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Пополнить счет');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(6) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Мастер настройки АТС');

// $I -> amOnPage ('/');
$I -> moveBack();
$I->click('body > div > div > div:nth-child(7) > div:nth-child(2) > div > div > div.media-right > a');
$I->see('Статистика исходящих звонков');


