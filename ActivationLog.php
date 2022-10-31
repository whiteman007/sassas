<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

namespace App;

class ActivationLog extends Illuminate\Database\Eloquent\Model
{
    protected $table = "sas_activation_log";
    protected $fillable = ["user_id", "manager_id", "profile_id", "addon_id", "price", "old_expiration", "new_expiration", "user_price", "transaction", "activation_method", "pin", "refund_comment"];
    public function UserDetails()
    {
        return $this->hasOne("App\\User", "id", "user_id")->withTrashed()->select("id", "username", "firstname", "lastname", "group_id");
    }
    public function ManagerDetails()
    {
        return $this->hasOne("App\\Manager", "id", "manager_id")->withTrashed()->select("id", "username", "firstname", "lastname", "group_id");
    }
    public function ProfileDetails()
    {
        return $this->hasOne("App\\Profile", "id", "profile_id")->withTrashed()->select("id", "name");
    }
    public function AddonDetails()
    {
        return $this->hasOne("App\\Addon", "id", "addon_id")->withTrashed()->select("id", "name as addon_name");
    }
}



// This is the demo version. This version only decode 30 lines.