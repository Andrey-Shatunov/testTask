<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header for spanish version.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-right > li.langs.dropdown > a' );
$I->click('li.es > a');
$I->wait(3);

// Links 
// Links Services
$I->seeElement(Locator::find('li', ['id' => 'connect_top_mx']));

$I->moveMouseOver('#connect_top_mx > a');

$I->see('Servicios', Locator::find('a', ['href' => '/connect/'])); 
$I->see('Teléfono web', Locator::find('a', ['href' => '/connect/']));
$I->see('SMS', Locator::find('a', ['href' => '/connect/sms/']));
$I->see('Retrollamada', Locator::find('a', ['href' => '/callback/']));
$I->see('Conectar número', Locator::find('a', ['href' => '/dirnum/']));
$I->see('Actualizar base de clientes', Locator::find('a', ['href' => '/number_lookup/']));
$I->see('Call Tracking', Locator::find('a', ['href' => '/calltracker/']));


// Setings
$I->seeElement(Locator::find('li', ['id' => 'mysip_top_mx']));

$I->moveMouseOver('#mysip_top_mx > a');

$I->see('Configuración', Locator::find('a', ['href' => '/mysip/']));
$I->see('Ajustes SIP', Locator::find('a', ['href' => '/mysip/']));
$I->see('Mi perfil', Locator::find('a', ['href' => '/profile/']));
$I->see('Números virtuales', Locator::find('a', ['href' => '/dirnum/active/']));
$I->see('Botón de llamada desde la web', Locator::find('a', ['href' => '/callback/widget/']));
$I->see('Botón Llámanos', Locator::find('a', ['href' => '/callmebutton/']));
$I->see('API e integración', Locator::find('a', ['href' => '/api/']));


// Pay
$I->seeElement(Locator::find('li', ['id' => 'pay_top_mx']));

$I->moveMouseOver('#pay_top_mx > a');

$I->see('Mi cuenta', Locator::find('a', ['href' => '/pay/']));

$I->see('Recargar cuenta', Locator::find('a', ['href' => '/pay/']));
$I->see('Estadística de llamadas', Locator::find('a', ['href' => '/statistics/']));
$I->see('Estadística de recargas', Locator::find('a', ['href' => '/statistics/topup/']));
$I->see('Tarifas', Locator::find('a', ['href' => '/price/']));
$I->see('Invita a un amigo', Locator::find('a', ['href' => '/invitefriends/']));


// My ATC
$I->seeElement(Locator::find('li', ['id' => 'mypbx_top_mx']));

$I->moveMouseOver('#mypbx_top_mx > a');

$I->see('Mi centralita', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Extensiones', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Líneas externas', Locator::find('a', ['href' => '/mypbx/ext_lines/']));
$I->see('Llamadas entrantes y menú de voz', Locator::find('a', ['href' => '/mypbx/in_calls/']));
$I->see('Llamadas salientes', Locator::find('a', ['href' => '/mypbx/out_calls/']));
$I->see('Estadística de la centralita', Locator::find('a', ['href' => '/mypbx/stat/']));
$I->see('Gráficos de la centralita', Locator::find('a', ['href' => '/mypbx/stat/chart/']));
$I->see('Conferencia', Locator::find('a', ['href' => '/mypbx/conference/']));


// Help
$I->seeElement(Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-left > li:nth-child(5) > a');

$I->see('Ayuda', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));
$I->see('Programas para llamadas', Locator::find('a', ['href' => '/downloads/']));
$I->see('Instrucciones de configuración de los servicios', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#zadarma']));
$I->see('Instrucciones de configuración del equipo', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#equipment']));
$I->see('Respuestas a las preguntas', Locator::find('a', ['href' => 'https://zadarma.com/support/faq/']));
$I->see('Soporte técnico', Locator::find('a', ['href' => '/tickets/']));
$I->see('Chat online', Locator::find('a', ['href' => 'https://zadarma.com/']));
$I->see('A la página web principal', Locator::find('a', ['href' => 'https://zadarma.com/']));

// Money and Name
$I->seeElement(Locator::find('a', ['class' => 'balance']));
$I->seeElement(Locator::find('a', ['class' => 'profile-link']));
$I->seeElement(Locator::find('a', ['class' => 'dropdown-toggle curr_lang ru']));
