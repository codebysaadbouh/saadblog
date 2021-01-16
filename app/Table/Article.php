<?php

namespace App\Table; 

class Article extends Table{

    protected static $table = 'articles';


    public function getUrl()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->contenu, 0, 253) . '...</p>';
        return $html;
    }
    
    #Lister les articles :
    public static function getArticles()
    {
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie, articles.date_publication 
                                    FROM articles 
                                    LEFT JOIN categories 
                                    ON categorie_id = categories.id 
                                    ORDER BY date_publication DESC LIMIT 0, 5", null, false);
    }

    #Afficher l'article et son content :
    public static function getArticleOnClick()
    {
        return self::query('SELECT * FROM articles WHERE id =?', [$_GET['id']], 'App\Table\Article', true);
    }

    public static function lastByCategory($categorie_id){
        return self::query("SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie, articles.date_publication 
                                    FROM articles
                                    LEFT JOIN categories 
                                    ON categorie_id = categories.id
                                    WHERE categorie_id = ? 
                                    ORDER BY date_publication DESC LIMIT 0, 5", [$categorie_id]);
    }
}