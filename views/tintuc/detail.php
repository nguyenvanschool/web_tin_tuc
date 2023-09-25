<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
<!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $tintuc[0][3];?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Cập nhật lúc <?php echo date("H:i:s D-m-y", strtotime($tintuc[0][2]));?></div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="index.php">Trang chủ</a>
                            <i class="bi bi-arrow-right-short"></i>
                            <a class="badge bg-secondary text-decoration-none link-light" href="?controller=tintuc&action=getTinTucByLoaiTin&id=<?php echo $idloaitin; ?>"><?php echo $loaitin['tenloaitin']; ?></a>
                            <i class="bi bi-arrow-right-short"></i>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?php echo $tintuc[0][3]; ?></a>
                            <p>Lượt xem: <?php echo $tintuc[0][8]; ?></p>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4" style="text-align: center;"><img class="img-fluid rounded" src="public/image/<?php echo $tintuc[0][6]; ?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $tintuc[0][5]; ?></p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <h1>Bình luận</h1>
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <?php
                                if(isset($_SESSION['tentaikhoan'])){
                                    ?>
                                <form method="post" class="mb-4">
                                    <textarea name="noidungcomment" class="form-control" rows="3" placeholder="Tham gia bình luận về tin tức này !"></textarea>
                                    <button type="submit" class="btn btn-primary" name="comment">Bình luận</button>
                                </form>
                                    <?php
                                }else{
                                    ?>
                                    <h3>Vui lòng đăng nhập để tham gia bình luận tin tức này</h3>
                                    <?php
                                }
                                ?>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <div class="ms-3">
                                    <?php
                                    while($row1 = mysqli_fetch_array($comment)){
                                        if($row1['status'] == '0'){
                                            ?>
                                        <div class="fw-bold"><?php echo $row1['tentaikhoan']; ?></div>
                                        <?php echo $row1['noidungcomment']; ?>
                                        <div class="text-muted fst-italic mb-2">Bình luận lúc <?php echo date("H:i:s D-m-y", strtotime($row1['ngaycomment']));?></div>
                                            <?php
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Tin nổi bật</li>
                    <?php
                        while($row3 = mysqli_fetch_array($tintucnoibat)){
                            ?>
                    <!-- item -->
                    <li class="list-group-item">
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="?controller=tintuc&action=chitiet&id=<?php echo $row3['idtintuc']; ?>">
                                    <img class="img-responsive" id="image__sidebar" src="public/image/<?php echo $row3['hinhanh']; ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a id="home-noibat-tieude" href="?controller=tintuc&action=chitiet&id=<?php echo $row3['idtintuc']; ?>"><b><?php echo $row3['tieude']; ?></b></a>
                            </div>
                            <p><?php echo $row3['tomtat']; ?></p>
                            <p>Lượt xem: <?php echo $row3['views']; ?></p>
                            <div class="break"></div>
                        </div>
                    </li>
                    <!-- end item -->
                            <?php
                        }
                    ?>
                </ul>           
                    </div>
                </div>
            </div>
        </div>
        </body>
</html>