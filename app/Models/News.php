<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    public $fillable = [
        'cate_id',
        'img',
        'title',
        'content',
        'author'
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
