<?php $post = App\Table\Article::getArticleOnClick(); 

App\App::setTitle($post->titre);

?>

<h3 class="style_1"><?= $post->titre; ?></h3>
<p class="blue_saadbouh"><?= $post->contenu; ?></p>
