<?php
require_once realpath(__DIR__ . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
define("APP_NAME", "bhargavraviya");
define("API_KEY", $_ENV['API_KEY']);

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

function getMovie($q)
{
    $key = API_KEY;
    try {
        $client = new Client();
        $request = new Request('GET', "http://www.omdbapi.com/?apikey={$key}&t={$q}");
        $res = $client->sendAsync($request)->wait();
        return json_decode($res->getBody());
    } catch (ClientException $e) {
        echo Psr7\Message::toString($e->getRequest());
        echo Psr7\Message::toString($e->getResponse());
    }
}
?>