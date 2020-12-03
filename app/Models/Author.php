<?php

namespace App\Models;

use App\Helpers\StatusHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'author';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'city',
        'status',
    ];

    public static function getStatus(){
        return array(
            StatusHelper::ENABLED   => StatusHelper::label(StatusHelper::ENABLED),
            StatusHelper::DISABLED  => StatusHelper::label(StatusHelper::DISABLED),
        );
    }

    public static function getList(){
        $result = [];
        $model  = self::all()->where('status', '=', StatusHelper::ENABLED);
        foreach($model as $data){
            $result[$data->id] = $data->name;
        }
        return $result;
    }
}
