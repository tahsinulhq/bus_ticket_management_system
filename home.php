<section id="bg-bus" class="d-flex align-items-center">
  <div class="container">
    <?php if (!isset($_SESSION['login_id'])) : ?>
          
      <center><button class="btn btn-info btn-lg" type="button" id="book_now">Book Now</button></center>
    <?php else : ?>

      <!-- Admin Home section -->
      <section class="admin-home p-5" id="ad">
        <div class="container ">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2 p-2">
              <img src="assets/img/work.svg" alt="... " class="img-fluid " id="work-img">

            </div>
            <div class="col-lg-6 order-2 order-lg-2 p-4">
              <div class="title">

              </div>
              <div class="exp-item d-flex flex-column flex-md-row mb-5">
                <div class="exp-content p-5">
                  <h4 class="subheading1">Welcome, <?php echo $_SESSION['login_name'] ?>.</h4>

                  <div class="row p-2">
                    <div class="cardcols col-sm">
                      <div class="card mb-2">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-3">
                            Booked
                          </h5>
                          <h5 class="card-title mb-3">
                            11
                          </h5>

                        </div>
                      </div>
                    </div>

                    <div class="cardcols col-sm">
                      <div class="card mb-2">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-3">
                            Buses
                          </h5>
                          <h5 class="card-title mb-3">
                            4
                          </h5>
                        </div>
                      </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
      </section>
    <?php endif; ?>
  </div>
</section>
<script>
  $('#book_now').click(function() {
    uni_modal('Find Schedule', 'book_filter.php')
  })
</script>