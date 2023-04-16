## Cruz em PHP
Esse é um código em PHP que imprime uma cruz na tela. Ele pode ser executado em um servidor web que suporte PHP, como o Apache.

## Como executar
Para executar a solução, é necessário ter o PHP e um servidor web instalados no computador. Darei o exemplo usando o XAMPP, basta seguir os seguintes passos:

1. Clone este repositório em alguma pasta de seu computador.
2. Abra o painel de controle do XAMPP e inicie os servidores Apache e MySQL.
3. Coloque a pasta do repositório na pasta "htdocs" do XAMPP.
4. Abra o navegador e acesse a URL "http://localhost/nome-do-repositorio" (substitua "nome-do-repositorio" pelo nome da pasta do repositório dentro de "htdocs"). Isso vai executar o código.

## Como utilizar
1. Crie uma instância da classe Cruz para armazenar o objeto vazio da cruz passando o tamanho da matriz e a posição a qual a barra vertical da cruz ficará, respectivamente, em seu construtor. Os 2 valores devem ser ímpares.
2. Invoque a variável e execute o método desenhar() da classe para que o código seja executado.
3. No navegador, tendo acessado a URL dita anteriormente, será exibido a cruz. 

## Refatoração para orientação a objetos
A cruz é representada como uma classe Cruz, que possui as propriedades privadas $tamanho e $posicaoVertical. O método construtor __construct() é responsável por inicializar essas propriedades. O método new Cruz() é responsável por atribuir o objeto Cruz à variável desenho. O método desenhar() é responsável executar a função desenhar do objeto, resultando na impressão da cruz na tela, utilizando as propriedades $tamanho e $posicaoVertical.

## X em PHP
Esse é um código em PHP que imprime um X na tela. Ele pode ser executado em um servidor web que suporte PHP, como o Apache.

## Como executar
Para executar a solução, é necessário ter o PHP e um servidor web instalados no computador. Darei o exemplo usando o XAMPP, basta seguir os seguintes passos:

1. Clone este repositório em alguma pasta de seu computador.
2. Abra o painel de controle do XAMPP e inicie os servidores Apache e MySQL.
3. Coloque a pasta do repositório na pasta "htdocs" do XAMPP.
4. Abra o navegador e acesse a URL "http://localhost/nome-do-repositorio" (substitua "nome-do-repositorio" pelo nome da pasta do repositório dentro de "htdocs"). Isso vai executar o código.

## Refatoração para orientação a objetos
A cruz é representada como uma classe X, que possui a propriedade privada $tamanho. O método construtor __construct() é responsável por inicializar essas propriedades, enviando passando para o objeto os valores declarados na inicialização do objeto. O método new X() é responsável por atribuir o objeto X à variável desenho. O método desenhar() é responsável executar a função desenhar do objeto, resultando na impressão do X na tela, utilizando a propriedade $tamanho.