<x-layout>
  <h1 class="text-xl font-semibold">Hello {{ auth()->user()->username }}</h1>

  {{-- Create Post Form --}}
  <div class="bg-white p-6 my-6 rounded-md mb-4">
    <h2 class="font-bold mb-4">Create a new post</h2>


    {{-- Session Messages --}}
    @if (session('success'))
    <div class="mb-2">
        <x-flashMsg msg="{{ session('success') }}"/>
      </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
      @csrf

      {{-- Post Title --}}
      <div class="mb-4">
        <label for="title" class="block mb-2 font-semibold">Post Title</label>
        <input type="text" name="title" value="{{ old('title') }}" class="input focus:ring focus:ring-blue-500 focus:outline-none @error('title') border-red-500 ring-1 ring-red-500 @enderror">
        @error('title')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Post Body --}}
      <div class="mb-4">
        <label for="body" class="block mb-2 font-semibold">Post Content</label>
        <textarea name="body" rows="4" class="input focus:ring focus:ring-blue-500 focus:outline-none @error('body') border-red-500 ring-1 ring-red-500 @enderror">{{ old('body') }}</textarea>
        @error('body')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Submit Button --}}
      <button class="btn w-full py-2 bg-[#1e293b] text-white rounded-md">Create</button>
    </form>
  </div>


  {{-- User Posts --}}
  <h1 class="title">Your Latest Posts</h1>

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
