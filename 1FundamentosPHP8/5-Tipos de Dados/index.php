<?php
/**
 * *O PHP 8 suporta 10 tipos de dados primitivos e + 2 tipos que foram introduzidos para facilitar a legibilidade do código

 * *Tipos Escalares: Boolean(bool),Integer(int),Float/Double(float),String(string)

 * *Tipos Compostos: Array(array),Object(object),Callable(callable),Iterable(iterable)

 * *Tipos Especiais: Resource(resource),Null(NULL)

 * *Tipos Pseudos: Mixed(mixed),Void(void)


 * *FUNÇÕES INTERNAS:

 * *É possível obter o tipo de dado de uma variável por meio da função interna gettype().

 * *Também existem funções iniciadas com is_ seguida do nome do tipo de dado primitivo para verificar se o valor é do tipo testado.

 * *Por exemplo, para verificar se um valor é boleano use a função is_bool, ou se um valor é array is_array e assim por diante.
 

 * *Funções Internas Adicionado no PHP 8.0:

 * *A função get_debug_type() traz mais informações para depuração do código, por exemplo em uma classe, a função gettype() informa que será do tipo object, já get_debug_type() exibirá o nome da classe a qual se refere.
 */

$sobrenome = "Santos";

$nome1 = "Glaucio Daniel $sobrenome"; //ganha o poder de entender as variaveis e mostrar o valor da variavel chamada
$nome2 = 'Glaucio Daniel $sobrenome'; //nao entende quando é passado uma var, apenas considera texto

$idade = 50.2323232;//float

$vip = false; //boolean 

$aereas = ["Gol", "Latam", "Azul"]; //array



class Cliente { // class . Podemos declarar o atributo direto pelo __construct (public string $nome)
    public function __construct(public string $nome){
        echo $this->nome;
    }
}
$joao = new Cliente("João Rangel"); //objeto , objeto tem os devidos atributos ja qualificados e ditos, no caso ja deixa claro que o nome é "João Rangel"



$linhasAereas = function(): iterable { // o iterable precisa ser um array ou objeto
    return ["Gol", "Latam", "Azul"];
};


function executar(mixed $parametro): void { //vazio . mixed = pode vir qualquer tipo de informacao da variavel $parametro,que sera o retorno desse função,nesse caso n tem pq é void(vazio)
    
}

$nulo = NULL; //valor nulo

$arquivo = fopen("./resource.php", "a+");//resource

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


