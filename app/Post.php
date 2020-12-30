<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titre','titreEn', 'content', 'contentEn', 'description','descriptionEn', 'photo', 'categorie_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }
    public function postesTags()
    {
         return $this->hasMany('App\postesTags');
    }
    
}
