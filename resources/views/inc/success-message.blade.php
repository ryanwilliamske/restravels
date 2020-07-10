
@if (session('toast_success'))
<script>
   swal("{{ session('toast_success') }}");
</script>
@endif
<!--
    The following code snippet is aimed at automaticlly displaying error
    messages if any once a user enters a value less than 3 characters
    or any other error in the entire project
-->

@if (count($errors) > 0)
    
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger w-100">
             <p class="d-flex justify-content-center">
                 {{  $error }}
             </p>
         </div>
     @endforeach 

@endif

@if (session('error'))

        <div class="alert alert-danger w-100">
          <p class="d-flex justify-content-center"> {{ session('error') }} </p>
        </div>
    
@endif