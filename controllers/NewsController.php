<?php

require_once ROOT. '/models/News.php';

class NewsController {

    public function actionIndex()
    {
        $newsList = [];
        $newsList = News::getNewsList();

        var_dump($newsList);

        return true;
    }

    public function actionView($category, $id)
    {
        if (!empty($category) && !empty($id)) {
            $newsItem = News::getNewsItemById($category, $id);

            var_dump($newsItem);

            return true;
        }
    }

}