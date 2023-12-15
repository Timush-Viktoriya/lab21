<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// У файлі app/Models/Author.php

class Author extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
