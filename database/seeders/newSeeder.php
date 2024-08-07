<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class newSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN'); // Sử dụng locale tiếng Việt

        $titles = [
            'Tin tức mới nhất hôm nay',
            'Cập nhật tin tức thời sự',
            'Tin tức thể thao trong ngày',
            'Giải trí cuối tuần',
            'Công nghệ và khoa học'
        ];

        $contents = [
            'Đây là nội dung tin tức bằng tiếng Việt. Nó cung cấp thông tin chi tiết về sự kiện và diễn biến mới nhất.',
            'Thông tin chi tiết về các sự kiện thể thao đáng chú ý trong ngày. Các tin tức nổi bật và kết quả trận đấu.',
            'Bài viết về các phát minh công nghệ mới và ứng dụng của chúng trong cuộc sống hàng ngày.',
            'Các tin tức giải trí, sự kiện âm nhạc và điện ảnh đang diễn ra trong nước và quốc tế.',
            'Cập nhật những tiến bộ khoa học và nghiên cứu mới nhất từ các nhà khoa học hàng đầu.'
        ];

        for ($i = 0; $i < 10; $i++) {
            News::create([
                'cate_id' => rand(1,5),
                'img' => 'products/WZquvLPsyDAqrfhb644ybPxrX0EhYdqN8pKNSTX8.jpg', 
                'title' => fake()->randomElement($titles),
                'content' => fake()->randomElement($contents),
                'author' => $faker->name
            ]);
        }
    }
}
