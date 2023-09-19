
<form method="post" action="<?= base_url("login") ?>">

      <label for="email" class="col-sm-2 col-form-label">Email</label> 
      <input name="email" type="email" class="form-control" id="email">
    
    
  <div class="mb-3 row my-50">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3" ><input  type="submit"  value="Login" class="btn btn-primary"> </div>
  
  
  </form>