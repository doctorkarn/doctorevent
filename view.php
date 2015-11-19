<?php include("header.php"); ?>
<div class="container" style="margin-top: 100px;">

  <!-- heading & Logo -->
  <div class="row">
    <div class="col-lg-8">
      <h2>Event Name</h2>
      <p>Event Location</p>
      <p>23 Apr 2015, 10:00 PM</p>
      
    </div>
    <div class="col-lg-4">
      <img src="http://placehold.it/150x150/e7e7e7" />
    </div>
  </div>

  <!-- ticket info -->
  <div class="row">
    <div class="col-lg-8">
      <h3>Ticket Infomation</h3>
      <table class="table table-hover">
        <tr><th>Type</th><th>End</th><th>Price</th><th>Quantity</th></tr>
        <tr><td>Type A</td><td>3d 8h 45m</td><td>Free</td><td><input type="number" style="width:50px;"></td></tr>
        <tr><td>Type B</td><td>3d 8h 45m</td><td>$10</td><td><input type="number" style="width:50px;"></td></tr>
        <tr><td>Type C</td><td>3d 8h 45m</td><td>$25</td><td>Sold Out</td></tr>
      </table>
      <p style="text-align: right;"><a href="buy.php" class="btn btn-lg btn-success" >Buy Ticket</a></p>
    </div>
  </div>

  <!-- event details -->
  <div class="row">
    <div class="col-lg-8">
      <h3>Event Details</h3>
      <img src="http://placehold.it/600x300/e7e7e7" />
      <p></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus ex nec augue aliquet, id luctus erat tempus. Vivamus laoreet convallis congue. Nullam consequat enim et eros tristique, eu fringilla elit gravida. Donec elementum felis eu odio sollicitudin mollis. Nunc at purus eget est luctus porta ac a erat. In condimentum orci metus, pretium sollicitudin nibh condimentum in. Praesent egestas tincidunt nunc, sit amet vehicula enim sodales nec. Phasellus mattis lectus quis orci cursus molestie.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus ex nec augue aliquet, id luctus erat tempus. Vivamus laoreet convallis congue. Nullam consequat enim et eros tristique, eu fringilla elit gravida. Donec elementum felis eu odio sollicitudin mollis. Nunc at purus eget est luctus porta ac a erat. In condimentum orci metus, pretium sollicitudin nibh condimentum in. Praesent egestas tincidunt nunc, sit amet vehicula enim sodales nec. Phasellus mattis lectus quis orci cursus molestie.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dapibus ex nec augue aliquet, id luctus erat tempus. Vivamus laoreet convallis congue. Nullam consequat enim et eros tristique, eu fringilla elit gravida. Donec elementum felis eu odio sollicitudin mollis. Nunc at purus eget est luctus porta ac a erat. In condimentum orci metus, pretium sollicitudin nibh condimentum in. Praesent egestas tincidunt nunc, sit amet vehicula enim sodales nec. Phasellus mattis lectus quis orci cursus molestie.</p>
    </div>
  </div>

</div>
<?php include("footer.php"); ?>