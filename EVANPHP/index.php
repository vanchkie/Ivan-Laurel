<?php
$title= 'Index';
 require_once 'includes/header.php';
?>

  <h1 class="text-center"style="color: green;">Regestration for IT Conference</h1>

  <form>
  <div class="form-group">
      <label for="exampleFormControlInput1">First name</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Evangeline">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Last Name</label>
      <input type="surename" class="form-control"id="exampleFormControlInput1" placeholder="Laurel">
  </div>


  <form action="/action_page.php">
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime">
  <input type="submit">
</form>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text"for="inputGroupSelect01">Specialty</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>
  <select class="custom-select"id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>
</div>

<div class="form-group">
  <label for="exampleFormControlInput1">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<label for="exampleInputPassword1">Password</label>
 <input type="password" class="form-control" id="exampleInputPassword1">
</div>
<div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label"for="exampleCheck1">Check me out</label>
</div>
 <button type="sumbit" class="btn btn-primary btn-block">Submit</button>
</form>
<?php require 'includes/footer.php'?>

