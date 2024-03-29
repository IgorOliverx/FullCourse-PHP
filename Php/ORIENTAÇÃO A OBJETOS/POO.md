     ##ORIENTAÇÃO A OBJETOS 

Objeto ou instância é o nome dado para cada valor gerado através de uma classes, e os mesmos possuem atributos e métodos

Composição de objetos é uma prática avançada de POO que consiste em dividir o sistema em várias classes.
Pense em um carro. O mesmo é formado por um volante, um banco, rodas, vidros. Imagine que cada um destes itens
é uma classe. Juntando eu tenho uma composição de objetos para atingir minha solução.

     ##CLASSES 
 - As classes só estão prontas para serem usadas quando poderem criar objetos concretos.

CLASSES ABSTRATAS: Classes abstratas são como moldes para as classe que as herdarem. Pense no seguinte, eu tenho uma classe Animal abstrata e as classes Mamíferos e Aves que herdam a classe Animal. Quando eu usar a herança para dizer que Mamiferos e Aves sao classes filhas de animais, eu obrigatoriamente tenho que usar todos os parametros + seus metodos que forem definidos como também abstratos -> não pode instanciar objetos
MÉTODOS ABSTRATOS: A classe obrigatoriamente também precisa ser abstrata

Classes que ainda não estão prontas para serem instanciadas e precisam ser estendidas (classes abstratas);

CLASSES DE SERVIÇOS E CLASSES DE MODELO:
SERVIÇO: REPRESENTA UMA FUNCIONALIDADE;
MODELO: REPRESENTA ALGO REAL;

CONCEITOS POO:

## Abstração:
Abstração significa trazer coisas do mundo real para seu programa, focando sempre naquilo que realmente importa para ele.
EX: Criei uma classe chamada cachorro(já é uma abstração de algo real), e ao instanciar essa classe, quero que o meu programa só tenha os atributos que me interessem, ex:
$ragnar - new Cachorro(public string $raca,public string $genero,public int $idade );
$ragnar -> $raca = 'vira-lata';
$ragnar -> $genero = 'macho';
$ragnar -> $idade = 2;

Note, que: Um cachorro tem muito mais atributos, mas levando em conta o meu programa e o que quero, só estes são importantes;
Posso representar um ser-vivo, em forma de objeto;
Posso definir atributos e métodos para esse objeto;
Posso pegar somente o que interessa;


DEFINIÇÃO WIKIPÉDIA:

Em ciência da computação, a abstração é a habilidade de concentrar nos aspectos essenciais de um contexto, ignorando características menos importantes ou acidentais.
Em modelagem ou programação orientada a objetos, uma classe é uma abstração de entidades existentes no contexto de um software,
como exemplo, imaginamos a abstração referente a classe Animais, que se divide em várias sub-classes, como: Anfíbios, Répteis e Mamíferos,
que contém objetos de sub-classe como Ser-humano, Jacaré e outros.


## Encapsulamento:
ENCAPSULAMENTO: - proteção de dados e garantia de acesso/ modificadores getters and setters. Expor somente o que é necessário

atributos = private
metodos = public

PROBLEMA: AO DEFINIR OS ATRIBUTOS DE UMA CLASSE COMO PRIVATE E PROTEGÊ-LOS, EU
ENCONTRO DIFICULDADE EM ACESSA-LOS

MOdificadores de acesso, como usá-los sem abuso e com as melhores praticas de programação

Mas se eu defini como private e tenho que fazer essa penca de metodo, porque nao so definir
o atributo como public?
Porque dentro do metodo setter eu posso adicionar mais logica, verificações, condicionais, loops e etc
MASSSS, SE NAO EXISTIR COMPORTAMENTOS INDESEJADOS, DEFINA O ATRIBUTO COMO PUBLIC, MAS SAO RARAS
EXCEÇÕES

DEFINIÇÃO WIKIPEDIA:Encapsulamento consiste na separação de
aspectos internos e externos de um objeto.
Este mecanismo é utilizado amplamente para
impedir o acesso direto ao estado de um objeto
 (seus atributos), disponibilizando externamente os métodos que acessam (getters) e alteram (setters)
 estes estados. Exemplo: você não precisa conhecer os detalhes dos circuitos de um telefone para utilizá-lo. A carcaça do telefone encapsula esses detalhes, provendo a você uma interface mais amigável (os botões, o monofone e os sinais de tom).


## Herança:
Quando pensamos em herança, pensamos em herdar atributos e características de uma classe.
Ex: Eu posso criar uma classe chamada Animal.php com atributos e métodos característicos comuns de animais
e depois, posso criar a classe Cachorro.php e herdar atributos e métodos necessários da Classe animal,
já que um cachorro é um animal.
Uma das formas de reutilizar código é fazendo uma classe estender outra, ou seja, herdar tudo que uma classe base tem, e adicionar comportamentos específicos.
Mas vale ressaltar que herança não é a solução para todos os problemas de reutilização de código. Muitas vezes pode até ser prejudicial.


DEFINIÇÃO WIKIPEDIA:
Herança é um princípio de orientação a objetos, que permite que classes compartilhem atributos e
métodos, através de "heranças". Ela é usada na intenção de reaproveitar código ou comportamento
generalizado ou especializar operações ou atributos. O conceito de herança de várias classes é
conhecido como herança múltipla. Como exemplo pode-se observar as classes 'aluno' e 'professor',
onde ambas possuem atributos como nome, endereço e telefone. Nesse caso pode-se criar uma nova classe
chamada por exemplo, 'pessoa', que contenha as semelhanças entre as duas classes, fazendo com que
aluno e professor herdem as características de pessoa, desta maneira pode- se dizer que aluno e
professor são subclasses de pessoa. Também podemos dizer que uma classe pode ser abstrata(abstract)
ou seja ela não pode ter uma instância, ela apenas "empresta" seus atributos e metódos como molde
para novas classes.


