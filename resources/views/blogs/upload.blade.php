<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blogcss/sth.css')}}">

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container contact">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <!-- <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/> -->

                <h4>Submit a blog/review</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">

                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @include('blogs.messages')



                    <div class="col-sm-10">
                        {{ Form::label('title', 'Title', ['class' => 'control-label']) }}
                        {{ Form::text('title', '', ['class' => 'form-control'])}}
                    </div>
                </div>


                <div class="form-group">

                    <div class="col-sm-10">
                        {{ Form::label('body', 'Body', ['class' => 'control-label']) }}
                        {{ Form::textarea('body', '', ['class' => 'form-control', 'id' => 'summary-ckeditor'])}}
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-10">
                        {{Form::file('cover_image')}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{{ Form::submit('Submit', ['class' => 'btn btn-default']) }}}

                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>



</body>
</html>
