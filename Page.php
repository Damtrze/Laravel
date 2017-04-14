<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'title',
    	'link'
    ];

    public function pagecategories()
    {
    	return $this->belongToMany('App\PageCategory')->withTimestamps();
    }

    // Lista kategorii

    public function getCategoryListAttribute()
    {
        return $this->categories->pluck('id')->all();
    }
}


