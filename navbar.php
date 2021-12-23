<!-- <header id="header" class="fixed-top"> -->
 
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand">BTMS</a>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu"
            >
            <span class="navbar-toggler-icon"></span>
        </button>


            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-home">
                        <a href="./index.php?page=home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-schedule">
                        <a href="./index.php?page=pages/bus_pages/schedule" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-login">
                        <a href="./admin.php" class="btn btn-outline-secondary">Login</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        
    </nav>

    <!-- <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="./index.php?page=home">BMS</a></h1>

      <nav class=" nav-menu d-none d-lg-block" id='top-nav'>

        <ul>
          <li class="nav-home"><a href="./index.php?page=home">Home</a></li>
           <li class="nav-schedule"><a href="./index.php?page=pages/bus_pages/schedule">Schedule</a></li>
           <li class="nav-login"><a href= "./admin.php" class="btn btn-outline-light">Login</a></li>  
              
        </ul>
      </nav>


    </div> -->
  <!-- </header> -->

  <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>';
      if(page != ''){
        $('#top-nav li').removeClass('active')
        $('#top-nav li.nav-'+page).addClass('active')
      }
      $('#manage_account').click(function(){
      uni_modal('Manage Account','manage_account.php')
  })
    })

  </script>