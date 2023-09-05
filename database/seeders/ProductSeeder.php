<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'GK – 800NC005',
                'category_id' => 1,
                'image_url' => 'img/Anna1.jpg',
                'description' => 'Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam\n\nCảnh báo: Bảo quản trong hộp kính\n\nHướng dẫn sử dụng:\n\n+ Tháo kính bằng 2 tay\n\n+ ',
                'price' => 1234151.00,
                'quantity' => 2,
                'isAvailable' => 1,
            ],
            [
                'product_name' => 'GK – TE0059',
                'category_id' => 2,
                'image_url' => 'img/Anna2.jpg',
                'description' => 'Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam\n\nCảnh báo: Bảo quản trong hộp kính\n\nHướng dẫn sử dụng:\n\n+ Tháo kính bằng 2 tay\n\n+ ',
                'price' => 31234151.00,
                'quantity' => 3,
                'isAvailable' => 1,
            ],
            [
                'product_name' => 'KR – RCT061',
                'category_id' => 3,
                'image_url' => 'img/Anna3.jpg',
                'description' => 'Chịu trách nhiệm sản phẩm: Công Ty TNHH Dịch vụ và Thương mại Anna Việt Nam\n\nCảnh báo: Bảo quản trong hộp kính\n\nHướng dẫn sử dụng:\n\n+ Tháo kính bằng 2 tay\n\n+ ',
                'price' => 234151.00,
                'quantity' => 2,
                'isAvailable' => 1,
            ],
        ]);
    }
}
