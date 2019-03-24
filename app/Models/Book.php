<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $primaryKey = 'book_id';

    /**
     * Get the route key for the model.
     *
     * @return string
     */

    public function getRouteKeyName()
    {
        return 'book_slug';
    }

    /**
     * Get the user that owns the book.
     */

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'book_user_id', 'id');
    }
}


