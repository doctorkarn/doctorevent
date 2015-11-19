<?php include("header.php"); ?>
<div class="container" style="margin-top: 100px;">


  <!-- event details -->
  <div class="row">
    <div class="col-lg-8">
      <h2>Create Event</h2>
      <form>
        <div class="form-group">
          <label for="exampleInputF">Event Name</label>
          <input type="text" class="form-control" id="exampleInputF" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputL">Event Location</label>
          <input type="text" class="form-control" id="exampleInputL" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputS">Start</label>
          <input type="text" class="form-control" id="exampleInputS" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputD">End</label>
          <input type="text" class="form-control" id="exampleInputD" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputG">Logo</label>
          <input type="file" class="form-control" id="exampleInputG" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleInputT">Event Description</label>
          <textarea class="form-control" id="exampleInputT" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputO">Organizer</label>
          <input type="text" class="form-control" id="exampleInputO" placeholder="">
        </div>

        <a href="index.php" type="submit" class="btn btn-success">Save</a>
      </form>
    </div>
    <div class="col-lg-4"></div>

  </div>

</div>
<?php include("footer.php"); ?>