<footer class="footer">
    <div class="footer-inner">
        <p>© {{ date('Y') }} <strong>6TL Roastery Coffee</strong></p>
        <p class="credit">
            Thiết kế bởi <span>Nhóm 1</span> — Khoa Toán Tin — Trường ĐHSP Đà Nẵng
        </p>
    </div>
</footer>

<style>
    .footer {
        background: #f9f6f3;
        border-top: 1px solid #e0d8cf;
        padding: 18px 0;
        text-align: center;
        width: 100%;
        color: #6b5b4b;
        font-size: 0.9rem;
        font-family: 'Poppins', sans-serif;
        position: relative;
        margin-top: 40px;
        box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.05);
    }

    .footer-inner {
        max-width: 900px;
        margin: 0 auto;
    }

    .footer strong {
        color: #4b2e23;
    }

    .footer .credit {
        margin-top: 4px;
        font-size: 0.85rem;
        color: #8a7a6d;
    }

    .footer .credit span {
        color: #b45f06;
        font-weight: 500;
    }

    /* Đảm bảo footer luôn ở dưới cùng nếu trang quá ngắn */
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }
</style>
