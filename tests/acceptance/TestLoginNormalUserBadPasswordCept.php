<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('sign in as NORMAL user - failure');
$I->amOnPage('/login.php');
$I->fillField('username', 'user');
$I->fillField('password', 'bad_password');
$I->click('login');
$I->see('try again');
