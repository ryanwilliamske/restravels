<div class="tab-pane" id="security">
   <h6>SECURITY SETTINGS</h6>
   <hr>
   <form>
     <div class="form-group">
       <label class="d-block">Change Password</label>
       <input type="password" name="password" class="form-control mt-1" placeholder="New password" value="{{ old('confirm') }}">
     <input type="password" name="confirm" class="form-control mt-1" placeholder="Confirm new password" value="{{ old('confirm') }}">
     </div>
   
   <hr>
   

     <div class="form-group">
       <label class="d-block">Two Factor Authentication</label>
       <button class="btn btn-info" type="button">Enable two-factor authentication</button>
       <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
     </div>

     <button type="submit" class="btn btn-primary">Change Password</button>
     
   </form>
    
 </div>