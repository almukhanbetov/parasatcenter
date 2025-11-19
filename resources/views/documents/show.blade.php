<h2>{{ $document->title }}</h2>
<a href="{{ asset('storage/' . $document->file_path) }}" download>📄 Скачать документ</a>

@if(now()->lessThan($document->comment_deadline))
    <form method="POST" action="{{ route('comments.store', $document) }}">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">💬 Комментировать</button>
    </form>
@else
    <p>⏰ Время для комментариев истекло.</p>
@endif

<h3>Комментарии:</h3>
<ul>
    @foreach ($document->comments as $comment)
        <li><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</li>
    @endforeach
</ul>

