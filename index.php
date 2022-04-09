<?php
if ((isset($_GET['module'])) && ($_GET['module'] === 'ctrl_car')) {
  include("views/pages/top_page_car.html");
} else if ((isset($_GET['module'])) && ($_GET['module'] === 'ctrl_shop')) {
  include("views/pages/top_page_shop.html");
} else if ((isset($_GET['module'])) && ($_GET['module'] === 'ctrl_login')) {
  include("views/pages/top_page.html");
} else if ((isset($_GET['module'])) && ($_GET['module'] === 'ctrl_exceptions')) {
  include("views/pages/top_page.html");
} else {
  include("views/pages/top_page.html");
  include("views/pages/top_page_home.html");
}
?>
<div id="wrapper">
  <div id="header">
    <?php
    include_once('views/pages/header.html');
    ?>
  </div>
  <div id="menu">
    <?php
    include_once('views/pages/menu.html');
    ?>
  </div>
  <div id="pages">
    <?php
    include_once('views/pages/pages.php');
    ?>
  </div>
  <div id="footer">
    <?php
    include_once('views/pages/footer.html');
    ?>
  </div>
</div>

<?php
include_once('views/pages/debug.php');
?>