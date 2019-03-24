<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on content for spanish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));


$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.es > a');
$I->wait(1);

// TariffInfo
$I->click('#tariffInfoHeading > h4 > a');
$I->wait(1);
$I->see('Cambiar el paquete de tarifas');
$I->see('Cambiar el paquete de tarifas', Locator::find('a', ['class' => 'btn btn-primary btn-xs']));


// Link Buttons
$I->see('Ajustes', Locator::find('a', ['href' => '/mysip/']));
$I->see('recargar', Locator::find('a', ['href' => '/pay/']));
$I->see('conectar', Locator::find('a', ['href' => '/dirnum/']));
$I->see('Ajustes', Locator::find('a', ['href' => '/mypbx/master/']));
$I->see('ver todas', Locator::find('a', ['href' => 'https://zadarma.com/es/info/news/']));
$I->see('Ver', Locator::find('a', ['href' => '/statistics/']));

// Buttons
$I->seeElement(Locator::find('button', ['class' => 'btn btn-default btn-sm']));

