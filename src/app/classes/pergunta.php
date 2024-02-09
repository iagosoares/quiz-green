<?php

namespace dev\classes;

class Pergunta{
    public string $pergunta;
    public array $respostas;
    public int $alternativaCorreta;

    public function __construct(string $pergunta, array $respostas, int $alternativaCorreta) {

        $arrayAux = [];        
        
        $this->pergunta = trim($pergunta);

    

    foreach($respostas as $item){
        if($item !== "")
        array_push($arrayAux, trim($item));
    }
    $this->respostas = $arrayAux;
    $this->alternativaCorreta = $alternativaCorreta;
    
    }

    private function validationRespostas():bool{

        $respostas = $this->respostas;

        if(count($respostas) > 1)
        return true;

        else return false;
    }

    private function validationPergunta():bool{
        $pergunta = $this->pergunta;    

        if(strlen($pergunta) <= 10){
            return false;
            
        }else
            return true;
        
    }

    private function validationAlternativaCorreta():bool{
        $alternativa = $this->alternativaCorreta;
        $arrayRespostas = $this->respostas;

        if(!isset($arrayRespostas[$alternativa])){
            return false;
        }

        return true;
    }

    public function perguntaValida():bool{

        if($this->validationRespostas() && $this->validationPergunta() && $this->validationAlternativaCorreta())
        return true;

        return false;       

    }

}

