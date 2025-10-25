<header class="site-header">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;">
        <div>
            <h2 style="margin:0">ZZZ Roastery Coffee</h2>
            <small>Thiết kế & Lập trình web - Lớp 23CNTT</small>
        </div>
        <nav class="nav">
            <a href="{{ route('home') }}" class="{{ (isset($activePage) && $activePage=='home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ (isset($activePage) && $activePage=='about') ? 'active' : '' }}">About</a>
            <a href="{{ route('menu') }}" class="{{ (isset($activePage) && $activePage=='menu') ? 'active' : '' }}">Menu</a>
            <a href="{{ route('beans') }}" class="{{ (isset($activePage) && $activePage=='beans') ? 'active' : '' }}">Câu chuyện Hạt</a>
            <a href="{{ route('contact') }}" class="{{ (isset($activePage) && $activePage=='contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </div>
</header>
