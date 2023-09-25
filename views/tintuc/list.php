<div class="container">
<div class="mx-auto p-2" style="width: 200px;"></div>

<!-- begin content -->
        <h2>Danh mục: <?php echo $loaitinbyid['tenloaitin']; ?></h2>
        <div class="row content">
            <!-- begin Card -->
            <div class="col-lg-8">
                <div id="card-group" class="card-group">
                    <?php
                        while($row2 = mysqli_fetch_array($data)){
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
                    ?>
                </div>
            </div>
            <!-- end card  -->
    
                <!-- begin sidebar  -->
                <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Danh mục</li>
                    <?php
                        while($row3 = mysqli_fetch_array($loaitin)){
                            ?>
                    <!-- item -->
                    <li id="list-group-item" class="list-group-item">
                        <div class="row" style="margin-top: 10px;">
                            <a id="list-group-item-categories" href="?controller=tintuc&action=getTinTucByLoaiTin&id=<?php echo $row3['idloaitin']; ?>"><?php echo $row3['tenloaitin']; ?></a>
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
            </div>
        <div class="mx-auto p-2" style="width: 200px;"></div>
