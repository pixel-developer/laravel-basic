<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto my-20">
    <h2 class="text-4xl font-bold text-zinc-900 tracking-tight">Recomended Books</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-12 mt-12">
      @foreach ($books as $book)
        <div>
          <img class="rounded-xl w-full h-[420px] object-cover" src="{{ $book->image }}" alt="">
          <p class="text-lg font-semibold mt-2 text-zinc-900">{{ $book->title }}</p>
          <span class="text-zinc-500">{{ $book->author }}</span>
        </div>
      @endforeach
    </div>
  </div>
</body>

</html>