<div class="card">
    <div class="card-header">
        Danh Sách Bàn
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Số bàn</th>
            <th>Loại bàn</th>
            <th>Trạng thái</th>
            <th>Tên khách hang</th>
            <th>Số điện thoại</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bookings as $booking): ?>
            <tr>
                <td><?php echo $booking['id'] ?></td>
                <td><?php echo $booking['type'] ?></td>
                <td><?php echo $booking['status'] ?></td>
                <td><?php echo $booking['customers'] ?></td>
                <td><?php echo $booking['phone'] ?></td>
                <td><a href="index.php?page=food&action=list&id=<?php echo $booking['id'] ?>"><button class="btn btn-info">Thực đơn</button></a></td>
                <td><a href><button class="btn btn-warning">Đặt bàn</button></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>


