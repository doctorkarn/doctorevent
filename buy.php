<?php include("header.php"); ?>
<div class="container" style="margin-top: 100px;">


  <!-- event details -->
  <div class="row">
    <div class="col-lg-8">
      <h2>Complete Registration</h2>
      <form>
        <div class="form-group">
          <label for="exampleInputF">First Name</label>
          <input type="text" class="form-control" id="exampleInputF" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputL">Last Name</label>
          <input type="text" class="form-control" id="exampleInputL" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputE">Email address</label>
          <input type="email" class="form-control" id="exampleInputE" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputP">Phone Number</label>
          <input type="text" class="form-control" id="exampleInputP" placeholder="">
        </div>

        <a href="myticket.php" type="submit" class="btn btn-success">Complete</a>
      </form>
    </div>
    <div class="col-lg-4"></div>

  </div>

</div>
<?php include("footer.php"); ?>