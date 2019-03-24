<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header.');

$I->amOnUrl('https://my.zadarma.com');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

// Footer
$I->see('Zadarma.com', Locator::href('https://zadarma.com')); 
$I->see('on-line чат', Locator::href('https://zadarma.com')); 
$I->see('Написать в поддержку', Locator::href('/tickets/')); 

