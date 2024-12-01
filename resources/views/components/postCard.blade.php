@props(['post', 'full' => false])


<div class="bg-white p-6 m-4 rounded-md">
  {{-- Title --}}
  <h2 class="font-semibold text-2xl">{{ $post->title }} </h2>
  {{-- Author and Date --}}
  <div class="text-xs font-light mb-4">
      <span>Posted {{ $post->created_at->diffForHumans() }} by</span>
      <a href="{{ route('posts.user', $post->user)}}" class="text-blue-500 font-medium">{{ $post->user->username }}</a>
  </div>

  {{-- Body --}}
  @if ($full)
    <div class="text-md">
      <span>{{ Str::words($post->body, 15) }} </span>
    </div>
  @else
    <div class="text-md">
      <span>{{ Str::words($post->body, 15) }} </span>
      <a href="{{ route('posts.show', $post) }}" class="text-blue-500 ml-2">Read more &rarr;</a>
    </div>
  @endif
</div>
