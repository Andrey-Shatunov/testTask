<?php 
use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('Check key elements on header.');

$I->amOnUrl('https://my.zadarma.com');
$I -> amOnPage (' / ');
$I-> setMyCookie($I, $I->getConfiguration('PHPSESSID'));

$I -> amOnPage ('/');
$I->wait(1);

// Links 
// Links Services
$I->seeElement(Locator::find('li', ['id' => 'connect_top_mx']));

$I->moveMouseOver('#connect_top_mx > a');

$I->see('Услуги', Locator::find('a', ['href' => '/connect/'])); 
$I->see('Звонить с сайта', Locator::find('a', ['href' => '/connect/']));
$I->see('SMS', Locator::find('a', ['href' => '/connect/sms/']));
$I->see('Обратный звонок', Locator::find('a', ['href' => '/callback/']));
$I->see('Подключить номер', Locator::find('a', ['href' => '/dirnum/']));
$I->see('Актуализация контактов', Locator::find('a', ['href' => '/number_lookup/']));
$I->see('Коллтрекинг', Locator::find('a', ['href' => '/calltracker/']));

// Setings
$I->seeElement(Locator::find('li', ['id' => 'mysip_top_mx']));

$I->moveMouseOver('#mysip_top_mx > a');

$I->see('Настройки', Locator::find('a', ['href' => '/mysip/']));
$I->see('Подключение по SIP', Locator::find('a', ['href' => '/mysip/']));
$I->see('Мой профайл', Locator::find('a', ['href' => '/profile/']));
$I->see('Виртуальные номера', Locator::find('a', ['href' => '/dirnum/active/']));
$I->see('Виджет обратного звонка', Locator::find('a', ['href' => '/callback/widget/']));
$I->see('Кнопка "Позвонить нам"', Locator::find('a', ['href' => '/callmebutton/']));
$I->see('API и интеграции', Locator::find('a', ['href' => '/api/']));

// Pay
$I->seeElement(Locator::find('li', ['id' => 'pay_top_mx']));

$I->moveMouseOver('#pay_top_mx > a');

$I->see('Мой счет', Locator::find('a', ['href' => '/pay/']));
$I->see('Пополнить счет', Locator::find('a', ['href' => '/pay/']));
$I->see('Статистика звонков', Locator::find('a', ['href' => '/statistics/']));
$I->see('Статистика пополнений', Locator::find('a', ['href' => '/statistics/topup/']));
$I->see('Тарифы', Locator::find('a', ['href' => '/price/']));
$I->see('Приведи друга', Locator::find('a', ['href' => '/invitefriends/']));


// My ATC
$I->seeElement(Locator::find('li', ['id' => 'mypbx_top_mx']));

$I->moveMouseOver('#mypbx_top_mx > a');

$I->see('Моя АТС', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Внутренние номера', Locator::find('a', ['href' => '/mypbx/']));
$I->see('Внешние линии', Locator::find('a', ['href' => '/mypbx/ext_lines/']));
$I->see('Входящие звонки и голосовое меню', Locator::find('a', ['href' => '/mypbx/in_calls/']));
$I->see('Исходящие звонки', Locator::find('a', ['href' => '/mypbx/out_calls/']));
$I->see('Статистика АТС', Locator::find('a', ['href' => '/mypbx/stat/']));
$I->see('Графики АТС', Locator::find('a', ['href' => '/mypbx/stat/chart/']));
$I->see('Конференция', Locator::find('a', ['href' => '/mypbx/conference/']));

// Help
$I->seeElement(Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));

$I->moveMouseOver('#navbar > ul.nav.navbar-nav.navbar-left > li:nth-child(5) > a');

$I->see('Помощь', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/']));
$I->see('Программы для звонков', Locator::find('a', ['href' => '/downloads/']));
$I->see('Инструкции по настройке услуг', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#zadarma']));
$I->see('Инструкции по настройке оборудования', Locator::find('a', ['href' => 'https://zadarma.com/support/instructions/#equipment']));
$I->see('Ответы на вопросы', Locator::find('a', ['href' => 'https://zadarma.com/support/faq/']));
$I->see('Написать в поддержку', Locator::find('a', ['href' => '/tickets/']));
$I->see('Онлайн чат', Locator::find('a', ['href' => 'https://zadarma.com/']));
$I->see('На главный сайт', Locator::find('a', ['href' => 'https://zadarma.com/']));

// Money and Name
$I->seeElement(Locator::find('a', ['class' => 'balance']));
$I->seeElement(Locator::find('a', ['class' => 'profile-link']));
$I->seeElement(Locator::find('a', ['class' => 'dropdown-toggle curr_lang ru']));

