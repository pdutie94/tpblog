
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Danh sách bài viết
        <a href="?controller=post&action=edit&post_id=0">Thêm</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Trạng thái</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Người tạo</th>
                    <th>Lượt xem</th>
                    <th>Đánh giá</th>
                    <th>Cập nhật</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Trạng thái</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Người tạo</th>
                    <th>Lượt xem</th>
                    <th>Đánh giá</th>
                    <th>Cập nhật</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($list as $k => $post) : ?>
                <tr>
                    <td><?php echo ++$k; ?></td>
                    <td><?php echo $post['publish']; ?></td>
                    <td><?php echo $post['image']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['user_id']; ?></td>
                    <td><?php echo $post['hit']; ?></td>
                    <td><?php echo $post['rate']; ?></td>
                    <td><?php echo $post['updated_at']; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
