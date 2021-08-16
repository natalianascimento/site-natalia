<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Sobre - Natália Nascimento</title>
</head>
<body>
    <header>
        <?php require_once('header.html'); ?>
    </header>

    <div class="fundo-colorido">
        <p>Um pouco sobre </p>
            <img src="img/logo-primeiro-nome.png">
            <span class="aumentar-emoji">&#11167;</span>
    </div>

    <main>

        <div class="bloco1">
            <img src="img/foto-natalia.png" class="foto-natalia">
            <div class="texto">
                <p class="texto-destaque-laranja">Oi, tudo bem?</p>
                <p>Prazer, eu sou Natália. </p>
                <p >Me considero uma Maker (se você não sabe o que isso é, vou te enconomizar os cliques - confira <a href="https://makezine.com/">esse site</a> que você vai entender).</p>
                <p> Sou curiosa, criativa e apaixonada pelo processo de criação das coisas. </p>
            </div>
        </div>

        <div class="limpar-float"></div>

        <div class="bloco2">
            <p class="texto-destaque-branco">As experiências mais relevantes e instigantes na minha vida profissional, acontecem quando tenho a reunião de quatro elementos: pesquisa, planejamento, trabalho em equipe e desafios.</p>
        </div>

        <div class="limpar-float"></div>
        
        <div class="bloco3">   
            <div class="texto">
                <p class="texto-apresentacao"> Por ter o mercado da moda sempre por perto desenvolvi algumas habilidades de criação e contrução nesta área, como costurar, fazer bolsas e joias, tingir tecidos, entre outras coisas.</p>
                <p class="texto-apresentacao">Nos últimos meses abracei uma nova área que também despertou essa curiosidade Maker. O <span class="negrito">Desenvolvimento Web</span>.</p>
            </div>
            <img src="img/bolsa.png">
        </div>

        <div class="limpar-float"></div>
        <div class="bloco1">
            <img src="img/fonfon-janela.JPG" alt="Foto de uma gatinha branca">
            <div class="texto">
                <p class="texto-apresentacao">Desenvolvedora Web Junior, Tecnóloga em Gestão da Tecnologia da Informação e o mais importate sou a mãe da Fonfon (veja a foto e se apaixone, é inevitável<span class="emoji">&#128155;</span>).</p>
            </div>
        </div>

        <!-- <div class="fonfon">
            <img src="img/fonfon.jpg" alt="Foto da Gatinha mais fofa e feroz do mundo." class="foto-arredondada">
            <p>Fonfon: Supervisora oficial do Home Office</p>
        </div> -->
        <div class="limpar-float"></div>

        <div class="bloco3">
            <p class="texto-apresentacao">Atualmente estudo e trabalho com PHP<span class="emoji">&#128024;</span>, HTML, CSS e SQL (MySQl e SQL Developer - Oracle). Sou autodidata, então estudo com ajuda de livros, cursos online, podcasts, e toda a infinidade de opções que a internet nos proporciona.</p>

        </div>


        


        <!-- Inserção do SlideShow -->
       <?php //require_once("slideshow.html"); ?>
       
        <p class="texto-apresentacao">Também trabalho com o desenvolvimento de Dashboards<span class="emoji">&#128202;</span>, com Power Bi, onde diariamente aplico meus conhecimentos na linguagem DAX.</p>

        <p class="texto-apresentacao"><a href="projetos.php">Clicando aqui</a> você pode conferir meus projetos.</p>
            
 </main>

    <footer>
        <?php require_once("footer.html"); ?>
    </footer>
    
</body>
</html>