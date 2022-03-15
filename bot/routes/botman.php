<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi(.*)|Hello(.*)', function ($bot) {
    $bot->reply('Hello!');
    $bot->reply('How are you?');

});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('Weather in {location}', function ($bot, $location) {
    $url = 'http://api.weatherstack.com/current?access_key=48504cdfac70da48a1b3ed3b21d12c26&query='.urlencode($location);
    $response = json_decode(file_get_contents($url));

    $bot->reply('The weather in '.$response->location->name.', '.$response->location->country.' is:');
    $bot->reply('Wind Speed: ' .$response->current->wind_speed);
    $bot->reply('Temperature: '.$response->current->temperature.' Celsius');
    $bot->reply('Humidity: ' .$response->current->humidity.'%');
    $bot->reply('Visibility: ' .$response->current->visibility.'miles');

});

$botman->hears('Alabama', function ($bot){
    $url = 'https://api.covidactnow.org/v2/state/AL.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});

$botman->hears('Nebraska', function ($bot) {
    $url = 'https://api.covidactnow.org/v2/state/NE.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});

$botman->hears('Alaska', function ($bot) {
    $url = 'https://api.covidactnow.org/v2/state/AK.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});

$botman->hears('Arizona', function ($bot) {
    $url = 'https://api.covidactnow.org/v2/state/AZ.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});

$botman->hears('Colorado', function ($bot) {
    $url = 'https://api.covidactnow.org/v2/state/CO.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});

$botman->hears('Florida', function ($bot) {
    $url = 'https://api.covidactnow.org/v2/state/FL.json?apiKey=68cdfa66f88d40e69ab403e162145f27';
    $response = json_decode(file_get_contents($url));

    $bot->reply('The Positive Ratio: ' .$response->metrics->testPositivityRatio);
    $bot->reply('Case Density: ' .$response->metrics->caseDensity);
    $bot->reply('Infection Rate: ' .$response->metrics->infectionRate);
    $bot->reply('Vaccinations Initiated Ratio: ' .$response->metrics->vaccinationsInitiatedRatio);
    $bot->reply('Vaccinations Completed Ratio: ' .$response->metrics->vaccinationsCompletedRatio);
    $bot->reply('Total Cases: ' .$response->actuals->cases);
    $bot->reply('Total Deaths: ' .$response->actuals->deaths);

});
