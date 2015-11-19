
    <!-- FOOTER -->
    
    <footer class="container marketing">
      <hr/>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      $('body').mousemove(function(e){
        var amountMovedX = 0;
        var amountMovedY = (e.pageY * -1 / 6);
        $(this).css('background-position', 'right ' + amountMovedY + 'px');
      });
    </script>

  </body>
</html>
