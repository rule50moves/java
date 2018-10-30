<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Upload');
$I->amOnPage('/signin');
$I->waitForText('Вход для участников проекта');
$I->fillField('input[id="user_email"]', 'iv4.iv4n0ff@yandex.ru');
$I->fillField('input[id="user_password"]', '1');
$I->click('input.submit');
$I->click('div.avatar-block i.g-icn');
$I->click('div#left a.button');
$I->waitForElementVisible('div#popup', 5);
$I->switchToIframe("uploadIframe");
sleep(3);
$I->attachFile('input[type="file"]', 'teamo.png'); //C:\Devel\teamo\tests\_data
sleep(5);
$I->waitForText('Загружено 1 фото');
$I->click('#readyAndCloseBtn');
$I->seeElement('ul.thumbnails li:first-child img');
$I->click('ul.thumbnails li:first-child img');
$I->waitForElement('div.photos-list-delete', 5);
$I->click('div.photos-list-delete');
$I->click('.is-active .photos-list-delete-confirm');
$I->waitForElement('.photos-list-current-message-outer .photos-list-current-message', 5);