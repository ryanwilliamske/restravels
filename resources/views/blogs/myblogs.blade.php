@extends('layouts.bloglayout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">MY BLOGS</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <a href="/upload" class="btn btn-primary">CREATE BLOG</a>


                        @if (count($posts)>0)
                            <h3>My Posts</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                         Date
                                    </th>
                                </tr>


                            @foreach($posts as $post)
                                <tr>
                                <th><a href="/blogs/{{$post->id}}">{{$post->title}}</a></th>
                                    <th>{{$post->created_at}}</th>
                                </tr>
                            @endforeach
                            </table>
                            @else
                            <h3>YOU HAVE NO POSTS</h3>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
