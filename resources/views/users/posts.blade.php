<x-layout>

  {{-- User's posts --}}
  <h1 class="title text-left">{{ $user->username }}'s Posts &#9830; {{ $posts->total() }}</h1>

  <div class="grid grid-cols-2 gap-4">
    @foreach ($posts as $post)
      <x-postCard :post="$post"/>
    @endforeach
  </div>

  <div class="">
    {{-- Pagination --}}
    {{ $posts->links() }}
  </div>
</x-layout>
