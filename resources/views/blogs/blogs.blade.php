

    @extends('layouts.bloglayout')
    @section('content')
        <?php
        use App\Tag;
        use App\User;

        ?>
    <div class="banner">
        <div class="container">
{{--        @include('blogs.messages')--}}
            <h1 >BLOGS</h1>
        </div>
    </div>

    <div class="event" id="event">
        <div class="container">
            <div class="form-group">
                @foreach($tags as $tag)
                    <a href="/blogs/tags/{{$tag}}">{{$tag}}</a>--------
                @endforeach

            </div>
            <div class="form-group">




                    <div class="card">
                        <ul class="list-group list-group-flush">
{{--                            @forelse ($posts as $post)--}}

{{--                            @empty--}}

{{--                            @endforelse--}}
                            @foreach($posts as $post)
                                <div class="well row">
                                    <div class="col-md-4">
                                        <img style="width: 100%; height: 300px" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h3> <a href="/blogs/{{$post->id}}"><b>Title:</b>{{$post->title}}</a></h3>
                                        <h3><b>Author:</b>{{$post->fname}}</h3>
                                        <h4><b>Date of Publish:</b>{{$post->created_at}}</h4>
                                    </div>
                                </div>
                            @endforeach

                        </ul>
                    </div>
                @endsection





