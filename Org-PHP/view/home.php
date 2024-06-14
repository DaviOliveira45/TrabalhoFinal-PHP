<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | GamerShop</title>

    <link rel="stylesheet" href="../view/css/styleindex.css"/>
    <link rel="stylesheet" href="../view/css/style.css"/>

</head>
<body>
    
    <div id="interface">

        <header id="cabecalho">

        
            <nav id="menu">
                <h1>Menu principal</h1>
                <ul type="square">
                    <li id="geral"><a href="index.php">Home</a></li>
                    <li id="geral"><a href="playstation.php">PlayStation</a></li>
                    <li id="geral"><a href="steam.php">Steam</a></li>           
                </ul>
                <div id="campopesquisa">
                    <section id="pesquisa">
                        <input type="text" placeholder="Busque seu jogo..." id="search"/>
                    </section>
                    <aside id="pesquisa1">
                        <img id="pesquisadesktop" src="../view/imagens/imgpesquisar_resized.png"/>
                    </aside>    
                </div>
                <ul id="entrar-registro">
                    <li><a href="login.php">Login</a></li>
                </ul>
        
            </nav>
        
            <img id="logo" src="../view/imagens/G mer (200 x 112 px).png"/>
        
            <div id="sacoladesktop">
                <img src="../view/imagens/sacola(60 x 40).png"/>
            </div>
        
        </header>

    <div id="interface">

        <div id="fundogamershop">
            <img src="../view/imagens/fundo_gamershopatualizado.png"/>
        </div>

        <section id="corpo">

            <div id="texto-imgseparacao1">
                <img src="../view/imagens/1.png"></img>
            </div>

                <div id="alinhamento">
                    <div id="texto-imagem">
                        <section id="textoleft">
                            <div id="informacaotexto">
                                <p>Bem-vindo ao GamerShop - o seu destino definitivo para encontrar as melhores ofertas em jogos para uma variedade de plataformas! Navegue por nosso site para descobrir promoções irresistíveis em títulos emocionantes para o PlayStation, Xbox, Steam e Epic Games Store. Seja você um jogador ávido ou apenas alguém em busca de ofertas imperdíveis, estamos aqui para garantir que você nunca perca uma oportunidade de economizar enquanto expande sua biblioteca de jogos. Explore nosso catálogo diversificado, compare preços e mergulhe nas emoções do universo dos games sem que isso pese no seu bolso. Junte-se à comunidade de economizadores inteligentes em jogos - bem-vindo ao GamerShop!
                                    
                                </p>
                            </div>
                        </section>
                        <section id="imagemright">
                            <div id="imagemlateral-right">
                                <img src="../view/imagens/stretched-1366-768-1245270.jpg"/>
                            </div>
                        </section>
                        <div id="texto-enchelinguica">
                            <p>Uma loja focada em tazer o melhor dos Games para o seu dia a dia, venha e aproveite o melhor que os jogos podem te OFERECER!!!</p>
                        </div>

                    </div>
                </div>

                <div id="texto-imgseparacao">
                    <img src="../view/imagens/2.png"></img>
                </div>

                <div id="alinhamento">
                    <div id="imagem-texto">
                        <section id="imagemleft">
                            <div id="imagemlateral-left">
                                <img src="../view/imagens/stretched-1366-768-1221190.jpg"/>
                            </div>
                        </section>
                        <section id="textoright">
                            <div id="informacaotexto">
                               <p> Queremos recompensar a lealdade dos nossos jogadores. Por isso, introduzimos um programa de recompensas que oferece benefícios especiais, descontos adicionais e acesso antecipado a ofertas exclusivas. A cada compra, você acumula pontos que podem ser trocados por descontos em seus jogos favoritos. Junte-se à comunidade de jogadores que sabem que aqui, as recompensas não têm limites.</p>
                    <p> "Sua diversão merece ser recompensada. Explore, jogue, e aproveite benefícios exclusivos. É assim que fazemos as coisas por aqui!"</p>
                    <p>Não perca mais tempo! Navegue pelo nosso site agora e descubra um universo de promoções irresistíveis e jogos emocionantes. Sua próxima aventura está a apenas um clique de distância. Vamos jogar! 🎮✨</p>
                            </div>
                        </section>
                    </div>
                </div>
            
                <div id="texto-imgseparacao">
                    <img src="../view/imagens/3.png"></img>
                </div>

                <div id="imagem-desconto">
                    <section id="imagensjogo">
                        <div id="imagensdiversas">
                            <img id="imagem1" src="../view/imagens/item1.png" alt="Imagem 1">
                        </div>
                    </section>
                    <aside id="frasedesconto">
                        <div id="fundo-desconto">
                            <div id="apoio">
                                <p id="texto-inicial">até</p>
                                <p id="texto-maior">30%</p>
                                <p id="texto-menor">de desconto</p>
                                <p id="texto-chamativo"><a href="steam.php">COMPRE AGORA!</a></p>
                            </div>
                        </div>
                    </aside>
                </div>

        </section>

    <script>
                const imagens = [
        "../view/imagens/item2.png",
        "../view/imagens/item3.png",
        "../view/imagens/item4.png",
        "../view/imagens/item5.png",
        "../view/imagens/item1.png"
        ];
        const tempoDeTroca = 9000; // Intervalo de tempo em milissegundos (5 segundos)
        let indiceAtual = 0;

        function trocarImagem() {
        document.getElementById("imagem1").style.opacity = 0; // Define a opacidade para 0 (invisível)
        setTimeout(() => {
            document.getElementById("imagem1").src = imagens[indiceAtual];
            document.getElementById("imagem1").style.opacity = 1; // Define a opacidade para 1 (visível)
            indiceAtual = (indiceAtual + 1) % imagens.length;
        }, 1000); // Espera 1 segundo antes de alterar a imagem (corresponde à duração da transição)
        }

        setInterval(trocarImagem, tempoDeTroca);
    </script>

    </div>
    <footer id="rodape">
        <p>GamerShop &reg;</p>
    </footer>
</body>
</html>