<?php
//Função ; 
function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacao){
    
    $camposValidos = true; 

    // Validação do Nome;
        $nome = trim($nome);
        if(empty($nome)){
           echo "Por favor,preencha o campo nome <br/>";
           $camposValidos = false;
        }
        
       
    //Fim da validação;
    
    //Validação do CPF
    
     if(empty($cpf)){
           echo "Por favor,preencha o CPF <br/>";
           $camposValidos = false;
     }
        else if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/",$cpf)){
            echo"Formato inválido  para o campo CPF <br/>";
            $camposValidos = false;
    }
    //CPF
    
    //Validação da Data de nascimento;
        $nascimento = trim($nascimento);
        if(empty($nascimento)){
           echo"O campo 'Data de nascimento' está vazio! <br/>";
           $camposValidos = false;
        }
        
        else if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
            echo "Formato inválido de data nascimento. Utilize o formato dd/mm/aaaa";
            $camposValidos = false;               
        }
        else{
            $pedacos = explode('/', $nascimento);
            $dia = $pedacos[0];
            $mes = $pedacos[1];
            $ano = $pedacos[2];
            
            if(!checkdate($mes, $dia, $ano)){
                    echo "Data inválida<br/>";
                    $camposValidos = false;                           
            }    
            
            $dataYmd = $ano.$mes.$dia;
            $dataAtual = date('Ymd');
            
            if($dataAtual < $dataYmd){
                echo "Data Nascimento inválida, está no futuro<br/>" ;
                $camposValidos = false;
            }
        }
        //Fim da validação;
        
        //Validação do Sexo;
        if (empty($sexo)){
            echo "Por favor,marque o campo sexo <br/>";
            $camposValidos = false;
        }
        //Fim da validação;
        
        //Validação do estado;
        
         if ($estado == -1){
            echo "Por favor,preencha o campo estado <br/>";
            $camposValidos = false;
        }
        //Fim da validação;
        
        //Validação do Telefone;
         $telefone = trim($telefone);
         
         if(empty(trim($telefone)) or (!preg_match("/^(\d{3}\s)?\d{4}\\-\d{4}$/", $telefone))){
            echo "por favor digite o Telefone correto<br>";
            $camposValidos = false;
        }
        
        //Fim da validação;
        
        //Validação do observacão
        
        $observacao = trim($observacao);
         if(empty($observacao)){
           echo "Por favor,preencha a observação <br/>";
           $camposValidos = false;
        }
        
         else if(!preg_match( "/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/",$observacao)){
            echo"somente letras, letras acentuadas, espaço, pontos e vírgulas!";
            $camposValidos = false;
        }
        //Fim da validação;

        return $camposValidos;
    }
    
?>
