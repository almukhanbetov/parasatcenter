<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'file_path',
        'comment_deadline',
        'user_id',
    ];
    protected $casts = [
        'comment_deadline' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    // Пример: проверка доступности комментариев
    public function isCommentable(): bool
    {
        return now()->lessThan($this->comment_deadline);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 У документа много комментариев
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // 🔐 Проверка: можно ли сейчас комментировать?
    public function commentDeadlineLabel(): string
    {
        return $this->comment_deadline->isPast()
            ? '⛔ Комментирование завершено'
            : '🕒 До ' . $this->comment_deadline->format('d.m.Y');
    }
}
