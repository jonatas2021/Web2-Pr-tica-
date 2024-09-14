<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Campos que podem ser atribuídos em massa
    protected $fillable = ['title', 'author_id', 'publisher_id', 'published_year', 'cover_image'];

    // Relacionamento com Author: Um livro pertence a um autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relacionamento com Publisher: Um livro pertence a uma editora
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    // Relacionamento com Categories: Um livro pode pertencer a muitas categorias (many-to-many)
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Acessor para obter a URL completa da capa do livro
    public function getCoverImageUrlAttribute()
    {
        if ($this->cover_image) {
            return asset('storage/' . $this->cover_image);
        }
        return asset('images/default_cover.png'); // Caminho para uma imagem padrão se a capa não estiver disponível
    }
}
