@extends('layouts.app')

@section('title','Contact - ZZZ Roastery Coffee')

@section('content')
    <h2>Liên hệ</h2>
    <div style="display:flex; gap:20px;">
        <div style="flex:1;">
<<<<<<< HEAD
            <p><strong>Địa chỉ:</strong> 193 Nguyễn Lương Bằng, Phường Hoà Khánh, Thành phố Đà Nẵng</p>
            <p><strong>Điện thoại:</strong> 0762743005</p>
            <p><strong>Email:</strong> 6tlcoffee@gmail.com</p>
=======
            <p><strong>Địa chỉ:</strong> 123 Đường Cà Phê, Thành phố</p>
            <p><strong>Điện thoại:</strong> 0123-456-789</p>
            <p><strong>Email:</strong> info@zzzroastery.example</p>
>>>>>>> ec22b84 (feat: Tạo layout chính với header và footer)
        </div>
        <div style="flex:1;">
            <form action="#" method="post">
                <label>Tên</label><br>
                <input type="text" name="name" style="width:100%; padding:8px; margin-bottom:8px;"><br>
                <label>Email</label><br>
                <input type="email" name="email" style="width:100%; padding:8px; margin-bottom:8px;"><br>
                <label>Nội dung</label><br>
                <textarea name="message" rows="5" style="width:100%; padding:8px;"></textarea><br>
                <button type="submit" style="margin-top:8px; padding:10px 16px; background:#6b4f4f; color:#fff; border:none; border-radius:6px;">Gửi</button>
            </form>
        </div>
    </div>
@endsection
