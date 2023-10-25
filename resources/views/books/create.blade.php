@extends('layouts.app')

@section('content')
<div class="px-56">
  <h1 class="text-4xl font-bold text-zinc-900 tracking-tight">Create a new book</h1>

  <form class="mt-4" action="{{ route('books.store') }}" method="post">
    @csrf
    <div class="grid grid-cols-3 gap-4">
      <div>
        <label class="mb-2 block font-semibold" for="title">Tilte <span class="text-red-500">*</span></label>
        <input required id="title" type="text" class="flex h-9 w-full rounded-md border border-input bg-white px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-white file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50">
      </div>
      <div>
        <label class="mb-2 block font-semibold" for="image">Image (URL) <span class="text-red-500">*</span></label>
        <input required id="image" type="text" class="flex h-9 w-full rounded-md border border-input bg-white px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-white file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50">
      </div>
      <div>
        <label class="mb-2 block font-semibold" for="author_id">Author <span class="text-red-500">*</span></label>
        <select required id="author_id" class="flex h-9 w-full rounded-md border border-input bg-white px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-white file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50">
          <option value="">Select author name</option>
          <option value="1">Test</option>
        </select>
      </div>
    </div>
    <div class="text-right mt-4">
      <button class="bg-zinc-900 text-white shadow hover:bg-zinc-900/90 h-9 px-4 py-2 rounded-md" type="submit">Create</button>
    </div>
  </form>
</div>
@endsection