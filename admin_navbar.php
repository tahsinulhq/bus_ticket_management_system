<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <div class="container">
    <a href="#" class="navbar-brand">BTMS</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-home"><a href="./index.php?page=home" class="nav-link">Home</a></li>
        <li class="nav-schedule"><a href="./index.php?page=pages/bus_pages/schedule" class="nav-link">Schedule</a></li>
        <li class="nav-booked"><a href="./index.php?page=pages/bus_pages/booked" class="nav-link">Booked List</a></li>

        <!-- dropdown option -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" i d="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Maintenance</a>

          <!-- dropdown contents -->
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="./index.php?page=pages/bus_pages/bus">Bus List</a></li>
            <li><a class="dropdown-item" href="./index.php?page=pages/bus_pages/location">Location List</a></li>
          </ul>
        </li>
        
        <!-- dropdown option -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" i d="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['login_name'] ?> </a>

          <!-- dropdown contents -->
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="./index.php?page=user">Users</a></li>
            <li><a class="dropdown-item" href="javascript:void(0)" id="manage_account">Manage Account</a></li>
            <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function() {
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
    if (page != '') {
      $('#top-nav li').removeClass('active')
      $('#top-nav li.nav-' + page).addClass('active')
    }
    $('#manage_account').click(function() {
      uni_modal('Manage Account', 'manage_account.php')
    })
  })
</script>