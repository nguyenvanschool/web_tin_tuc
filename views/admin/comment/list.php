<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="?controller=admin&action=index" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=admin&action=loaitin" class="nav-link px-0 align-middle">
                            <i class="bi bi-collection"></i> <span class="ms-1 d-none d-sm-inline">Quản lý danh mục</span>
                        </a>
                    </li>
                    <li>
                        <a href="?controller=admin&action=tintuc" class="nav-link px-0 align-middle">
                            <i class="bi bi-body-text"></i> <span class="ms-1 d-none d-sm-inline">Quản lý tin tức</span></a>
                    </li>
                    <li>
                        <a href="?controller=admin&action=comment" class="nav-link px-0 align-middle ">
                            <i class="bi bi-chat-left-text"></i> <span class="ms-1 d-none d-sm-inline">Quản lý bình luận</span></a>
                    </li>
                </ul>
                <hr>
                <div id="admin-dropdown" class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                        <span class="d-none d-sm-inline mx-1"><?php echo $data['tentaikhoan'] ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?controller=user&action=logout">Đăng xuất</a></li>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col py-3">
        <center>
    <h1>Quản lý bình luận</h1>
  </center>
      <table class="table table__tintuc">
        <thead>
          <tr>
            <th scope="col">Thứ tự</th>
            <th scope="col">Nội dung bình luận</th>
            <th scope="col">Người bình luận</th>
            <th scope="col">Thời gian</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $thutu = 0;
          while($row3 = mysqli_fetch_array($comment)){
            $thutu++;
            ?>
            <tr>
              <th scope="row" style="text-align: center;"><?php echo $thutu; ?></th>
              <td>
              <div class="d-flex align-items-start">
            <div class="ms-3">
              <p class="fw-bold mb-1"><?php echo $row3['noidungcomment']; ?></p>
            </div>
          </div>
              </td>
              <td style="text-align: center;"><?php echo $row3['tentaikhoan']; ?></td>
              <td style="text-align: center;"><?php echo $row3['ngaycomment']; ?></td>
              <td style="text-align: center;">
              <?php
              if($row3['status'] == '0'){
                echo "Bình thường";
              }else{
                echo "Đã ẩn";
              }
              ?>
              </td>
              <td style="text-align: center;">
              <?php
              if($row3['status'] == '0'){
                ?>
                <a class="btn btn-secondary btn-lg btn-floating" href="?controller=admin&action=anComment&id=<?php echo $row3['idcomment'];?>"><i class="bi bi-eye-slash"></i></a>
                <?php
              }else{
                ?>
                <a class="btn btn-secondary btn-lg btn-floating" href="?controller=admin&action=hienComment&id=<?php echo $row3['idcomment'];?>"><i class="bi bi-eye"></i></a>
                <?php
              }
              ?>
                <a class="btn btn-danger btn-lg btn-floating" href="?controller=admin&action=xoaComment&id=<?php echo $row3['idcomment'];?>"><i class="bi bi-trash"></i></a>

              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
  </table>
    </div>
    </div>
</div>