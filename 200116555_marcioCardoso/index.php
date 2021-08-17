<html>
<head>
    <meta charset="utf-8">
    <title>Bolos de Pote</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
                <header class="header">
					<h1>Pagina Inícial de Bolos de Pote</h1>
                    
					<a href="pagina/pg2.php?p=quemSomos"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Quem Somos</button></a>
					<a href="pagina/pg3.php?p=contato"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Contato</button></a>
					<a href="pagina/pg4.php?p=localiza"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Localização</button></a>
					<a href="pagina/pg5.php?p=produto"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Produtos</button></a>
				</header>
  
                <?php
                    @$valor = $_GET["p"];
                   
                    if ($valor == "quemSomos"){require_once "pagina/pg2.php";}
                    if ($valor == "contato"){require_once "pagina/pg3.php";}
                    if ($valor == "localiza"){require_once "pagina/pg4.php";}
                    if ($valor == "produto"){require_once "pagina/pg5.php";}
                    if ($valor == "home"){require_once "index.php";}
                ?>
                <p>Curabitur et quam sit amet quam convallis fermentum eget et purus. Proin et mollis nunc. Duis eleifend ante eu mollis suscipit. Sed a facilisis ex, placerat malesuada dolor. Quisque iaculis vulputate est, vel ullamcorper nunc malesuada at. Nulla malesuada eget purus eu blandit. Pellentesque urna sem, dignissim sed sagittis at, porttitor at nisl. Curabitur arcu eros, ullamcorper ac velit a, vulputate elementum urna. </p>
                <div class="container">
    				<img src="images/boA1.jpeg" width="400" height="300" />
				</div>
                <p>
                    Marcio cardoso<br> RA 20011655-5
                </p>
                </body>
                </html>