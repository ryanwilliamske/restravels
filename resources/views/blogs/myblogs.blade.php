@extends('layouts.blogsfinallayout')

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





                        @if (count($posts)>0)

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
                            <h5>You have no posts. Create one</h5>
                        @endif
                            <a href="/upload" class="btn btn-primary">CREATE BLOG</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
