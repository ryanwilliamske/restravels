<div class="tab-pane" id="blog">
    <small id="usernameHelp" class="form-text text-muted">You can Create your very own articles. The best articles may land you a free hamper on us</small>
    <hr>

  <div class="jumbotron">
     <h1 class="display-4">Hey Writer</h1>
     <p class="lead">“You can learn new things at any time in your life if you're willing to be a beginner. If you actually learn to like being a beginner, the whole world opens up to you.” “Allow yourself to be a beginner. No one starts off being excellent.”</p>
     <hr class="my-4">
     <p class="lead">
     <a class="btn btn-primary btn-lg" href="#" role="button">Create New Blog post &nbsp; <i class="fa fa-plus"></i></a>
     </p>
   </div>

   
<div class="card mb-5" style="width: 100%;">
  <div class="card-header">
   <h2> Your Blogs </h2>  
  </div>
  <ul class="list-group list-group-flush">
  @if ( count($blogs) > 0 )
  
    @foreach ($blogs as $blog)

      <li class="list-group-item"> 

          @if ($blog->user_id == Auth::id())
             
              <div class="row">

                <div class="col-8">
                    <strong><p>{{ $blog->title }}</p> </strong>
                </div>

                  <div class="col-2">
                      <a href="{{ route('blogs.edit', ['id' => Crypt::encrypt($blog->id)]) }} " class="btn btn-success">Edit <i class="fa fa-edit ml-3"></i></a>
                  </div>
   
                  <div class="col">
                          <form action="{{ route('dashboard', ['id' => Crypt::encrypt($blog->id)])  }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash ml-2"></i> </button>
                          </form>
                  </div>


              </div>
          @endif

      </li>
    @endforeach

    @else

        <li class="list-group-item"> 
              <strong><p> Sorry you have no blogs currently </p> </strong>
        </li>
      
  @endif


  </ul>
</div>
   

    
</div>