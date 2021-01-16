<?php
 
use App\Table\Article;
use App\Table\Categorie;

$articles = Article::getArticles();
$categories = Categorie::All();
App\App::setTitle("Home");
?>
<div class="row">
    <div class="col-md-4">
        <div class="list-group esp">
            <a href="" class="averta list-group-item list-group-item-action active">Catégorie</a>
            <?php foreach ($categories as $categorie) : ?>
                <a href="<?= $categorie->getUrl(); ?>" class="averta list-group-item list-group-item-action"><?= $categorie->titre ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row mrg">
            <div class="col-md-8 ">
                <span class="averta">
                    <h3 style="color : #008dbc;">Les derniers articles</h3>
                </span>
            </div>
        </div>
        <?php foreach ($articles as $post) : ?>
            <div class="list-group esp">
                <a href="<?= $post->getUrl(); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 color_1"><?= htmlspecialchars($post->titre) ?></h5>
                    </div>
                    <p class="mb-1"><?= $post->getExtrait() ?></p>
                    Catégorie : <span class="gras_1"><?= $post->categorie ?></span><br>
                    <small class="text-muted"><?= htmlspecialchars($post->date_publication) ?></small>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

</div>