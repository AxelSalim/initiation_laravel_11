@props(['post'])


<div class="bg-white p-6 m-4 rounded-md">
  {{-- Title --}}
  <h2 class="font-semibold text-2xl">{{ $post->title }} </h2>
  {{-- Author and Date --}}
  <div class="text-xs font-light mb-4">
      <span>Posted {{ $post->created_at->diffForHumans() }}</span>
      <a href="" class="text-blue-500 font-medium">USERNAME</a>
  </div>
  {{-- Body --}}
  <div class="text-md">
      <p>{{ Str::words($post->body, 15) }} </p>
  </div>
</div>
