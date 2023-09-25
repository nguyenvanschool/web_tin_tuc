  <!-- Nội dung của trang -->
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Thay Đổi Danh Mục</p>
  
                  <form class="mx-1 mx-md-4" method="post">
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form1Example1">Tên danh mục</label>
                      <input name="tenloaitin" id="form1Example1" class="form-control" value="<?php echo $loaitin['tenloaitin']; ?>"/>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="mx-auto p-2" style="width: 200px;"></div>
                      <button type="submit" name="edit" class="btn btn-primary btn-block">Thay đổi</button>
                      <!-- Submit button -->
                    </div>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>