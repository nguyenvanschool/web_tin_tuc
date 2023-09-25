
<!-- begin nav  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Tin tức</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if(isset($_SESSION["tentaikhoan"])){
                                ?>
                                <li><a class="dropdown-item" href=""><?php echo $_SESSION["tentaikhoan"];?></a></li>
                                <?php
                                if($_SESSION["idquyen"] == 1){
                                    ?>
                                    <li><a class="dropdown-item" href="?controller=admin&action=index">Quản lý</a></li>
                                    <?php
                                }
                                ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?controller=user&action=logout">Đăng xuất</a></li>
                                <?php
                            }else{
                                ?>
                                <li><a class="dropdown-item" href="?controller=user&action=login">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="?controller=user&action=register">Đăng ký</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" method="get">
                    <input type="hidden" name="controller" value="home">
                    <input type="hidden" name="action" value="search">
                    <input class="form-control me-2" type="text" name="key" placeholder="Tìm kiếm tin tức">
                    <button class="btn btn-outline-success" type="submit" >Tìm</button>
                </form>
                </div>
            </div>
        </nav>
        <!-- end nav  -->

        </body>
</html>