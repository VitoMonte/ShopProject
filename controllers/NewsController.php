<?php

class NewsController {

    public function actionIndex()
    {
        echo 'Список новостей' . '<br>';
        return true;
    }

    public function actionView($category, $id)
    {
        echo $category. '<br>';
        echo $id. '<br>';
        return true;
    }

}