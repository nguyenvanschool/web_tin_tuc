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
                <h1>Danh mục tin tức</h1>
                <a href="?controller=admin&action=themLoaiTin" class="btn btn-primary">Thêm danh mục</a>
            </center>
            <div class="mx-auto p-2" style="width: 200px;"></div>
        
            <table class="table align-middle mb-0 bg-white">
                <thead class="table-thead bg-light">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên loại tin</th>
                        <th>Thao tác</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php
                        $thutu = 0;
                        while($row1 = mysqli_fetch_array($loaitin)){
                            $thutu++;
                            ?>
                    <!-- begin  -->
                    <tr>
                        <td>
                            <div class="ms-3">
                                <p><?php echo $thutu;?></p>
                            </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-bold mb-1"><?php echo $row1['tenloaitin']; ?>
                        </td>
                        <td>
                            <a href="?controller=admin&action=suaLoaiTin&id=<?php echo $row1['idloaitin'];?>" class="btn btn-primary btn-lg btn-floating">
                                <i class="bi bi-pen-fill"></i>
                            </a>
                            <a href="?controller=admin&action=xoaLoaiTin&id=<?php echo $row1['idloaitin'];?>" class="btn btn-danger btn-lg btn-floating">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- end  -->
                            <?php
                        }
                        ?>
                </tbody>
            </table>
    </div>
    </div>
</div>
