<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model 
{
    use HasFactory;
    
    protected $fillable = ['author', 'content', 'stars'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getAuthor()
    {
        return $this->attributes['author'];
    }

    public function setAuthor($author)
    {
        $this->attributes['author'] = $author;
    }

    public function getContent()
    {
        return $this->attributes['content'];
    }

    public function setContent($content)
    {
        $this->attributes['content'] = $content;
    }

    public function getStart()
    {
        return $this->attributes['stars'];
    }

    public function setStars($stars)
    {
        $this->attributes['stars'] = $stars;
    }
}
