<?php

$I = new WebGuy($scenario);
$I->wantTo('find facebook/php-webdriver on GitHub');
$I->amOnPage("/");
$I->click("github");
//$I->amOnPage('https://github.com/');
$I->submitForm('.js-site-search-form', array('q' => 'php-webdriver'));
$I->see('facebook/php-webdriver');
$I->click('facebook/php-webdriver');
$I->seeInTitle("php-webdriver");
$I->seeCurrentUrlEquals('/facebook/php-webdriver');
