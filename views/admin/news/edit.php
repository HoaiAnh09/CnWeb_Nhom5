<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Bài Viết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Sửa Bài Viết</h2>
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" value="Bài viết hiện tại">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Danh mục</label>
                <select class="form-select" id="category">
                    <option value="1">Tin tức</option>
                    <option value="2" selected>Giải trí</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea class="form-control" id="content" rows="5">Nội dung bài viết...</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>
</body>
</html>
