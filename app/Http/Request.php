<?php

namespace App\Http;

class Request{

    //Método HTTP da requisição
    private $httpMethod;

    //URI da página
    private $uri;

    //Parametros da URL ($_GET)
    private $queryParams = [];

    //Variáveis recebidas no POST da página ($_POST)
    private $postVars = [];

    //Cabeçalho da requisição
    private $headers = [];

    //Construtor da classe
    public function __construct(){
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    //Método responsável por retornar o método HTTP da requisição
    public function getHttpMethod(){
        return $this->httpMethod;
    }

    //Método responsável por retorna a URI da requisição
    public function getUri(){
        return $this->uri;
    }

    //Método responsável por retornar os headers da requisição
    public function getHeaders(){
        return $this->headers;
    }

    //Método responsável por retornar os parâmetros da URL da requisição
    public function getQueryParams(){
        return $this->queryParams;
    }

    //Método responsável por retornar as variáveis POST da requisição
    public function getPostVars(){
        return $this->postVars;
    }

}


?>