<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));


$I -> amOnPage ('/');
$I->wait(1);



// TariffInfo
$I->click('#tariffInfoHeading > h4 > a');
$I->wait(3);
$I->see('Изменить тарифный пакет');
$I->see('Изменить тарифный пакет', Locator::find('a', ['class' => 'btn btn-primary btn-xs']));


// Link Buttons
$I->see('настроить', Locator::find('a', ['href' => '/mysip/']));
$I->see('пополнить', Locator::find('a', ['href' => '/pay/']));
$I->see('подключить', Locator::find('a', ['href' => '/dirnum/']));
$I->see('настроить', Locator::find('a', ['href' => '/mypbx/master/']));
$I->see('все новости', Locator::find('a', ['href' => 'https://zadarma.com/ru/info/news/']));
$I->see('посмотреть', Locator::find('a', ['href' => '/statistics/']));

// Buttons
$I->seeElement(Locator::find('button', ['class' => 'btn btn-default btn-sm']));




