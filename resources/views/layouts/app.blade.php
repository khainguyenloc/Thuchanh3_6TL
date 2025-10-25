<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>6TL Roastery Coffee</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="container" style="min-height:70vh;">
        @yield('content')
    </main>

=======
    <title>@yield('title', 'ZZZ Roastery Coffee')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Basic styling - bạn có thể chuyển CSS này ra file public/css */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background:#fff; color:#333; }
        .site-header { background:#6b4f4f; color: #fff; padding: 16px 24px; }
        .nav a { color: #f7f1f1; text-decoration:none; margin-right:14px; padding:6px 10px; border-radius:6px; }
        .nav a.active { background:#eabcbc; color:#6b4f4f; font-weight:600; }
        .container { max-width: 1100px; margin: 30px auto; padding: 0 16px; }
        .footer { background:#f1f1f1; padding:20px; text-align:center; margin-top:40px; color:#666; }
    </style>
</head>
<body>
    @include('partials.header', ['activePage' => $activePage ?? ''])
    <main class="container">
        @yield('content')
    </main>
>>>>>>> ec22b84 (feat: Tạo layout chính với header và footer)
    @include('partials.footer')
</body>
</html>
