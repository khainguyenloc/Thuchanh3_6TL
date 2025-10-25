@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Câu chuyện Hạt cà phê - 6TL Roastery Coffee')

@section('content')
<section style="max-width:1000px;margin:40px auto;padding:20px;font-family:'Poppins',sans-serif;color:#3b2f2f;line-height:1.8;">
    
    <h1 style="text-align:center;margin-bottom:30px;color:#4a2e0f;">Câu chuyện Hạt Cà Phê</h1>
    <p style="text-align:center;color:#6a5b50;margin-bottom:50px;">
        Mỗi hạt cà phê đều kể một câu chuyện riêng – về vùng đất, khí hậu và đôi bàn tay cần mẫn đã nuôi dưỡng nó.
    </p>

    {{-- Hạt Sao Chổi --}}
    <div style="display:flex;align-items:center;gap:30px;margin-bottom:50px;background:#fff7f3;padding:20px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.06);">
        <div style="flex:1;">
            <img src="{{ asset('images/ethiopia.jpg') }}" alt="Ethiopia coffee" 
                 style="width:100%;border-radius:10px;object-fit:cover;max-height:250px;">
        </div>
        <div style="flex:1;">
            <h2 style="margin:0 0 10px 0;color:#5a3b1e;">Hạt Sao Chổi (Ethiopia)</h2>
            <p><strong>Nguồn gốc:</strong> Yirgacheffe, Ethiopia</p>
            <p><strong>Ghi chú hương vị:</strong> Hương hoa nhài, vị chua thanh của quả mọng, 
               mang đến trải nghiệm tinh tế và tươi sáng – đặc trưng của vùng đất Ethiopia.</p>
        </div>
    </div>

    {{-- Hạt Thiên Thạch --}}
    <div style="display:flex;align-items:center;gap:30px;margin-bottom:50px;background:#f9f7f2;padding:20px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.06);flex-direction:row-reverse;">
        <div style="flex:1;">
            <img src="{{ asset('images/colombia.jpg') }}" alt="Colombia coffee" 
                 style="width:100%;border-radius:10px;object-fit:cover;max-height:250px;">
        </div>
        <div style="flex:1;">
            <h2 style="margin:0 0 10px 0;color:#5a3b1e;">Hạt Thiên Thạch (Colombia)</h2>
            <p><strong>Nguồn gốc:</strong> Huila, Colombia</p>
            <p><strong>Ghi chú hương vị:</strong> Vị ngọt caramel, sô-cô-la hòa quyện cùng hương cam nhẹ, 
               tạo nên tách cà phê ấm áp và cân bằng tuyệt hảo.</p>
        </div>
    </div>


</section>
=======
@section('title','Câu chuyện Hạt cà phê - ZZZ Roastery Coffee')

@section('content')
    <h2>Câu chuyện Hạt cà phê</h2>
    @foreach($beans as $b)
        <div style="display:flex; gap:18px; margin-bottom:18px; align-items:center; background:#fff; padding:12px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
            <div style="flex:0 0 240px;">
                <img src="{{ asset($b['image']) }}" alt="{{ $b['name'] }}" style="width:100%; height:180px; object-fit:cover; border-radius:6px;">
            </div>
            <div style="flex:1; text-align:left;">
                <h3 style="margin-top:0">{{ $b['name'] }}</h3>
                <p><strong>Nguồn gốc:</strong> {{ $b['origin'] }}</p>
                <p><strong>Ghi chú hương vị:</strong> {{ $b['notes'] }}</p>
            </div>
        </div>
    @endforeach
>>>>>>> ec22b84 (feat: Tạo layout chính với header và footer)
@endsection
