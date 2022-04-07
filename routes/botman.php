<?php
//use App\Http\Controllers\BotManController;
//
//$botman = resolve('botman');
////
////$botman->hears('Hi(.*)|Hello(.*)', function ($bot) {
////    $bot->reply('Hello!');
////    $bot->reply('How are you?');
////    $bot->ask('What is your name?', function ($answer, $conversation) {
////        $value = $answer->getText();
////        $conversation->say('Nice to meet you, '.$value);
////    });
////});
//$botman->hears('survey', function ($bot) {
//    $bot->startConversation(new App\Conversations\ExampleConversation());
//});
////$botman->hears('conversation', function ($bot){
////    $bot->startConversation(new \App\Conversations\ButtonConversation());
////});
////$botman->hears('Start conversation', BotManController::class.'@startConversation');
////$botman->hears('(.*)Weather in {location}', function ($bot, $location) {
////    $url = 'http://api.weatherstack.com/current?access_key=ecdbeb300cc6bd5b4ff98fdce0db9545&query='.urlencode($location);
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The weather in '.$response->location->name.', '.$response->location->country.' is:');
////    $bot->reply('Wind Speed: ' .$response->current->wind_speed);
////    $bot->reply('Temperature: '.$response->current->temperature.' Celsius');
////    $bot->reply('Humidity: ' .$response->current->humidity.'%');
////    $bot->reply('Visibility: ' .$response->current->visibility.'miles');
////});
//
////$botman->hears('covid stats in {states}', function ($bot, $states){
////    $url = 'https://api.covidactnow.org/v2/states.json?apiKey=68cdfa66f88d40e69ab403e162145f27'.urlencode($states);
////    $response = json_decode(file_get_contents($url));
//////    $bot->reply('The states in '.$response->state);
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
//////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
//////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
//////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
//////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
//////    $bot->reply('Total Cases: ' .$response->actuals->cases);
//////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
////
////$botman->hears('covid stats in Nebraska', function ($bot) {
////    $url = 'https://api.covidactnow.org/v2/state/NE.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
////    $bot->reply('Total Cases: ' .$response->actuals->cases);
////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
////
////$botman->hears('covid stats in Alaska', function ($bot) {
////    $url = 'https://api.covidactnow.org/v2/state/AK.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
////    $bot->reply('Total Cases: ' .$response->actuals->cases);
////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
////
////$botman->hears('covid stats in Arizona', function ($bot) {
////    $url = 'https://api.covidactnow.org/v2/state/AZ.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
////    $bot->reply('Total Cases: ' .$response->actuals->cases);
////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
////
////$botman->hears('covid stats in Colorado', function ($bot) {
////    $url = 'https://api.covidactnow.org/v2/state/CO.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
////    $bot->reply('Total Cases: ' .$response->actuals->cases);
////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
////
////$botman->hears('covid stats in Florida', function ($bot) {
////    $url = 'https://api.covidactnow.org/v2/state/FL.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
////    $response = json_decode(file_get_contents($url));
////
////    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
////    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
////    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
////    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
////    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
////    $bot->reply('Total Cases: ' .$response->actuals->cases);
////    $bot->reply('Total Deaths: ' .$response->actuals->deaths);
////
////});
//
////$botman->fallback(function ($bot){
////   $message = $bot->getmessage();
////   $bot->reply('Sorry, I don\'t understand: "'.$message->getText().'"');
////   $bot->reply('My known commands are: ');
////   $bot->reply('Weather in {loaction}');
////   $bot->reply('covid stats in {state}');
////});

//use App\Http\Controllers\BotManController;
//use BotMan\BotMan\Messages\Attachments\Image;
//use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
//use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
//use BotMan\Drivers\Facebook\Extensions\Element;
//use BotMan\Drivers\Facebook\Extensions\ElementButton;
//use BotMan\Drivers\Facebook\Extensions\GenericTemplate;
//use BotMan\Drivers\Facebook\Extensions\ListTemplate;
//use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotMan;
use App\Conversations\QuizConversation;
use App\Http\Middleware\TypingMiddleware;
use App\Conversations\WelcomeConversations;
use App\Conversations\PrivacyConversation;
use App\Conversations\HighscoreConversation;
use App\Http\Middleware\PreventDoubleClicks;
//
//$botman = resolve('botman');
//
//$botman->hears('Hi', function ($bot) {
//    $bot->typesAndWaits(2);
//    $bot->reply('Hello!');
//});
//
//$botman->hears('Start conversation', BotManController::class . '@startConversation');
//$botman->hears('shafqat', function ($bot) {
//    $bot->reply('Hello! shafqat');
//});
//$botman->hears('bye', function ($bot) {
//    $bot->reply('good bye!');
//});
//
//$botman->hears('call me {name}', function ($bot, $name) {
//    $bot->reply('Your name is: ' . $name);
//});
//
//$botman->hears('.*nice.*', function ($bot) {
//    $bot->reply('Nice to meet you!');
//});
//$botman->fallback(function ($bot) {
//    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
//});
//
//$botman->hears('single response', function ($bot) {
//    $bot->reply("Tell me more!");
//});
//
//$botman->hears('multi response', function ($bot) {
//    $bot->reply("Tell me more!");
//    $bot->reply("And even more");
//});
//
//$botman->hears('My First Message', function ($bot) {
//    $bot->reply('Your First Response');
//});
//
//$botman->hears('foo', function ($bot) {
//    $bot->reply('Hello World');
//});
//
//$botman->hears('call me {name}', function ($bot, $name) {
//    $bot->reply('Your name is: '.$name);
//});
//
//$botman->hears('call me {name} the {adjective}', function ($bot, $name, $adjective) {
//    $bot->reply('Hello '.$name.'. You truly are '.$adjective);
//});
//
//$botman->hears('image attachment', function ($bot) {
//    // Create attachment
//    $attachment = new BotMan\BotMan\Messages\Attachments\Image('https://botman.io/img/logo.png');
//
//    // Build message object
//    $message = BotMan\BotMan\Messages\Outgoing\OutgoingMessage::create('This is my text')
//        ->withAttachment($attachment);
//
//    // Reply message object
//    $bot->reply($message);
//});
//
//$botman->hears('I want ([0-9]+)', function ($bot, $number) {
//    $bot->reply('You will get: '.$number);
//});
//$botman->hears('I want ([0-9]+) portions of (Cheese|Cake)', function ($bot, $amount, $dish) {
//    $bot->reply('You will get '.$amount.' portions of '.$dish.' served shortly.');
//});
//
//$botman->fallback(function($bot) {
//    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
//});


$botman = resolve('botman');

//$typingMiddleware = new TypingMiddleware();
//$botman->middleware->sending($typingMiddleware);

$botman->middleware->captured(new PreventDoubleClicks);

$botman->hears('Hi', function (BotMan $bot) {
    $bot->reply('Hello!');
});

$botman->hears('/start', function (BotMan $bot) {
    $bot->startConversation(new WelcomeConversations());
})->stopsConversation();

$botman->hears('start|/startQuiz', function (BotMan $bot) {
    $bot->startConversation(new QuizConversation());
})->stopsConversation();

$botman->hears('/highscore|highscore', function (BotMan $bot) {
    $bot->startConversation(new HighscoreConversation());
})->stopsConversation();

$botman->hears('/about|about', function (BotMan $bot) {
    $bot->reply('LaravelQuiz is a project by Christoph Rumpel. Find out more about it on https://christoph-rumpel.com');
})->stopsConversation();

$botman->hears('/deletedata|deletedata', function (BotMan $bot) {
    $bot->startConversation(new PrivacyConversation());
})->stopsConversation();