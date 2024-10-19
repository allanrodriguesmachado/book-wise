<?php

namespace App\Models;

class Book {
    public int $id;
    public int $user_id;
    public string $title;
    public string $author;
    public string $description;
    public string $release_date;
}