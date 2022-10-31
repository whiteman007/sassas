<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

Route::get("/", function () {
    return view("welcome");
});
Route::get("/invoice", function () {
    return view("user_invoice");
});
Route::get("series/download/{filename}", "CardController@download");



// This is the demo version. This version only decode 30 lines.