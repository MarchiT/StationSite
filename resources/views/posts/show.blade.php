@extends ('layouts.merged')

@section ('content')
    <div class="col-sm-8 blog-main">

    <div class="card mb-3">
        <img class="card-img-top" style="width:100%; height:auto;" src="/uploads/setups/{{ $post->img }}" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title"><strong>{{ $post->title }}</strong></h1>

            @if (count($post->tags))
                <ul>
                    @foreach ($post->tags as $tag)
                        <li>
                            <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif

            <p class="card-text">{{ $post->body }}</p>
            <p class="card-text"><small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small></p>
        </div>
    </div>

        <hr>

        <div class="comments">
            <ul class="list-group">

                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <em>
                            {{ $comment->user->name }}
                        </em>
                        &nbspcommented&nbsp
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>

                        {{ $comment->body }}
                    </li>
                @endforeach

            </ul>
        </div>

        {{-- Add a comment --}}
        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
                
                @include ('layouts.errors')
            </div>
        </div>

    </div>

@endsection