<h1>Blog de Tecnologia</h1>
<hr>

<?php
    if( count($allPosts) > 0 ){
        echo "<p>{$allPosts['body']}</p>";
    } else {
        echo "<p>Nenhum post encontrado</p>";
    }
?>
