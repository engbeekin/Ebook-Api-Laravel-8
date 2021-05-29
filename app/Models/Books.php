<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $guarded=['id'];


    public function categories(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }
    public function booksType(){
        return $this->belongsTo(BookType::class,'book_type_id','id');
    }
}
