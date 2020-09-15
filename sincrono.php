<?php

require_once "vendor/autoload.php";

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client;

//IGPM
$urlBase = "https://www.sucessoimoveis.com";
$client = new Client(['base_uri' => $urlBase]);

$response = $client->get('/api/igpm', array(
       'query' => array(),
        'headers' => array(
            'Content-Type' => 'application/json'
        ),
        'body' => json_encode(array())
    ));

$igpm = json_decode($response->getBody());

echo "IGPM: ".$igpm->valor;
echo "<br/>";
//Fim IGPM

//CUB
$client = new Client(['base_uri' => $urlBase]);

$response = $client->get('/api/cub', array(
       'query' => array(),
        'headers' => array(
            'Content-Type' => 'application/json'
        ),
        'body' => json_encode(array())
    ));

$cub = json_decode($response->getBody());

echo "CUB: ".$cub->valor;
echo "<br/>";
//Fim CUB

//Previsão do tempo
$urlBase = "https://www.stopshop.com.br";
$client = new Client(['base_uri' => $urlBase]);

$response = $client->get('/api/horario', array(
       'query' => array(),
        'headers' => array(
            'User-Agent' => 'PostmanRuntime/7.26.5',
            'Content-Type' => '*/*',
            'Connection' => 'keep-alive',
            'Accept-Encoding' => 'gzip, deflate, br'
        )
    ));

$horario = json_decode($response->getBody());

echo "Horário de atendimento: ".$horario->horarioFuncionamentoNormal;
echo "<br/>";
//Fim Previsão do tempo


?>