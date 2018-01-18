<div class="card">
  <div class="card-body">
    <h2>
        <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="card-text">{{ $post->body }}</p>
    <p class="card-text">{{ $post->created_at->toFormattedDateString() }}</p>
  </div>
  <img class="card-img-bottom" src="/uploads/setups/{{ $post->img }}" style="max-width:750px; height:auto;" alt="Setup image">
</div>

<hr>