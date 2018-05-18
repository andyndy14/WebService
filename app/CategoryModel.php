<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class CategoryModel extends Model implements AuthenticatableContract,AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    public function book()
    {
      return $this->hasMany('App\BookModel', 'id_categories');
    } 
}
