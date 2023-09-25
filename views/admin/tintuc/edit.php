
  <!-- Nội dung của trang -->
  <section class="" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div id="themtintuc" class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sửa tin tức</p>
                  <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data">
                    <label for="">Danh mục</label>
                    <select class="form-select" aria-label="Default select example" name="loaitin">
                        <?php
                          while($row3 = mysqli_fetch_array($loaitin)){
                        ?>
                          <option value="<?php echo $row3['idloaitin'] ?>"><?php echo $row3['tenloaitin']?></option>
                        <?php
                    }  
                    ?>
                    </select>                   
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form1Example1">Tiêu đề</label>
                      <input name="tieude" type="text" id="form1Example1" class="form-control" value="<?php echo $tintuc["tieude"]?>"/>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form1Example1">Tóm tắt</label>
                      <textarea name="tomtat" type="text" id="form1Example1" class="form-control"><?php echo $tintuc['tomtat']; ?></textarea>
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example1">Nội dung</label>
                      <textarea name="noidung" type="text" id="editor1" class="form-control textarea"><?php echo $tintuc['noidung'];?></textarea>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Chọn ảnh</label>
                        <input name="hinhanh" type="file" id="form1Example1" class="form-control" />
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                        <img src="public/image/<?php echo $tintuc['hinhanh']; ?>"
                            class="img-fluid" alt="Sample image">
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