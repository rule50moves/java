<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Login');
$I->amOnPage('/signin');
$I->waitForText('Вход для участников проекта');
$I->fillField('input[id="user_email"]', 'rge@ya.ru');
$I->fillField('input[id="user_password"]', '1');
$I->click('input.submit');
$I->seeCurrentUrlEquals('/me');
$I->click('#statistic_block div.main-menu__item_best');
$I->waitForText('Лучшие мужчины');
$elms = $I->getElements('.superpremium-item__info');
$I->testTrue(count($elms) == 10, 'Переменная должна быть равна 10-ти');