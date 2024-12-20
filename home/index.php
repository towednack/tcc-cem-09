<?php
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="media/icons/ico.ico">
    <title>CEM 09 - Novidades</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

    <section class="pageInfo">
        <h2>Centro de Ensino Médio 09 de Ceilândia</h2>
        <h2>Bem-vindo(a), <?php
        
            echo $_SESSION['username'];

            ?></h2>
        <h1>Novidades</h1>
    </section>

    <section class="postsMain">
        <div class="postBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">PAS 2024</p>
                <p>Aprenda um pouco mais sobre o PAS 2024.</p>
                <button onclick="location.href='pas/pas2024.html'" id="postButton">Acessar</button>
            </div>

        </div>
        <div class="postBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Eventos no CEM 09</p>
                <p>Aprenda um pouco mais sobre os eventos que acontecem na escola.</p>
                <button onclick="location.href='escola/eventos.html'" id="postButton" type="button">Acessar</button>
            </div>

        </div>

        <br>

        <div class="postBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Conteúdos</p>
                <p>Aprenda um pouco mais sobre os conteúdos passados em aula.</p>
                <button onclick="location.href='escola/conteudos.html'" id="postButton">Acessar</button>
            </div>

        </div>
        <div class="postBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Matérias</p>
                <p>Aprenda um pouco mais sobre as matérias ofertadas na escola.</p>
                <button onclick="location.href='escola/materias.html'" id="postButton">Acessar</button>
            </div>

        </div>
    </section>

    <section class="pageInfo">
        <h1 class="pageInfoCategories">Categorias</h1>
    </section>

    <section class="categories">

        <div class="categoryBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Conteúdos</p>
            </div>

        </div>

        <div class="categoryBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Conteúdos</p>
            </div>

        </div>

        <div class="categoryBlock">

            <div class="leftSide">
                <img src="media/images/blogThumbnail.png" alt="Thumbnail do post.">
            </div>

            <div class="rightSide">
                <p class="postTitle">Conteúdos</p>
            </div>

        </div>
    </section>

</body>
</html>