  <div class="tab-pane" id="account">
    <h6>ACCOUNT SETTINGS</h6>
    <hr>
      <div class="form-group">
        <label for="username">Email Address</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="usernameHelp" placeholder="Enter your username" value="{{ $user_details->email }}">
        <small id="usernameHelp" class="form-text text-muted">After changing your email, your old email address will no longer recieve our notifications.</small>
      </div>

      <hr>
      <div class="form-group">
        <label class="d-block text-danger">Delete Account</label>
        <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
      </div>

      <button type="submit" class="btn btn-primary">Update Email <i class="fa fa-save ml-2"></i></button>

  </div>
