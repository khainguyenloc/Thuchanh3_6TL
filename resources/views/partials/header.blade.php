<header class="site-header" style="background-color:#fff; border-bottom:1px solid #ddd; padding:15px 0;">
    <div class="container" style="max-width:1200px; margin:0 auto; display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; flex-direction:column;">
            <h2 style="margin:0; font-family:'Poppins', sans-serif; color:#3b2f2f;">6TL Roastery Coffee</h2>
            <small style="color:#777;">Thiết kế & Lập trình Web - Lớp 23CNTT</small>
        </div>

        <nav class="nav" style="display:flex; gap:25px; font-family:'Poppins', sans-serif;">
            <a href="{{ route('home') }}" 
               class="{{ (isset($activePage) && $activePage=='home') ? 'active' : '' }}" 
               style="text-decoration:none; color:#333; {{ (isset($activePage) && $activePage=='home') ? 'font-weight:bold; color:#b45f06;' : '' }}">
               Home
            </a>

            <a href="{{ route('about') }}" 
               class="{{ (isset($activePage) && $activePage=='about') ? 'active' : '' }}" 
               style="text-decoration:none; color:#333; {{ (isset($activePage) && $activePage=='about') ? 'font-weight:bold; color:#b45f06;' : '' }}">
               About
            </a>

            <a href="{{ route('menu') }}" 
               class="{{ (isset($activePage) && $activePage=='menu') ? 'active' : '' }}" 
               style="text-decoration:none; color:#333; {{ (isset($activePage) && $activePage=='menu') ? 'font-weight:bold; color:#b45f06;' : '' }}">
               Menu
            </a>

            <a href="{{ route('beans') }}" 
               class="{{ (isset($activePage) && $activePage=='beans') ? 'active' : '' }}" 
               style="text-decoration:none; color:#333; {{ (isset($activePage) && $activePage=='beans') ? 'font-weight:bold; color:#b45f06;' : '' }}">
               Câu chuyện Hạt
            </a>

            <a href="{{ route('contact') }}" 
               class="{{ (isset($activePage) && $activePage=='contact') ? 'active' : '' }}" 
               style="text-decoration:none; color:#333; {{ (isset($activePage) && $activePage=='contact') ? 'font-weight:bold; color:#b45f06;' : '' }}">
               Contact
            </a>
        </nav>
    </div>
</header>
    