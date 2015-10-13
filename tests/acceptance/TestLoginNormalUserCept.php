<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('sign in as NORMAL user');
$I->amOnPage('/login.php');
$I->fillField('username', 'user');
$I->fillField('password', 'user');
$I->click('login');
$I->see('kitchen');

