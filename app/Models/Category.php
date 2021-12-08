<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];

    protected $dates = [
        'deleted_at'
    ];
    /**
     * Get all of the comments for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(related:Product::class);
    }

    protected static function booted(){
        static::creating(function($category){
            $category->slug = Str::slug($category->name);
        });
    }

    // public function setSlugAttribute($slug){
    //     $this->attibutes['slug'] = Str::slug($slug);
    // }
    // public function setNameAttribute($name)
    // {
    //     $this->attributes['name'] = $name;
    //     $this->attributes['slug'] = Str::slug($name);
    // }
}
