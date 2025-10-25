@extends('layouts.app')

<<<<<<< HEAD
@section('title','Menu - 6TL Roastery Coffee')

@section('content')
    <div style="text-align:center; margin-bottom:40px;">
        <h2 style="font-size:2rem; color:#4B2E2B; font-weight:700;">Thực đơn của 6TL Roastery</h2>
        <p style="color:#7B5E57; font-size:1.1rem; max-width:700px; margin:12px auto;">
            Mỗi ly cà phê đều được pha chế tỉ mỉ từ những hạt cà phê chất lượng cao, mang đến trải nghiệm tinh tế cho từng khẩu vị.
        </p>
    </div>

    <div style="display:flex; gap:24px; flex-wrap:wrap; justify-content:center;">
        @foreach($drinks as $d)
            <div style="
                width:300px;
                background:#fff;
                border-radius:14px;
                overflow:hidden;
                box-shadow:0 4px 12px rgba(0,0,0,0.08);
                transition:transform 0.3s ease, box-shadow 0.3s ease;
            "
            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 6px 16px rgba(0,0,0,0.12)';"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';">

                <img src="{{ asset($d['image']) }}" 
                     alt="{{ $d['name'] }}" 
                     style="width:100%;height:200px;object-fit:cover;">

                <div style="padding:16px;">
                    <h3 style="margin:0; color:#3E2723; font-size:1.25rem; font-weight:600;">
                        {{ $d['name'] }}
                    </h3>
                    <p style="margin:8px 0 12px; color:#6B4F4F; font-size:0.95rem;">
                        {{ $d['description'] }}
                    </p>
                    <p style="margin:6px 0; font-weight:bold; color:#8B4513;">
                        {{ number_format($d['price']) }} VND
                    </p>
                    <a href="{{ route('menu.show', $d['id']) }}" 
                       style="
                           display:inline-block;
                           margin-top:8px;
                           padding:8px 14px;
                           background:#6B4F4F;
                           color:#fff;
                           border-radius:6px;
                           font-size:0.9rem;
                           text-decoration:none;
                           transition:background 0.3s;
                       "
                       onmouseover="this.style.background='#8B5E3C';"
                       onmouseout="this.style.background='#6B4F4F';">
                        Xem chi tiết
                    </a>
=======
@section('title','Menu - ZZZ Roastery Coffee')

@section('content')
    <h2>Thực đơn</h2>
    <div style="display:flex; gap:18px; flex-wrap:wrap;">
        @foreach($drinks as $d)
            <div style="width:45%; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,0.06); border-radius:8px; overflow:hidden; margin-bottom:16px;">
                <div style="display:flex;">
                    <img src="{{ asset($d['image']) }}" alt="{{ $d['name'] }}" style="width:160px;height:120px;object-fit:cover;">
                    <div style="padding:12px; flex:1;">
                        <h3 style="margin:0">{{ $d['name'] }}</h3>
                        <p style="margin:6px 0;">{{ $d['description'] }}</p>
                        <p style="margin:6px 0; font-weight:bold">{{ number_format($d['price']) }} VND</p>
                        <a href="{{ route('menu.show', $d['id']) }}" style="text-decoration:none;color:#6b4f4f;">Xem chi tiết</a>
                    </div>
>>>>>>> ec22b84 (feat: Tạo layout chính với header và footer)
                </div>
            </div>
        @endforeach
    </div>
@endsection
