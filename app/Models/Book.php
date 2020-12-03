<?php

namespace App\Models;

use App\Helpers\StatusHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'book';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'published_date',
        'status',
        'author_id',
    ];

    public static function getStatus(){
        return array(
            StatusHelper::ENABLED   => StatusHelper::label(StatusHelper::ENABLED),
            StatusHelper::DISABLED  => StatusHelper::label(StatusHelper::DISABLED),
        );
    }

    public function author(){
        return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }
}
