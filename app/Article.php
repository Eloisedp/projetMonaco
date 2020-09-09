<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'name',
        'price',
        'description',
        'dimensions',
        'picture',
        'category_id'
    ];

    /**
     * @var mixed
     */
    private $category_id;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


}
