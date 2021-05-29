<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function bookstype(){
        return $this->hasMany(books::class,'book_type_id','id');
    }
}
