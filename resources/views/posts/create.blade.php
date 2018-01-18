@extends ('layouts.merged')

@section ('content')
    <div class="col-sm-8 blog-main">

        <h1>Create a post</h1>

        <hr>

        <form enctype="multipart/form-data" method="POST" action="/posts">

            {{ csrf_field() }}
            
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="img">
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" >
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" placeholder="Enter body" name="body" ></textarea>
            </div>
  
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

        @include ('layouts.errors')

    </div>
@endsection 