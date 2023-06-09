<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','body','user_id','category_id'];
    // protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }


    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
