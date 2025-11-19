@extends('layouts.site')
@section('title', 'Программы')

@section('content')
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Оставьте свое мнение в комментариях!</h6>
                        <h1 class="mb-4">Повышение квалификации педагогов</h1>

                        @foreach($documents as $document)
                            <div class="bg-white p-4 rounded mb-4 shadow-sm">
                                <h4>{{ $document->title }}</h4>

                                <div class="deadline-timer text-danger" data-deadline="{{ $document->comment_deadline->toIso8601String() }}">
                                    🧪 Загрузка таймера...
                                </div>
                                <p>Загрузил: <strong>{{ $document->user->name ?? '—' }}</strong></p>
                                <a href="{{ asset('storage/' . $document->file_path) }}" class="btn btn-sm btn-outline-primary" target="_blank">
                                    📄 Скачать документ
                                </a>


                                {{-- Осталось дней --}}
                                @php
                                    $daysLeft = now()->diffInDays($document->comment_deadline, false);
                                @endphp

                                <p class="mt-2">
                                    @if($daysLeft > 0)
                                        🕒 Осталось <strong>{{ $daysLeft }}</strong> {{ Str::plural('день', $daysLeft) }} для комментирования.
                                    @else
                                        ⛔ Комментирование завершено
                                    @endif
                                </p>

                                {{-- Форма комментария --}}
                                @if(auth()->check() && now()->lt($document->comment_deadline))
                                    <form method="POST" action="{{ route('comments.store', $document) }}" class="mt-3">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <textarea name="content" class="form-control" placeholder="Ваш комментарий..." required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">💬 Комментировать</button>
                                    </form>
                                @endif

                                {{-- Комментарии --}}
                                <div class="mt-4">
                                    <h6>Комментарии:</h6>
                                    @forelse($document->comments as $comment)
                                        <div class="border p-2 mb-2 rounded">
                                            <strong>{{ $comment->user->name ?? '—' }}</strong>
                                            <small class="text-muted">({{ $comment->created_at->diffForHumans() }})</small>
                                            <p class="mb-0">{{ $comment->content }}</p>
                                        </div>
                                    @empty
                                        <p class="text-muted">Комментариев пока нет.</p>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        $(function () {
            $('.deadline-timer').each(function () {
                const $el = $(this);
                const deadline = new Date($el.data('deadline'));
                console.log('⏳ Deadline:', deadline);

                function updateTimer() {
                    const now = new Date();
                    const diff = deadline - now;

                    if (diff <= 0) {
                        $el.html('⛔ Комментирование завершено');
                        return;
                    }

                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                    const minutes = Math.floor((diff / (1000 * 60)) % 60);
                    const seconds = Math.floor((diff / 1000) % 60);

                    $el.html(`🕒 Возможность комментирования закроется через: <strong>${days}д ${hours}ч ${minutes}м ${seconds}с</strong>`);
                }

                updateTimer();
                setInterval(updateTimer, 1000);
            });
        });
    </script>
@endsection

