<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class BookModel extends Model 
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

  //  use SoftDeletes;

    protected $table = 'book';

    protected $fillable = [
        'title', 'isbn','id_categories',
    ];

    public function categories()
    {
      return $this->belongsTo('App\CategoryModel', 'id_categories');
    }

}
