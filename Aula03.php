<?php
// Definindo a classe Imoveis
Class Imoveis{
    
    // O construtor inicializa os valores dos atributos da classe
    public function __construct($arg01, $arg02, $arg03, $arg04, $arg05){
        // Atribuindo os valores passados para as propriedades da classe
        $this->tipoImovel = $arg01;     // Tipo do imóvel (exemplo: Comercial, Residencial)
        $this->valor = $arg02;           // Valor do imóvel (exemplo: 1012784.84)
        $this->regiao = $arg03;          // Região onde o imóvel está localizado
        $this->metragem = $arg04;        // Metragem do imóvel (exemplo: 80m²)
        $this->descricao = $arg05;       // Descrição do imóvel (exemplo: "Espaço bem localizado em av...")
    }

    // Propriedades privadas e protegidas da classe
    private string $tipoImovel;        // Tipo do imóvel (privado) - Não pode ser acessado diretamente fora da classe
    protected float $valor;            // Valor do imóvel (protegido) - Pode ser acessado nas classes filhas
    public string $regiao;             // Região do imóvel (público) - Pode ser acessado diretamente
    protected string $metragem;        // Metragem do imóvel (protegido) - Pode ser acessado nas classes filhas
    private string $descricao;         // Descrição do imóvel (privado) - Não pode ser acessado diretamente fora da classe

    // FUNÇÕES MAGICAS

    // Método mágico para definir valores de propriedades (acessar propriedades privadas)
    function __set($name, $value){
        // Permite atribuir valores a propriedades privadas ou protegidas
        // Esse método é chamado quando tentamos atribuir um valor a uma propriedade privada/protegida
        $this->$name = $value; // O valor é atribuído à propriedade especificada
    }

    // Método mágico para obter valores de propriedades (acessar propriedades privadas)
    function __get($name){
        // Permite acessar valores de propriedades privadas ou protegidas
        // Esse método é chamado quando tentamos acessar uma propriedade privada/protegida
        return $this->$name; // Retorna o valor da propriedade solicitada
    }
}

// Definindo a classe rural, que herda de Imoveis
class rural extends Imoveis{
    
    // O construtor da classe rural está vazio, mas se necessário pode ser modificado
    function __construct(){
        // Se necessário, aqui poderia chamar o construtor da classe Imoveis (parent::__construct()) para inicializar propriedades
    }
}

echo "\n-------------------\n";  // Exibe uma linha separadora para melhor visualização na tela

// Criando um objeto do tipo 'rural', que herda os atributos da classe Imoveis
$Imovel02 = new rural();  // A classe rural não tem atributos sendo passados aqui, então é criado um objeto vazio

// Utilizando o método mágico '__set' para atribuir um valor a uma propriedade privada
$Imovel02->tipoImovel = "ABC";  // A propriedade 'tipoImovel' é privada, então o método __set é chamado aqui

// Agora você pode acessar a propriedade utilizando o método mágico '__get'
echo $Imovel02->tipoImovel;  // Aqui, o método __get é chamado para obter o valor da propriedade 'tipoImovel'

// Criando um objeto do tipo 'Imoveis', passando valores para o construtor
$Imovel01 = new Imoveis("Comercial", 1012784.84, "Nona Oeste", "80m²", "Espaço bem localizado em av...");

// Exibindo informações do imóvel $Imovel01
echo "\n-------------------\n";  // Exibe uma linha separadora para melhor visualização na tela

// A propriedade 'tipoImovel' é privada, mas o método mágico __get permite acessar seu valor
echo $Imovel01->tipoImovel . "\n";  // Exibe o tipo de imóvel (Comercial), usando o método mágico __get

// A propriedade 'valor' é protegida, mas o método __get ainda permite acessar
echo $Imovel01->valor . "\n";       // Exibe o valor do imóvel (1012784.84), usando o método mágico __get

// Exibe a região do imóvel (região é pública, então pode ser acessada diretamente)
echo $Imovel01->regiao . "\n";      // Exibe a região do imóvel (Nona Oeste), acessada diretamente (público)

echo $Imovel01->metragem . "\n";    // Exibe a metragem do imóvel (80m²), usando o método mágico __get (metragem é protegida)

echo $Imovel01->descricao . "\n";   // Exibe a descrição do imóvel ("Espaço bem localizado em av..."), usando o método mágico __get (descricao é privada)
