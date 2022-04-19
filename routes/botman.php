<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hello', function($bot) {
    $bot->startConversation(new \App\Http\Conversations\SelectSomethingConversation());
});
$botman->hears('Appointment', function ($bot){
    $bot->startConversation(new \App\Http\Conversations\OnboardingConversation());
});