<?php include('../../header.php'); ?>

<div class="container mt-5">
    <h1>Dashboard - Quản Trị Viên</h1>
    <p>Chào mừng bạn đến với trang quản trị. Đây là nơi quản lý các bài viết tin tức.</p>

    <!-- Nút Đăng Xuất -->
    <a href="logout.php" class="btn btn-danger mb-4">Đăng Xuất</a>

    <!-- Quản lý tin tức -->
    <div class="row">
        <a href="news/add.php" class="btn btn-primary">Thêm tin tức</a>
    </div>

    <!-- Danh sách tin tức -->
    <h3 class="mt-4">Danh sách tin tức</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Ngày tạo</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <!-- Danh sách tin tức sẽ được hiển thị ở đây -->
            </tbody>
        </table>
    </div>
</div>

<?php include('../../footer.php'); ?>
