  <!-- Nội dung của trang -->
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>

                  <?php
                  if(isset($error)){
                    ?>
                  <p class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4"><?php echo $error ?></p>

                    <?php
                  }
                  ?>
                  
  
                  <form class="mx-1 mx-md-4" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">User Name</label>
                        <input name="tentaikhoan" id="form1Example1" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example2">Password</label>
                        <input name="matkhau" id="form1Example2" type="password" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example2">Repeat password</label>
                        <input name="repeatmatkhau" id="form1Example2" type="password" class="form-control" />
                    </div>

                    <input type="hidden" name="idquyen" id="" value="0">

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="mx-auto p-2" style="width: 200px;"></div>
                      <button type="submit" name="register" class="btn btn-primary btn-block">Đăng ký</button>
                      <!-- Submit button -->
                    </div>
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>