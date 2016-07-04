<?php
// Routes

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');

$app->get('/about', App\Action\HomeAction::class)
  	->setName('about');
