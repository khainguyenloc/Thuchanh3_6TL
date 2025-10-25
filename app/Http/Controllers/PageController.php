<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dữ liệu thực đơn (bắt buộc)
    private static $drinks = [
        ['id' => 1, 'name' => 'Tinh Vân Latte',      'price' => '55000', 'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',      'image' => 'images/latte.jpg'],
        ['id' => 2, 'name' => 'Hố Đen Americano',    'price' => '45000', 'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.',   'image' => 'images/americano.jpg'],
        ['id' => 3, 'name' => 'Vũ Trụ Cold Brew',    'price' => '60000', 'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.', 'image' => 'images/coldbrew.jpg'],
        ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato','price' => '58000','description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.', 'image' => 'images/macchiato.jpg'],
        // bạn có thể thêm món khác nếu muốn
    ];

    // Dữ liệu beans (bắt buộc)
    private static $beans = [
        ['id' => 1, 'name' => 'Hạt Sao Chổi (Ethiopia)',   'origin' => 'Yirgacheffe, Ethiopia', 'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.', 'image' => 'images/ethiopia.jpg'],
        ['id' => 2, 'name' => 'Hạt Thiên Thạch (Colombia)', 'origin' => 'Huila, Colombia',       'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.',   'image' => 'images/colombia.jpg'],
        // có thể thêm nếu muốn
    ];

    // Trang chủ: hiển thị banner + 3 món nổi bật (3 món đầu)
    public function home()
    {
        $drinks = self::$drinks;
        $featured = array_slice($drinks, 0, 3);

        return view('home', [
            'drinks' => $drinks,
            'featured' => $featured,
            'activePage' => 'home'
        ]);
    }

    // About page
    public function about()
    {
        return view('about', ['activePage' => 'about']);
    }

    // Menu page - hiển thị toàn bộ drinks
    public function menu()
    {
        return view('menu', [
            'drinks' => self::$drinks,
            'activePage' => 'menu'
        ]);
    }

    // Trang chi tiết món (nâng cao) => /menu/{id}
    public function showDrink($id)
    {
        $drink = collect(self::$drinks)->firstWhere('id', (int)$id);

        if (!$drink) {
            return response()->view('not_found', ['code' => "Drink ID: $id"], 404);
        }

        return view('drink-detail', [
            'drink' => $drink,
            'activePage' => 'menu'
        ]);
    }

    // Beans story (2 cột: ảnh trái, thông tin phải)
    public function beansStory()
    {
        return view('beans-story', [
            'beans' => self::$beans,
            'activePage' => 'beans'
        ]);
    }

    // Contact page (form tĩnh)
    public function contact()
    {
        return view('contact', ['activePage' => 'contact']);
    }
}
