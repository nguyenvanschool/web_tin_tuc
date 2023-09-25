
<!-- begin secondnav -->
        <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php"><i class="bi bi-house"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                            while($row1 = mysqli_fetch_array($loaitin)){
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="?controller=tintuc&action=getTinTucByLoaiTin&id=<?php echo $row1['idloaitin']; ?>"><?php echo $row1['tenloaitin']; ?></a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div> 
        </nav>
        <!-- end secondnav -->

        <!-- begin slider -->
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="?controller=tintuc&action=chitiet&id=<?php echo $tintucmoinhat[0][0]; ?>">
                        <img id="image" src="public/image/<?php echo $tintucmoinhat[0][6]; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5><?php echo $tintucmoinhat[0][3]; ?></h5>
                            <p><?php echo $tintucmoinhat[0][4]; ?></p>
                        </div>
                    </a>
            </div>
            <div class="carousel-item">
                <a href="?controller=tintuc&action=chitiet&id=<?php echo $tintucmoinhat[1][0]; ?>">
                <img id="image" src="public/image/<?php echo $tintucmoinhat[1][6]; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5><?php echo $tintucmoinhat[1][3]; ?></h5>
                    <p><?php echo $tintucmoinhat[1][4]; ?></p>
                </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="?controller=tintuc&action=chitiet&id=<?php echo $tintucmoinhat[2][0]; ?>">
                    <img id="image" src="public/image/<?php echo $tintucmoinhat[2][6]; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5><?php echo $tintucmoinhat[2][3]; ?></h5>
                        <p><?php echo $tintucmoinhat[2][4]; ?></p>
                    </div>
                </a>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
        <!-- end slider  -->

        <div class="mx-auto p-2" style="width: 200px;"></div>

    <!-- begin content -->
    <div class="container">
    <div class="row content">
            <!-- begin Card -->
            <div class="col-lg-8">
                <div id="card-group" class="card-group">
                    <?php
                    if(isset($data)){
                        echo "hello";
                    }else{
                        while($row2 = mysqli_fetch_array($tintuc)){
                            ?>
                    <div id="card" class="card">
                        <img id="image__card" src="public/image/<?php echo $row2['hinhanh'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row2['tieude'];?></h5>
                            <p class="card-text"><?php echo $row2['tomtat']; ?></p>
                        </div>
                        <div class="card-button">
                            <a class="btn btn-primary btn-block" href="?controller=tintuc&action=chitiet&id=<?php echo $row2['idtintuc']; ?>">Xem tin tức</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary ">
                                Cập nhật lúc:
                                <?php echo date("H:i:s D-m-y", strtotime($row2['ngaydang']));?>
                            </small>
                        </div>
                    </div>
                            <?php
                        }
                    }
                    ?>
                    
                </div>
                <div class="mx-auto p-5" style="width: 200px;"></div>
                <!-- <div class="page">
                    <?php
                    $i = 1;
                    echo "<p>Trang: </p>";
                    for($i = 1; $i <= $tintuc_button; $i++){
                        echo '<a href="index.php?trang='.$i.'">'.$i.'</a>';
                    }
                    ?>
                </div> -->
            </div>
            <!-- end card  -->
            <!-- begin sidebar  -->
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
                            <small class="text-body-secondary ">
                                Lượt xem:
                                <?php echo $row3['views'];?>
                            </small>
                            <div class="break"></div>
                        </div>
                    </li>
                    <!-- end item -->
                            <?php
                        }
                    ?>
                </ul>           
            </div>
            <!-- end sidebar  -->
        </div>
    <!-- end content -->
    </div>

