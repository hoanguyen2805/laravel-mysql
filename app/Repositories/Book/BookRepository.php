<?php

namespace App\Repositories\Book;

use App\Repositories\BaseRepository;
use App\Repositories\Book\BookInterface;

class BookRepository extends BaseRepository implements BookInterface
{
    public function getModel()
    {
        return \App\Models\Book::class;
    }
}
