<?php

    //  DESIGN PATTERNS

    // Simple Factory - Factory
    // Preferem ter um método estático (próprio) em que se fabrica a classe
    class Cachorro{

            public function __construct(){
                echo '<p>Cachorro instanciado</p>';
            }

    }

    class Gatos{

        public function __construct(){
                echo '<p>Gato instanciado</p>';
        }

    }

    class Animal{

        public static function build($nomeclasse){
            if(class_exists($nomeclasse)){
                return new $nomeclasse;
            }else{
                die('Classe não existe.');
            }
        }

    }

    Animal::build('Cachorro');
    Animal::build('gatos');

    echo '<hr>';

    // Facade
    
    class Carrinho{
        public function fecharCarrinho(){
            echo '<p>Carrinho fechado</p>';
        }
    }
    class Frete{
        public function calcularFrete(){
            echo '<p>Calculando frete</p>';
        }
    }
    class Pedido{
        public function fecharPedido(){
            echo '<p>Pedido fechado</p>';
        }
    }

    class Loja{

        public function finalizarCompra(){
            $this->calcularFrete();
            $this->fecharCarrinho();
            $this->fecharPedido();
        }

        public function fecharPedido(){
            $pedido = new Pedido();
            $pedido->fecharPedido();
        }
        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }
        public function calcularFrete(){
            $frete = new Frete();
            $frete->calcularFrete();
        }

    }

    $loja = new Loja();
    $loja->finalizarCompra();


?>