<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "basico/head.php";?>
</head>
<body>
<script>
    function funcao1(){
        alert("Segunda a Sábado\n\nDas 07:00 às 17:00");
    }
</script>
    <?php include "basico/header.php";?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrosel2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/carrosel4.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/carrosel5.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/carrosel3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon color" aria-hidden="true"></span>
            <span class="visually-hidden">Voltar</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden" >Proximo</span>
        </button>
    </div>
    <section id="product">
        <div class="heading"><h1>Produtos</h1></div>
        <div class="product-container">
            <h2 class="title">Linhas</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/linha5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Jardas 457 Metros</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do produto</h4>
                        <p>Linha 10 - 500 Jardas, Linha 100% Algodão, Linha Colorida, Contém Aproximadamente 500 Jardas - 457 Metros</p>
                        <a href="linhas.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/linha2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Setta XIK Fio 120</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do produto</h4>
                        <p>Linha Para Costura Setta XIK Fio 120 Cone Com 1828M</p>
                        <a href="linhas.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/linha3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Trichê 1300m</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do produto</h4>
                        <p>Linha Trichê 120 Dinner 1500 c/ 1300m de comprimento</p>
                        <a href="linhas.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/linha4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Xik Setta</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                      
                    </div>
                    <div class="info">
                        <h4>Informação do produto</h4>
                        <p>Linha para Costura Xik Setta 100% Poliamida 80 Gramas Settanyl 60</p>
                        <a href="linhas.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tecidos-->
        <div class="product-container">
            <h2 class="title">Tecidos</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/tercido1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Linho</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Tecidos de composição mista com linho para Moda Casual é na Riviera Tecidos</p>
                        <a href="tecidos.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/tecido03.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Tricoline</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                      
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Tecido Tricoline, composição 100% Algodão</p>
                        <a href="tecidos.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/tecido3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Viscose</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Tecido Viscose. Tecidos leves e frescos</p>
                        <a href="tecidos.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/tecido02.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Oxford</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>100% poliéster, não amassa e nem encolhe. Muito utilizado para a produção de jalecos e uniformes </p>
                        <a href="tecidos.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/tecido01.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Gorgurinhos</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                     
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Gorgurinhos usado em painéis de festa, toalhas de mesa, confecção de cortinas.</p>
                        <a href="tecidos.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Botões-->
        <div class="product-container">
            <h2 class="title">Botões</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bot1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>2 Furos Branco</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Botão 2 furos Branco, Pacote com 50 unidades do mesmo tamanho, Composição: Plástico ABS</p>
                        <a href="botoes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bot2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Sortido Diversos</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Botões de várias cores, modelos e formatos. Seu tamanho pode variar de 11mm a 25mm. Há diferença nas espessuras. Possui cores lisas e trabalhadas, com brilho e foscos.</p>
                        <a href="botoes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bot3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>2 Furos</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                      
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Botão 2 furos, Tamanho 15mm, Composição 100% Poliéster</p>
                        <a href="botoes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bot4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Pressão Ritas</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Botão Ritas Pressão, Ideal para Roupas de bebê e Artesanato em Geral.</p>
                        <a href="botoes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bot5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Botão de Pé</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Botão de Pé C1083/18, Tamanho 10mm, Fabricante Corozita.</p>
                        <a href="botoes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section id="product">
        <section class="selection">
        <div class="product-banner">
            <div class="left">
               <img src="img/test.jpg" alt=""> 
            </div>
            <div class="right">
                <div class="content">
                    <h2>Promoção <span class="discount">20%</span> De Desconto</h2>
                    <h1>
                        <span>Aproveite</span>
                    </h1>
                    <a href="https://wa.me/5571993092681?text=Oi%20gostaria%20de%20um%20atendimeto" class="bth"><button>Entre em contato</button></a>
                </div>
            </div>
        </div>
    </section>
        <!--Agulhas-->
        <div class="product-container">
            <h2 class="title">Agulhas</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/agulha01.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Agulha Overlock</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informações do produto</h4>
                        <p>Agulha para Máquina de Costura Overlock Industrial Orange DCX27, Utilização máquinas de costura industrial overloque</p>
                        <a href="agulha.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/agulha02.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Agulha crochê</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informações do produto</h4>
                        <p>Agulhas de crochê cabo de madeira</p>
                        <a href="agulha.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/agulha03.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Orange Ponta Bola</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informações do produto</h4>
                        <p>Agulhas De Costura Ponta Bola Orange DB X 1 16 X 231</p>
                        <a href="agulha.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/agulha04.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Milward Betweens</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informações do produto</h4>
                        <p>Agulha Milward Betweens Ba30200 C/20, fabricante corrente.</p>
                        <a href="agulha.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/agulhas01.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Agulhas de Madeira</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informações do produto</h4>
                        <p>Agulha Imp Lanmax Lm-907 C/7, produto importado</p>
                        <a href="agulha.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product">
        <!--Papelaria-->
        <div class="product-container">
            <h2 class="title">Papelaria</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/pa1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Lápis Grafite</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Os Lápis Grafite de madeira</p>
                        <a href="papelaria.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/caneta.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Canetas</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Canetas ponta fina</p>
                        <a href="papelaria.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/papelaria01.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Apontador</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                      
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Apontador para lápis de madeira</p>
                        <a href="papelaria.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/pa05.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Folha de Eva 40X60</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>FOLHA DE EVA LISO DE 1* LINHA, 40X60 5mm.PODENDO TER VARIAÇÕES DE EXPESSURA DE 8% PRA MAIS OU PRA MENOS DE FABRICAÇÃO.</p>
                        <a href="papelaria.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/papelaria02.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Marcador de texto</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Marcadores de texto</p>
                        <a href="papelaria.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Barbantes-->
        <div class="product-container">
            <h2 class="title">Barbantes</h2>
            <div class="product-slider owl-carousel owl-theme">
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bar01.png" alt="">
                    </div>
                    <div class="content">
                        <h3>EuroRoma CRU</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Barbante EuroRoma CRU 4/6, Espessura 4/6</p>
                        <a href="barbantes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bar02.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Barroco Multicolor</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                       
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Barroco Multicolor leva por todo fio, uma mistura de cores perfeita, criando um resultado incrível nas peças confeccionadas com ele.</p>
                        <a href="barbantes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bar03.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Supremo 24 Fios Cru</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Barbante Supremo 24 Fios Cru Tex 3726, Indicado para as mais diversas técnicas de artesanatos, crochê, tricô e macramê.</p>
                        <a href="barbantes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bar04.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Cordão Fio Náutico</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                      
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>O Fio Náutico é bastante utilizado na confecção de sacolas de crochê. Uma de suas vantagens é ser um fio impermeável, o que torna seus trabalhos mais leves e fáceis de lavar.</p>
                        <a href="barbantes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
                <div class="product-card item">
                    <div class="image">
                        <img src="img/bar05.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Cordão Encerado</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                    <div class="info">
                        <h4>Informação do Produto</h4>
                        <p>Cordão de altíssima qualidade e resistência. Indicado para bijuterias, colares, brincos, pulseiras, embrulhos, bem-casado, presentes e principalmente macramê.</p>
                        <a href="barbantes.php"><button>Visualisar</button></a>
                        <div class="share">
                            <a href="https://www.instagram.com/tecidosearmarinhoelshaday/" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="testimonial-center container">
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>A melhor loja de armarinho que tem em Camaçari-BA</p>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bx-star"></i>
                    <div class="img-cover">
                        <img src="img/ro1.jpg" alt="">
                    </div>
                    <h4>Raquel</h4>
                </div>
            </div>
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>Encontro de tudo que eu quero na loja El Shaday</p>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bx-star"></i>
                    <div class="img-cover">
                        <img src="img/ro2.jpg" alt="">
                    </div>
                    <h4>Suelem</h4>
                </div>
            </div>
            <div class="testimonial">
                <span>&ldquo;</span>
                <p>Sempre faço minhas compras lá, sou bem tratada e tem sempre as melhores qualidades de peça</p>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bx-star"></i>
                    <div class="img-cover">
                        <img src="img/ro3.jpg" alt="">
                    </div>
                    <h4>Jéssica</h4>
                </div>
            </div>
        </div>
    </section>
    <?php include "basico/footer.php";?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>