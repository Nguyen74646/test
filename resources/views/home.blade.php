<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hệ thống điểm danh sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">📚 Hệ thống điểm danh sinh viên</h1>
            <p class="text-muted">Quản lý sinh viên - Điểm danh - Thống kê</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <a href="{{ route('students.index') }}" class="btn btn-primary w-100">📄 Danh sách sinh viên</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('students.create') }}" class="btn btn-success w-100">➕ Thêm sinh viên</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('attendance.index') }}" class="btn btn-warning w-100">✅ Bắt đầu điểm danh</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('statistics.index') }}" class="btn btn-info w-100">📊 Thống kê</a>
            </div>
        </div>
        <div class="container my-4">
  <div class="ratio ratio-16x9 rounded shadow">
    <iframe
      width="600"
      height="450"
      style="border:0;"
      loading="lazy"
      allowfullscreen
      referrerpolicy="no-referrer-when-downgrade"
      src="https://www.google.com/maps?hl=vi&q=10.369487010407688, 105.43263971546703&z=18&output=embed">
    </iframe>
  </div>
</div>

    </div>
</body>
</html>
