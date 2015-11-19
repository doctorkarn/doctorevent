<?php include("header.php"); ?>
<div class="container" style="margin-top: 100px; max-width: 400px;">

            <div id="notification">
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['status']) ) {
                if($_GET['status'] == "all" || $_GET['status'] == "success") echo '<div class="alert alert-success" role="alert">{success_message}</div>';
                if($_GET['status'] == "all" || $_GET['status'] == "warning") echo '<div class="alert alert-warning" role="alert">{warning_message}</div>';
                if($_GET['status'] == "all" || $_GET['status'] == "error") echo '<div class="alert alert-danger" role="alert">{error_message}</div>';
                if($_GET['status'] == "all" || $_GET['status'] == "info") echo '<div class="alert alert-info" role="alert">{info_message}</div>';
              }
            ?>
            </div>

            <form class="form-signin" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <h2>Sign Up</h2>

              <label for="inputUsername" class="sr-only">Username</label>
              <input type="email" id="inputUsername" name="inputUsername" class="form-control input-lg" 
                placeholder="Username" value="" required>

              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="inputPassword" class="form-control input-lg" 
                placeholder="Password" value="" required>

              <br/>
              <button type="submit" class="btn btn-lg btn-success btn-block" >Sign Up</button>

            </form>

</div>
<?php include("footer.php"); ?>