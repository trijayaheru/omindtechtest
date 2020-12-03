<?php
/**
 * Created by PhpStorm.
 * User: eru
 * Date: 2/10/2017
 * Time: 9:16 PM
 */
namespace App\Helpers;

class StatusHelper extends Helper{
    const DISABLED  = '0';
    const ENABLED   = '1';

    public static function label($status){
        switch ($status) {
            case $status == self::ENABLED:
                return ucfirst("Active");
                break;
            case $status == self::DISABLED:
                return ucfirst("Inactive");
                break;
            default:
                return 'Status is not defined';
        }
    }
}
