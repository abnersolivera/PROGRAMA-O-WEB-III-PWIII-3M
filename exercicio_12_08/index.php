<?php
include("Livros.php");

echo "-----------------Cadastro Livros-------------------------------";
//4° três objeto
//1
$livros1 = new Livros();

echo "<br>";
echo "Codigo:  " .$livros1->_Codigo = 1;
echo "<br>";
echo "Titulo:  " .$livros1->_Titulo = "O poder do hábito";
echo "<br>";
echo "Descrição:  " .$livros1->_Descricao = "Charles Duhigg, repórter investigativo do New York Times, mostra que a chave para o sucesso é entender como os hábitos funcionam - e como podemos transformá-los.";
echo "<br>";
echo "Preço R$  " . $livros1->_Preco = 48.93;
echo "<br>";
echo "Desconto 10% R$  " . $livros1->Desconto();
echo "<br>";
echo "------------------------------------------------";

//2
$livros2 = new Livros();

echo "<br>";
echo "Codigo:  " .$livros2->_Codigo = 2;
echo "<br>";
echo "Titulo:  " .$livros2->_Titulo = "Mindset: A nova psicologia do sucesso";
echo "<br>";
echo "Descrição:  " .$livros2->_Descricao = "Carol S. Dweck, ph.D., professora de psicologia na Universidade Stanford e especialista internacional em sucesso e motivação, desenvolveu, ao longo de décadas de pesquisa, um conceito fundamental: a atitude mental com que encaramos a vida, que ela chama de “mindset”, é crucial para o sucesso. Dweck revela de forma brilhante como o sucesso pode ser alcançado pela maneira como lidamos com nossos objetivos. O mindset não é um mero traço de personalidade, é a explicação de por que somos otimistas ou pessimistas, bem-sucedidos ou não. Ele define nossa relação com o trabalho e com as pessoas e a maneira como educamos nossos filhos. É um fator decisivo para que todo o nosso potencial seja explorado.";
echo "<br>";
echo "Preço R$  " . $livros2->_Preco = 29.90;
echo "<br>";
echo "Desconto 10% R$  " . $livros2->Desconto();
echo "<br>";
echo "------------------------------------------------";

//3
$livros3 = new Livros();

echo "<br>";
echo "Codigo:  " .$livros3->_Codigo = 3;
echo "<br>";
echo "Titulo:  " .$livros3->_Titulo = "Método Financeiro Do Primo Rico";
echo "<br>";
echo "Descrição:  " .$livros3->_Descricao = "Com o Método Financeiro do Primo Rico, você conseguirá gerenciar seu tempo, estabelecer metas ao longo do ano, enriquecer e organizar suas finanças.Ele é baseado na metodologia ARCA, criada pelo Primo. Com ela, você aprenderá a distribuir todos os seus investimentos e a manter um balanço inteligente ao longo do tempo.Aqui, Thiago Nigro reúne toda a bagagem que adquiriu ao longo dos erros e acertos de sua carreira para ensinar o caminho do sucesso a quem deseja chegar lá, com dicas de como gerenciar seus ganhos, gastos, aportes e dividendos.Organizando sua rotina e seguindo o Método do Primo Rico, você poderá alcançar a liberdade financeira. Não será um caminho fácil, mas vai valer a pena. Está pronto para esta maratona?";
echo "<br>";
echo "Preço R$  " . $livros3->_Preco = 29.99;
echo "<br>";
echo "Desconto 10% R$  " . $livros3->Desconto();
echo "<br>";
echo "------------------------------------------------";

//4
$livros4 = new Livros();

echo "<br>";
echo "Codigo:  " .$livros4->_Codigo = 4;
echo "<br>";
echo "Titulo:  " .$livros4->_Titulo = "O homem mais rico da Babilônia";
echo "<br>";
echo "Descrição:  " .$livros4->_Descricao = "Com mais de dois milhões de exemplares vendidos no mundo todo, O homem mais rico da Babilônia é um clássico sobre como multiplicar riqueza e solucionar problemas financeiros. Baseando-se nos segredos de sucesso dos antigos babilônicos ― os habitantes da cidade mais rica e próspera de seu tempo ―, George S. Clason mostra soluções ao mesmo tempo sábias e muito atuais para evitar a falta de dinheiro, como não desperdiçar recursos durante tempos de opulência, buscar conhecimento e informação em vez de apenas lucro, assegurar uma renda para o futuro, manter a pontualidade no pagamento de dívidas e, sobretudo, cultivar as próprias aptidões, tornando-se cada vez mais habilidoso e consciente.";
echo "<br>";
echo "Preço R$  " . $livros4->_Preco = 22.50;
echo "<br>";
echo "Desconto 10% R$  " . $livros4->Desconto();
echo "<br>";
echo "------------------------------------------------";