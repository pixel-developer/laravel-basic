@extends('layouts.app')

@section('content')
  <div class="flex items-center justify-between">
    <h1 class="text-4xl font-bold text-zinc-900 tracking-tight">{{ $author->name }} ({{ $author->books->count() }} Book)</h1>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-12 mt-12">
    @foreach ($author->books as $book)
      <div>
        <img class="rounded-xl w-full h-[420px] object-cover" src="{{ $book->image }}" alt="">
        <p class="text-lg font-semibold mt-2 text-zinc-900">{{ $book->title }}</p>
        <span class="text-zinc-500">{{ $book->author }}</span>
      </div>
    @endforeach
  </div>
@endsection