<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blogcss/sth.css')}}">



    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container contact">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <!-- <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/> -->

                <h4>Edit Blog</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">

                    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                    @include('blogs.messages')



                    <div class="col-sm-10">
                        {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
                        {{ Form::text('title', $post->title, ['class' => 'form-control'])}}
                    </div>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label class="control-label col-sm-2" for="email">Category:</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        {{{ Form::select('category', ['services','review','experiences','travel','complaints'] , 'services', ['class' => 'form-control']) }}}--}}

{{--                        --}}{{--                            <select class="form-control" >--}}
{{--                        --}}{{--								<option value="volvo">Category</option>--}}
{{--                        --}}{{--								<option value="saab">Category</option>--}}
{{--                        --}}{{--								<option value="mercedes">Category</option>--}}
{{--                        --}}{{--								<option value="audi">Category</option>--}}
{{--                        --}}{{--							</select>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group">

                    {{--                    <div class="col-sm-10">--}}
                    {{--                        {{ Form::label('tags', 'Tags', ['class' => 'control-label']) }}--}}
                    {{--                        {{ Form::text('tags', $post->tags, ['class' => 'form-control'])}}--}}
                    {{--                    </div>--}}
                </div>
                <div class="form-group">

                    <div class="col-sm-10">
                        {{ Form::label('body', 'Body', ['class' => 'control-label']) }}
                        {{ Form::textarea('body', $post->body, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-10">
                        {{Form::file('cover_image')}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{{ Form::hidden('_method', 'PUT') }}}
                        {{{ Form::submit('Submit', ['class' => 'btn btn-default']) }}}

                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


</body>
</html>
