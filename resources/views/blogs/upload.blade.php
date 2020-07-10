<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blogcss/sth.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blogcss/blogextra.css')}}">

    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">

<div class="container contact card card-3 ">
    <div class="row ">
        <div class="col-md-3 card-heading " style="background: url('{{asset('images/blogimages/blog.png')}}'); background-repeat: no-repeat; background-size: cover">
            <div class="contact-info">
                <!-- <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/> -->

                <h4 style="color: white">Submit a blog/review</h4>
            </div>
        </div>

        <div class="col-md-9 border">
            <div class="contact-form">
                <div class="form-group ">


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
                        {{{ Form::submit('Submit', ['class' => 'btn btn-info']) }}}

                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>



</body>
</html>
