<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            BTMS</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
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

                <li class="nav-contact">
                    <a href="./index.php?page=contact" class="nav-link">Contact</a>
                </li>

                <li class="nav-login">
                    <a href="./admin.php" class="btn btn-outline-secondary">Login</a>
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