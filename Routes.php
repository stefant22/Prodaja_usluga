<?php
return [
    App\Core\Route::get('|^category/([0-9]+)/?$|','Category',"show"),
    App\Core\Route::get('|^category/([0-9]+)/order-by-price-low-to-high/?$|','Category',"lowToHigh"),
    App\Core\Route::get('|^category/([0-9]+)/order-by-price-high-to-low/?$|','Category',"highToLow"),

    App\Core\Route::get('|^product/([0-9]+)/?$|','Product',"show"),


    App\Core\Route::any('|^.*$|','Main',"home")
];