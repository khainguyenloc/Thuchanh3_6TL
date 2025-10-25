<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>404 - Không tìm thấy</title>
    <style>
        body { font-family: Arial; background:#fdecea; color:#6b2b2b; text-align:center; padding:60px; }
        .box { background:#f8cfcf; display:inline-block; padding:40px 60px; border-radius:12px; box-shadow:0 6px 18px rgba(0,0,0,0.06); }
        a { display:inline-block; margin-top:18px; text-decoration:none; color:#155724; background:#d4edda; padding:10px 16px; border-radius:8px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>404 - Không tìm thấy</h1>
        <p>{{ $code ?? 'Nội dung bạn tìm kiếm không tồn tại.' }}</p>
        <a href="{{ route('home') }}">⬅ Quay lại Trang chủ</a>
    </div>
</body>
</html>
