
  @csrf
  <div class="form-group">
    <label for="fullName">Full Names</label>
      <div class="row">

        <div class="col-6">

            <input type="text" class="form-control" id="fname" aria-describedby="fullNameHelp" placeholder="Enter your first name" name="fname" value="{{ $user_details->fname }} ">
        </div>
         
        <div class="col-6">

          <input type="text" class="form-control" id="lname" aria-describedby="fullNameHelp" placeholder="Enter your lastname" name="lname" value="{{ $user_details->lname  }} ">
          
        </div>

      </div>

    <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>

  </div>

  <div class="form-group">
    <label for="bio">Your Bio <small class="text-muted">(Optional)</small> </label>
    <textarea class="form-control autosize" id="bio" placeholder="Write Something about you" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;"> </textarea>
  </div>

  <div class="form-group">
    <label for="url">URL <small class="text-muted">(Optional)</small> </label>
    <input type="text" class="form-control" id="url" placeholder="Enter your website address" value="">
  </div>

  <div class="form-group">
    <label for="city">Location</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Enter your location" value="{{ $user_details->city }}">
  </div>

  <div class="form-group small text-muted">
    All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
  </div>
  
  <button type="submit" class="btn btn-primary">Update Profile <i class="fa fa-save ml-2"></i></button>
  <button type="reset" class="btn btn-light">Reset Changes</button>
