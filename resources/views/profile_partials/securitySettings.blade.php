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
     <div class="form-group mt-5">
       <input type="text" name="phone" class="form-control mt-1" placeholder="Change Phone Number" value="{{ $user_details->phone }}">
     </div>
   
   <hr>
       
    <p class="small text-muted mt-2">Be sure to remember your current password for the next login.</p>
     

     <button type="submit" class="btn btn-primary">Update Security Settings</button>
     
   </form>
    
 </div>