<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

Broadcast::channel("App.User.{id}", function ($user, $id) {
    return (int) $user->id === (int) $id;
});



// This is the demo version. This version only decode 30 lines.