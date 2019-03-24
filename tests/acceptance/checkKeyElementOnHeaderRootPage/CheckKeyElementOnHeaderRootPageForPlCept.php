<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header for polish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.pl > a');
$I->wait(3);

// Links 
// Links Services
$I->seeElement(Locator::find('li', ['id' => 'connect_top_mx']));

$I->moveMouseOver('#connect_top_mx > a');

$I->see('Usługi', Locator::find('a', ['href' => '/connect/'])); 
$I->see('Zadzwoń ze strony', Locator::find('a', ['href' => '/connect/']));
$I->see('SMS', Locator::find('a', ['href' => '/connect/sms/']));
$I->see('Oddzwanianie', Locator::find('a', ['href' => '/callback/']));
$I->see('Podłącz numer', Locator::find('a', ['href' => '/dirnum/']));
$I->see('Aktualizacja bazy klientów', Locator::find('a', ['href' => '/number_lookup/']));
$I->see('Call tracking', Locator::find('a', ['href' => '/calltracker/']));

// Setings
$I->seeElement(Locator::find('li', ['id' => 'mysip_top_mx']));

$I->moveMouseOver('#mysip_top_mx > a');

$I->see('Ustawienia', Locator::find('a', ['href' => '/mysip/']));
$I->see('Konfiguracja konta SIP', Locator::find('a', ['href' => '/mysip/']));
$I->see('Mój profil', Locator::find('a', ['href' => '/profile/']));
$I->see('Numery wirtualne', Locator::find('a', ['href' => '/dirnum/active/']));
$I->see('Widget Callback na stronę', Locator::find('a', ['href' => '/callback/widget/']));
$I->see('rzycisk “Call me', Locator::find('a', ['href' => '/callmebutton/']));
$I->see('API i integracje', Locator::find('a', ['href' => '/api/']));

// Pay
$I->seeElement(Locator::find('li', ['id' => 'pay_top_mx']));

$I->moveMouseOver('#pay_top_mx > a');

$I->see('Moje konto', Locator::find('a', ['href' => '/pay/']));
$I->see('Doładuj konto', Locator::find('a', ['href' => '/pay/']));
$I->see('Statystyki połączeń', Locator::find('a', ['href' => '/statistics/']));
$I->see('Statystyki doładowań', Locator::find('a', ['href' => '/statistics/topup/']));
$I->see('Taryfy', Locator::find('a', ['href' => '/price/']));
$I->see('Zaproś znajomego', Locator::find('a', ['href' => '/invitefriends/']));

// My ATC
$I->seeElement(Locator::find('li', ['id' => 'mypbx_top_mx']));

$I->moveMouseOver('#mypbx_top_mx > a');

$I->see('Moja centrala', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Numery wewnętrzne', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Linie zewnętrzne', Locator::find('a', ['href' => '/mypbx/ext_lines/']));
$I->see('Połączenia przychodzące i menu głosowe', Locator::find('a', ['href' => '/mypbx/in_calls/']));
$I->see('Połączenia wychodzące', Locator::find('a', ['href' => '/mypbx/out_calls/']));
$I->see('Statystyki centrali telefonicznej', Locator::find('a', ['href' => '/mypbx/stat/']));
$I->see('Wykresy centrali telefonicznej', Locator::find('a', ['href' => '/mypbx/stat/chart/']));
$I->see('Konferencja', Locator::find('a', ['href' => '/mypbx/conference/']));

// Help
$I->seeElement(Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-left > li:nth-child(5) > a');

$I->see('Pomoc', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));
$I->see('Programy do dzwonienia', Locator::find('a', ['href' => '/downloads/']));
$I->see('nstrukcje konfiguracji usług', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#zadarma']));
$I->see('Instrukcje konfiguracji sprzętów', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#equipment']));
$I->see('Odpowiedzi na pytania', Locator::find('a', ['href' => 'https://zadarma.com/support/faq/']));
$I->see('Napisz do działu pomocy', Locator::find('a', ['href' => '/tickets/']));
$I->see('Online czat', Locator::find('a', ['href' => 'https://zadarma.com/']));
$I->see('Na stronę główną', Locator::find('a', ['href' => 'https://zadarma.com/']));

// Money and Name
$I->seeElement(Locator::find('a', ['class' => 'balance']));
$I->seeElement(Locator::find('a', ['class' => 'profile-link']));
$I->seeElement(Locator::find('a', ['class' => 'dropdown-toggle curr_lang ru']));
