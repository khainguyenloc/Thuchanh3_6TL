@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Trang chủ - 6TL Roastery Coffee')

@section('content')
<style>
    /* Hero (banner đầu trang) */
    .hero {
        background: linear-gradient(135deg, #fff8f5, #f8f5f2);
        text-align: center;
        padding: 60px 20px;
        border-radius: 12px;
        margin-bottom: 40px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .hero h1 {
        font-family: 'Merriweather', serif;
        font-size: 2.2rem;
        font-weight: 700;
        color: #4b2e23;
        margin-bottom: 12px;
    }
    .hero p {
        font-size: 1.05rem;
        color: #6f5f5f;
        margin: 0;
    }

    /* Featured Section */
    .featured-section {
        text-align: center;
        margin-top: 20px;
    }
    .featured-section h2 {
        font-family: 'Merriweather', serif;
        font-weight: 700;
        color: #5c3a21;
        margin-bottom: 10px;
    }
    .featured-section p.subtitle {
        color: #777;
        margin-bottom: 25px;
    }

    /* Card nhỏ gọn */
    .coffee-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 8px rgba(0,0,0,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 260px;
        margin: 0 auto;
    }
    .coffee-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 14px rgba(0,0,0,0.12);
    }
    .coffee-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .coffee-card .card-body {
        padding: 12px;
    }
    .coffee-card h5 {
        font-size: 1.1rem;
        margin: 0;
        color: #3b2f2f;
        font-weight: 600;
    }
    .coffee-card p {
        margin: 6px 0;
        font-size: 0.9rem;
        color: #666;
    }
    .coffee-card .price {
        color: #b45f06;
        font-weight: bold;
        margin-top: 4px;
        font-size: 0.95rem;
    }
    .coffee-card a {
        text-decoration: none;
        color: #6b4f4f;
        font-size: 0.9rem;
    }
    .coffee-card a:hover {
        color: #b45f06;
        text-decoration: underline;
    }

    /* Grid gọn gàng */
    .featured-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        max-width: 900px;
        margin: 0 auto;
    }
</style>

<!-- Hero Section -->
<section class="hero">
    <h1>Chào mừng đến với 6TL Roastery Coffee</h1>
    <p>Thưởng thức hương vị cà phê đậm đà – tinh tế – chuẩn gu người yêu cà phê.</p>
</section>

<!-- Featured Drinks -->
<section class="featured-section container">
    <h2>Món nước nổi bật</h2>
    <p class="subtitle">Hương vị được yêu thích nhất tại 6TL Roastery Coffee</p>

    <div class="featured-grid">
        @foreach($featured as $d)
            <div class="coffee-card">
                <img src="{{ asset($d['image']) }}" alt="{{ $d['name'] }}">
                <div class="card-body">
                    <h5>{{ $d['name'] }}</h5>
                    <p>{{ $d['description'] }}</p>
                    <p class="price">{{ number_format($d['price']) }} VND</p>
                    <a href="{{ route('menu.show', $d['id']) }}">Chi tiết →</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
=======
@section('title','Trang chủ - ZZZ Roastery Coffee')

@section('content')
    <section style="text-align:center; padding:30px; background:linear-gradient(120deg,#fff3f3,#f0f6ff); border-radius:12px;">
        <h1>Chào mừng đến với ZZZ Roastery Coffee</h1>
        <p>Thưởng thức hương vị cà phê được lựa chọn kỹ càng.</p>
    </section>

    <section style="margin-top:24px;">
        <h2>Món nước nổi bật</h2>
        <div style="display:flex; gap:18px; flex-wrap:wrap;">
            @foreach($featured as $d)
                <div style="width:30%; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,0.08); border-radius:8px; overflow:hidden;">
                    <img src="{{ asset($d['image']) }}" alt="{{ $d['name'] }}" style="width:100%; height:160px; object-fit:cover;">
                    <div style="padding:12px;">
                        <h3 style="margin:0">{{ $d['name'] }}</h3>
                        <p style="margin:6px 0 0 0">{{ $d['description'] }}</p>
                        <p style="margin:8px 0 0 0; font-weight:bold">{{ number_format($d['price']) }} VND</p>
                        <a href="{{ route('menu.show', $d['id']) }}" style="display:inline-block;margin-top:8px;text-decoration:none;color:#6b4f4f;">Chi tiết →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
>>>>>>> ec22b84 (feat: Tạo layout chính với header và footer)
@endsection
