<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$botman->hears('survey', function ($bot) {
    $bot->startConversation(new App\Conversations\ExampleConversation());
});
