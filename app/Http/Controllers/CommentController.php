<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Document;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Сохраняет новый комментарий к документу
     */
    public function store(Request $request, Document $document)
    {
        // Защита: проверка дедлайна
        if (now()->gt($document->comment_deadline)) {
            return redirect()->back()->with('error', '⛔ Срок комментирования истёк.');
        }

        // Валидация
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        // Создание комментария
        $document->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
        ]);

        return back()->with('success', 'Комментарий добавлен!');
    }

    /**
     * (Опционально) удаление комментария
     */
    public function destroy(Comment $comment)
    {
        // Только автор или админ может удалить
        if (auth()->id() !== $comment->user_id && !auth()->user()?->isAdmin()) {
            abort(403);
        }

        $comment->delete();

        return back()->with('success', 'Комментарий удалён.');
    }
}
