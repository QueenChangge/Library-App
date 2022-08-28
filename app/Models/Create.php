<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Book(){
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function Author(){
        return $this->belongsTo(Author::class, 'author_id');
    }
}
