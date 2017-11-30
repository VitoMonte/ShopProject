<?php

class News {
    

    /**
     *Returns single news item with specified id
     * @param integer $category
     * @param integer  $id
     */
    public static function getNewsItemById($category, $id) {
        return [$category, $id];
    }

    /**
     *Returns in array of news items
     */
    public static function getNewsList() {
        return [2,3,4];
    }

}