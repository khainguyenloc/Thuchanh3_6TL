@extends('layouts.app')

@section('title', $drink['name'] . ' - ZZZ Roastery Coffee')

@section('content')
    <div style="display:flex; gap:24px; align-items:flex-start;">
        <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" style="width:380px; height:300px; object-fit:cover; border-radius:8px;">
        <div>
            <h1>{{ $drink['name'] }}</h1>
            <p><strong>Giá:</strong> {{ number_format($drink['price']) }} VND</p>
            <p>{{ $drink['description'] }}</p>
            <a href="{{ route('menu') }}" style="display:inline-block;margin-top:18px;text-decoration:none;color:#155724;background:#d4edda;padding:10px 16px;border-radius:8px;">⬅ Quay lại Menu</a>
        </div>
    </div>
@endsection
