
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- ----------Data Table-------- -->
<script src="../dataTables/js/jquery.dataTables.min.js"></script>
<script src="../dataTables/js/dataTables.bootstrap.min.js"></script>
<!-- ---------SELECT-Picker------ -->
<script src="bootstrap-select/bootstrap-select.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

     <!---------Data Table----- -->
        <script>
            $('#mydata').dataTable();
        </script>



<!-- --------index background--------- -->
        <script>
            // SETTINGS
const ANIMATION_TIME = 3; // TIME BETWEEN CHANGES (SECONDS)

const COLORS = ["255, 105, 54", // "150, 166, 55"
              "244, 52, 107", // "111, 124, 21"
              "48, 222, 138", // "238, 248, 166"
              "135, 243, 52",
              "221, 221, 221"]; // "221, 221, 221"

// PROPERTIES
const squares = document.getElementsByClassName("square");

var ww = window.innerWidth; // WINDOW WIDTH
var wh = window.innerHeight; // WINDOW HEIGHT

var size = 0; // CURRENT SQUARE SIZE
var sizeLimit = 80; // SQUARE SIZE LIMIT

function generateSquare(square) {

  var x = 0,
  y = 0,
  c = 0,
  color = "",
  opacity = "";

  size = Math.round((Math.random() * size) + 10);

  x = Math.round((Math.random() * ww) + 0) - size;
  y = Math.round((Math.random() * wh) + 0) - size;

  c = Math.round((Math.random() * (COLORS.length - 1)) + 0);
  color = COLORS[c];
  opacity = Math.round((Math.random() * 10) + 1) / 10;

  squares[square].style.border = "15px solid rgba(" + color + ", " + opacity + ")";

  squares[square].style.borderRadius = Math.round(size / 3) + "px";

  squares[square].style.width = size + "px";
  squares[square].style.height = size + "px";

  squares[square].style.top = y + "px";
  squares[square].style.left = x + "px";

}

function init() {
  for(i = 0; i < squares.length; i++) {
    generateSquare(i);
  }
  
  setInterval(function() {
    var l = squares.length - 1;
    var nr = Math.round((Math.random() * l - 1) + 1);
    for(i = 0; i < nr; i++) {
      var a = Math.round((Math.random() * l - 1) + 1);
      generateSquare(a);
    }
  }, ANIMATION_TIME * 1000);
}

init();
</script>
<!-- -----Registration Tooltip----- -->
<script>
  $(function() {
    $('.required-icon').tooltip({
        placement: 'left',
        title: 'Registration'
        });
});

</script>

        <script>
                //Selectpicker------------
            $('.selectpicker').selectpicker();
        </script>
        <script>
            $(document).ready(function(){
      var $item_par_page = $(".pagination li")

      $item_par_page.click(function(){
        $item_par_page.removeClass("active");
        $(this).addClass("active");
      });
    });
        </script>



        
</body>
</html>
