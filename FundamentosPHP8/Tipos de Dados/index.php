/**
 * *O PHP 8 suporta 10 ipos de dados primitivos e + 2 tipos que foram introduzidos para facilitar a legibilidade docódigo
 * *Tipos Escalares: Boolean(bool),Integer(int),Float/Double(float),String(string)
 * *Tipos Compostos: Array(array),Object(object),Callable(callable),Iterable(iterable)
 * *Tipos Especiais: Resource(resource),Null(NULL)
 * *Tipos Pseudos: Mixed(mixed),Void(void)
 *
 * *Funções Internas:
 * *É possível obter o tipo de dado de uma variável por meio da função interna gettype().
 * *Também existem funções iniciadas com is_ seguida do nome do tipo de dado primitivo para verificar se o valor é do tipo testado.
 * *Por exemplo, para verificar se um valor é boleano use a função is_bool, ou se um valor é array is_array e assim por diante.
 *
 * *Funções Internas Adicionado no PHP 8.0:
 * *A função get_debug_type() traz mais informações para depuração do código, por exemplo em uma classe, a função gettype() informa que será do tipo object, já get_debug_type() exibirá o nome da classe a qual se refere.
 */

<?php

$sobrenome = "Santos";

$nome1 = "Glaucio Daniel $sobrenome";
$nome2 = 'Glaucio Daniel $sobrenome';

$idade = 50.2323232;

$vip = false;

$aereas = ["Gol", "Latam", "Azul"];

class Cliente {
    public function __construct(public string $nome){
        echo $this->nome;
    }
}

$joao = new Cliente("João Rangel");

$linhasAereas = function(): iterable {
    return ["Gol", "Latam", "Azul"];
};


function executar(mixed $parametro): void {
    
}

$nulo = NULL;

$arquivo = fopen("./variaveis.php", "a+");

/*
echo $nome1;
echo "<br/>";
echo $nome2;
*/
echo "<br/>";
echo gettype($arquivo);
echo "<br/>";
echo get_debug_type($arquivo);
echo "<br/>";
//var_dump(is_iterable($linhasAereas()));
//var_dump(is_callable($linhasAereas));


