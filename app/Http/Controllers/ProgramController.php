<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $documents = \App\Models\Document::with(['comments.user', 'user'])->latest()->get();

        return view('documents.index', compact('documents'));
    }
    public function destroy(Document $document)
    {
        // Проверка: только админ может удалять
        if (auth()->user()?->role !== 'admin') {
            abort(403, '⛔ Доступ запрещён');
        }

        // Удаляем файл, если он существует
        if ($document->file_path && Storage::disk('public')->exists($document->file_path)) {
            Storage::disk('public')->delete($document->file_path);
        }

        // Удаляем сам документ
        $document->delete();

        return redirect()->back()->with('success', '🗑 Документ успешно удалён');
    }
}
