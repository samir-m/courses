<?php include('includes/head.php') ?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-3">
    <?php
        if(isset($error))
        {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>'.$error.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      ?>
      <form method="post" action="<?php echo base_url(); ?>/login/authenticate">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Email Id</label>
          <input
            type="email"
            class="form-control"
            id="formGroupExampleInput"
            name="email"
          />
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label"
            >Password</label
          >
          <input
            type="password"
            class="form-control"
            id="formGroupExampleInput2"
            name="password"
          />
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      
    </div>
  </div>
</div>
<?php include('includes/end.php') ?>