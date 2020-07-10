@extends('layouts.blogslayout2')
@section('blogsdetails')
    @parent

    <div class="container well">
        @if (count($post->tags))


        <div class="form-group">
            <small>tags</small>
            @foreach($post->tags as$tag)
                <a href="/blogs/tags/{{$tag->name}}">{{$tag->name}}</a>--------
            @endforeach

        </div>
        @endif
        <div class="row well card">
            <div class="col-md-12">
                <img style="width: 50%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">

            </div>
        </div>
            <br>
            <div class="card" style="padding: 20px">

            <u><h1>Title:u{{$post->title}}    </h1> </u>
            <br>
            <h3>Author:{{$post->fname}}</h3>
            <br>
        <small>Date:{{$post->created_at}}</small>

            <br>
        <br>
        {{--    <small>{{$post->tags}}</small>--}}
        <br>
</div>
            <br><br>
            <h4>Body</h4><div class="container card well">
{{--    <span class="border border-dark">--}}
    <p style="font-size: 18px">{{$post->body}}</p>
{{--        </span>--}}

            </div>

        <br>
            @if(!Auth::guest())
                @if (Auth::user()->id == $post->user_id)


        <a href="/blogs/{{$post->id}}/edit" class="btn btn-info">EDIT </a>
            <br>
            <br>
        {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST']) !!}
        {{{ Form::hidden('_method', 'DELETE') }}}
        {{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}}
        {!! Form::close() !!}
                @endif
            @endif

    </div>
@endsection
@section('comments')
    <div class="comments well">
        <h1>COMMENTS</h1>
        @if (count($post->comments)==0)
            <h5>No Comments:(</h5>
        @endif
        @foreach($post->comments as $comment)
            <div class="card">
                <article>

                    <li class="list-group-item">


                            <strong>
                                {{$comment->fname}}  {{$comment->lname}}: &nbsp;

                            </strong>
                            {{$comment->body}} &nbsp;
                            (
                            {{$comment->created_at->diffForHumans() }})



                    </li>


                </article>


            </div>

        @endforeach
        <div class="card" style="padding: 10px">
            <br>
            <br>
            <h3>Add A Comment</h3>

            <div class="card-block">
                <form action="/blogs/{{$post->id}}/comments" method="POST">
                    {{csrf_field()}}

                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Your Comment here"></textarea>
                </div>
                    <div class="form-group">
                        {{{ Form::submit('Post', ['class' => 'btn btn-info']) }}}

                    </div>
                    @include('blogs.messages')
                </form>
            </div>

        </div>
    </div>


@endsection
