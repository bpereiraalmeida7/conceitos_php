<?php 

    class Numeros{

        //Atributos:
        private $numero1;
        private $numero2;
        private $numero3;

        //Gets e Sets de cada atributo:
        public function getNumero1() {
            return $this->numero1;
        }
        
        public function setNumero1($numero1) {
            $this->numero1= $numero1;
        }
        
        
        public function getNumero2() {
            return $this->numero2;
        }
        
        public function setNumero2($numero2) {
            $this->numero2 = $numero2;
        }
        
        
        public function getNumero3() {
            return $this->numero3;
        }
        
        public function setNumero3($numero3) {
            $this->numero3 = $numero3;
        }

        //Método de multiplicação
        public function produto($numero1, $numero2, $numero3) 
        { 
            echo $numero1 * $numero2 * $numero3;
        } 

    }

    /* Exemplos de utilização:
    1- Instanciar o(s) objeto(s): */
    $total = new Numeros;
    $num1 = new Numeros;
    $num2 = new Numeros;
    $num3 = new Numeros;

    /* 2- Setar valores para os atributos, conforme exemplo abaixo é reutilizavel para os outros (utilizando apenas os sts correspondentes). */
    $num1->setNumero1(1);

    /* 4- Para buscar os valores que foram setados nas variáveis (seguindo mesmo exemplo para os outros atributos): */
    $num1->getNumero1();  

    /* 3- Chamar função de multiplicação pertencente a classe Números, através do objeto instanciado, passando os valores referentes aos atributos (valores dados para exemplo) */
    $numero->produto(1,2,3);


?>