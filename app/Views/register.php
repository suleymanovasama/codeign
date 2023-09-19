<form method="post" action="<?= base_url("register") ?>">
<h1>Register here</h1>
    <label for="name" class="col-sm-2 col-form-label">Ad</label>
    <div class="col-sm-10">
      <input name="name" required type="text" class="form-control" id="name">
    

   
    <label for="surname" required class="col-sm-2 col-form-label">Soyad</label> 
      <input name="surname" type="text" class="form-control" id="surname">
    
      <label for="email" required class="col-sm-2 col-form-label">Email</label> 
      <input name="email" type="email" class="form-control" id="email">
    

      <label for="date" class="col-sm-2 col-form-label">Tarix</label> 
      <input name="birth_day" type="date" class="form-control" id="date" value="<?= date('m/d/Y') ?>">
    

  <div class="mb-3 row my-50">
    <label for="inputPassword" required class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
  </div>

  <div class="mb-3" ><input  type="submit"  value="Register" class="btn btn-primary"> </div>
  
  
  </form>