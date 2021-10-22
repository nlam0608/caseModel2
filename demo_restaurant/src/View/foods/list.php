<style>
    .card {
        margin-top:50px !important;

    }
</style>
<div class="row">
    <div class="col-2">
        <?php include_once "src/View/layout/sidebar.php"; ?>
    </div>
    <div class="col-9">
        <div class="card ">
            <div class="card-header">
                Danh Sách Thực Đơn
            </div>
<!--            <p style="margin-left: 40px ;margin-top: 20px"><a href="index.php?page=food&action=food-create" >-->
<!--                    <button class="btn btn-primary">Create Food</button>-->
<!--                </a></p>-->
            <div class="card-body row">
                <?php foreach ($foods as $food): ?>
                    <div class="card col-4 " >
                        <img class="card-img-top" src="img/<?php echo $food['image'] ?>">
                        <div class="card-body ">
                            <p><b><?php echo $food['id'] ?></b></p><br>
                            <p>Tên Món<b><?php echo $food['name'] ?></b></p><br>
                            <p>Giá :<b><?php echo $food['price'] ?></b> VND</p>
                        </div>
                        <p><input  type="checkbox" name="" ></p>
                        <p style="text-align: center"><a href="index.php?page=food&action=food-list&id=<?php echo $food['id'] ?>">
                                <button  type="button" class="btn btn-success">Chi Tiết Món Ăn</button>
                            </a>
                            <!--                    <a href="index.php?page=food&action=food-delete&id=--><?php //echo $food['id'] ?><!--">-->
                            <!--                        <button type="button" class="btn btn-danger">Xóa</button>-->
                            <!--                    </a>-->
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>



