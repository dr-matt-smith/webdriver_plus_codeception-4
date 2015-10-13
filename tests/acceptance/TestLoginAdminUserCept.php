<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('sign in as ADMIN user');
$I->amOnPage('/login.php');
$I->fillField('username', 'admin');
$I->fillField('password', 'admin');
$I->click('login');
$I->see('hello admin user');