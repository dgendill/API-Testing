<?php
$data = array('testkey' => 'testvalue');
$dataJson = json_encode($data);

$I = new ApiGuy($scenario);
$I->wantTo('create a new user');
$I->haveHttpHeader('content-type','application/json');
$I->sendPost('/', json_encode($data));
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains($dataJson);
