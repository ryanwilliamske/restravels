@extends('layouts.app')

@section('content')
<div class="container contact">
{{!! Form::open(['action'=>'BlogController@store', 'method'=>'post', 'enctype'=>'multipart/form-data', 'class'=>'row']) !!}}
	{{csrf_field()}}
	<div class="col-md-3">
		<div class="contact-info">
			<h4>Submit a blog/review</h4>
		</div>
	</div>
	<div class="col-md-9">
		<div class="contact-form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="fname">Title</label>
				<div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Title" name="blog_title">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Category:</label>
				<div class="col-sm-10">
					<select class="form-control" names >
						<option value="volvo">Category</option>

						<!-- Populate with the service categories -->

					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Tags:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter Tags" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="comment">Body:</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="5" name="blog_body" id="blog_body"></textarea>
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</div>
	</div>
{{!! Form::close() !!}}
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
	var simplemde = new SimpleMDE(
		{

		}
	);
	simplemde.value();
	console.log('Script running');
</script>
@endsection