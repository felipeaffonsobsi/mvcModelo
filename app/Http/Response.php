<?php

namespace App\Http;

class Response{

    //Código do status HTTP
    private $httpCode = 200;

    //cabecalho do Response
    private $headers = [];

    //tipo de conteúdo que está sendo retornado
    private $contentType = 'text/html';

    //variável pra guardar conteúdo do response
    private $content;

    //método responsável por iniciar a classe e definir os valores
    public function __construct($httpCode, $content, $contentType = 'text/html'){
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    //Método responsável por alterar o content type do response
    public function setContentType($contentType){
        $this->contentType= $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    //Método responsável por adicionar um registro no cabeçalho de response
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

}

?>