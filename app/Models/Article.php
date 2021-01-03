<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
    {
        protected $fillable=
        [
             'title','body','extract'
        ];

        public function user ()
        {
            return $this->belongsTo('App\Models\User');
        }
        public function comments ()
        {
            return $this->hasMany('App\Models\Comment');
        }
        public function cattegories(){
            return $this->belongsToMany('App\Models\Cattegory');
        }

        public function images()
    {
          return $this->belongsToMany('App\Models\Image');
    }
    }
