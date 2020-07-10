

    @extends('layouts.blogsfinallayout')
    @section('content')
        <?php
        use App\Tag;
        use App\User;

        ?>




    <div class="event container" id="event">
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
                            @if (count($posts)==0)
                                <h3 style="text-align: center">No Posts! Be the first one to share your thoughts.</h3>
                            @endif
                            @foreach($posts as $post)
                                <div class="">
                                    <div class="jumbotron" >
                                <div class="well row">
                                    <div class="col-md-4">
                                        <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                        <br>


                                        <h5> <a href="/blogs/{{$post->id}}"><b>Title:</b>{{$post->title}}</a></h5>

                                        <br>

                                        <h5><b>Author:</b>{{$post->fname}} {{$post->lname}}</h5>

                                        <br>


                                        <h5><b>Date of Publish:</b>{{$post->created_at}}</h5>

                                        <br><br><br><br><br><br><br>
                                            <a class="btn btn-info form-control" href="/blogs/{{$post->id}}">VIEW BLOG</a>


                                            </div>
                                </div>
                                </div>
                                    </div>
                            @endforeach

                        </ul>
                    </div>
                @endsection





