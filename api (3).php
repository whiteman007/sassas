<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

date_default_timezone_set(App\Http\Controllers\SettingsController::get("gnrl_timezone", "GMT"));
Route::post("login", "ManagerController@login");
Route::get("login/captcha/{guid}", "CaptchaController@getCaptcha");
Route::get("resources/logo", "ResourcesController@logo");
Route::get("resources/background_image", "ResourcesController@backgroundImage");
Route::get("resources/language/{lang}", "ResourcesController@loadLanguage");
Route::get("resources/language", "ResourcesController@loadLanguage");
Route::get("resources/languages", "ResourcesController@loadLanguageList");
Route::get("resources/timezones", "ResourcesController@loadTimezones");
Route::get("resources/forms", "ResourcesController@loadForms");
Route::get("resources/countries", "ResourcesController@loadCountries");
Route::get("resources/currencies", "ResourcesController@loadCurrencies");
Route::get("resources/login", "ResourcesController@loginResources");
Route::get("resources/version", "ResourcesController@version");
Route::get("series/download/{filename}/{user_filename}", "CardController@download");
Route::get("backup/download/{filename}/{user_filename}", "BackupController@download");
Route::get("avatar/{manager_id}", "ManagerController@avatar");
Route::post("paymentgateway/webhook/zaincash", "PaymentGateways\\ZainCash@webhook");
Route::post("paymentgateway/webhook/switch", "PaymentGateways\\ZainCash@webhook");
Route::post("paymentgateway/webhook/tasdid", "PaymentGateways\\Tasdid@webhook");
Route::post("telegram/webhook/{token}", "TelegramController@handleWebhook");
Route::get("resources/menuLogo", "ResourcesController@menuLogo");
Route::group(["middleware" => "jwt.auth"], function () {
    Route::get("resources/hardware", "HardwareInfoController@info");
    Route::get("resources/menu", "ResourcesController@loadMenu");
    Route::get("resources/welcomeScreen", "ResourcesController@getWelcomeScreen");
    Route::get("auth", "ManagerController@loginProfile");
    Route::get("dashboard", "DashboardController@get");
    Route::post("resources/logo", "ResourcesController@uploadLogo");
    Route::post("resources/menuLogo", "ResourcesController@uploadMenuLogo");
    Route::post("resources/ucpBackgroundImage", "ResourcesController@uploadUCPBackgroundImage");
    Route::post("index/acl", "AclGroupController@index"

// This is the demo version. This version only decode 30 lines.