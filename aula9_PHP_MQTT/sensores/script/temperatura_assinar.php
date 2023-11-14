<?php
//Carrega o arquivo autoload.php - classe MqttClient
require(__DIR__ . '/../vendor/autoload.php');

//Carrega o arquivo para salvar a mensagem no banco de dados
require(__DIR__ . '/../banco/sql.php');

//Adiciona a classe MqttClient ao script
use \PhpMqtt\Client\MqttClient;

//Conectando ao broker MQTT
$server   = 'localhost'; //host do broquer
$port     = 1883;
$clientId = "comsumo_id";

$mqtt = new MqttClient($server, $port, $clientId);
$mqtt->connect();
echo "Conexão realizada com sucesso: " . $server . ":" . $port . "\n";
echo "Aguardando mensagens...\n";

//Assinando o tópico
$qos = 0;
$topico = 'sensor/temperatura';
$mqtt->subscribe($topico, 
    function ($topic, $message) {
      echo "\n";
      echo "Mensagem recebida [" . $topic . "]: ";
      echo $message . "\n";

      //TODO - O que fazer com a mensagem?
    }, 
    $qos);

//Mantém a conexão com o broquer MQTT ativa
$mqtt->loop(true);