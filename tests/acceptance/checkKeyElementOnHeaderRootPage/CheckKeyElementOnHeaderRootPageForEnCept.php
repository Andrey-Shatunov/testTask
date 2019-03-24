<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header for english version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.en > a');
$I->wait(3);

// Links 
// Links Services
$I->seeElement(Locator::find('li', ['id' => 'connect_top_mx']));

$I->moveMouseOver('#connect_top_mx > a');

$I->see('Services', Locator::find('a', ['href' => '/connect/'])); 
$I->see('Webphone', Locator::find('a', ['href' => '/connect/']));
$I->see('SMS', Locator::find('a', ['href' => '/connect/sms/']));
$I->see('Callback', Locator::find('a', ['href' => '/callback/']));
$I->see('Order a Virtual Number', Locator::find('a', ['href' => '/dirnum/']));
$I->see('User database check', Locator::find('a', ['href' => '/number_lookup/']));
$I->see('Call tracking', Locator::find('a', ['href' => '/calltracker/']));

// Setings
$I->seeElement(Locator::find('li', ['id' => 'mysip_top_mx']));

$I->moveMouseOver('#mysip_top_mx > a');

$I->see('Settings', Locator::find('a', ['href' => '/mysip/']));
$I->see('SIP Connection', Locator::find('a', ['href' => '/mysip/']));
$I->see('My profile', Locator::find('a', ['href' => '/profile/']));
$I->see('Virtual Phone Numbers', Locator::find('a', ['href' => '/dirnum/active/']));
$I->see('Callback button', Locator::find('a', ['href' => '/callback/widget/']));
$I->see('Click to call button', Locator::find('a', ['href' => '/callmebutton/']));
$I->see('API and integrations', Locator::find('a', ['href' => '/api/']));

// Pay
$I->seeElement(Locator::find('li', ['id' => 'pay_top_mx']));

$I->moveMouseOver('#pay_top_mx > a');

$I->see('My Account', Locator::find('a', ['href' => '/pay/']));
$I->see('Top-up', Locator::find('a', ['href' => '/pay/']));
$I->see('Statistics', Locator::find('a', ['href' => '/statistics/']));
$I->see('Topup statistics', Locator::find('a', ['href' => '/statistics/topup/']));
$I->see('Price Plans', Locator::find('a', ['href' => '/price/']));
$I->see('Refer a friend', Locator::find('a', ['href' => '/invitefriends/']));

// My ATC
$I->seeElement(Locator::find('li', ['id' => 'mypbx_top_mx']));

$I->moveMouseOver('#mypbx_top_mx > a');

$I->see('My PBX', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Extension numbers', Locator::find('a', ['href' => '/mypbx/']));
$I->see('External lines', Locator::find('a', ['href' => '/mypbx/ext_lines/']));
$I->see('Incoming calls and IVR', Locator::find('a', ['href' => '/mypbx/in_calls/']));
$I->see('Outgoing Calls', Locator::find('a', ['href' => '/mypbx/out_calls/']));
$I->see('PBX Statistics', Locator::find('a', ['href' => '/mypbx/stat/']));
$I->see('Charts PBX', Locator::find('a', ['href' => '/mypbx/stat/chart/']));
$I->see('Conference', Locator::find('a', ['href' => '/mypbx/conference/']));

// Help
$I->seeElement(Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-left > li:nth-child(5) > a');

$I->see('Help', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));
$I->see('Programs for calls', Locator::find('a', ['href' => '/downloads/']));
$I->see('Services setup instructions', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#zadarma']));
$I->see('Equipment setup instructions', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#equipment']));
$I->see('FAQ', Locator::find('a', ['href' => 'https://zadarma.com/support/faq/']));
$I->see('Support', Locator::find('a', ['href' => '/tickets/']));
$I->see('Online chat', Locator::find('a', ['href' => 'https://zadarma.com/']));
$I->see('Zadarma Main Site', Locator::find('a', ['href' => 'https://zadarma.com/']));

// Money and Name
$I->seeElement(Locator::find('a', ['class' => 'balance']));
$I->seeElement(Locator::find('a', ['class' => 'profile-link']));
$I->seeElement(Locator::find('a', ['class' => 'dropdown-toggle curr_lang ru']));
