<!-- post-list.blade.php -->
@if($posts->count() > 0)
  @foreach($posts as $post)
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
      </div>
    </div>
  @endforeach
@else
  <p>No posts found.</p>
@endif
