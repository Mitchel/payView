<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayViewController extends Controller
{
    public static function getTransactionColor($type) {
        $color = "";

        switch($type) {
            case "expenses":
                $color = "red";
                break;
            case "reservation":
                $color = "yellow";
                break;
            case "revenue":
                $color = "green";
                break;
            default:
                $color = null;
                break;
        }

        return $color;
    }

    public static function getSaldoColor($saldo) {
        if($saldo < 0) return "red";
        else return null;
    }
}
