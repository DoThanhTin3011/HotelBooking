<?php
  require('inc/essentials.php');
  require('inc/db_config.php');
  adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Admin - Không gian & Tiện ích</title>
  <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">KHÔNG GIAN & TIỆN ÍCH</h3>

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Không gian</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                <i class="bi bi-plus-square"></i> Thêm
              </button>
            </div>

            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody id="features-data">                 
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Tiện ích</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                <i class="bi bi-plus-square"></i> Thêm
              </button>
            </div>

            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tên</th>
                    <th scope="col" width="40%">Mô tả</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody id="facilities-data">                 
                </tbody>
              </table>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>
  

  <!-- Feature modal -->

  <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="feature_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Thêm không <gian></gian></h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label fw-bold">Tên</label>
              <input type="text" name="feature_name" class="form-control shadow-none" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">HỦY</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">GỬI</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Facility modal -->

  <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="facility_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Thêm tiện ích</h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label fw-bold">Tên</label>
              <input type="text" name="facility_name" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Icon</label>
              <input type="file" name="facility_icon" accept=".svg" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Mô tả</label>
              <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">HỦY</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">GỬI</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <?php require('inc/scripts.php'); ?>
  <script src="scripts/features_facilities.js"></script>

</body>
</html>