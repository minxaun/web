<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        \App\Product::create([
            'product_title' => 'acer E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'acer',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '9000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'asus E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'asus',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '23000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'asus E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'asus',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '33000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'dell E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'dell',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '90000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'dell E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'dell',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'hp E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'hp',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '5500',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'dell E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'dell',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '87000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'hp E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'hp',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '22000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'hp E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'hp',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '28000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '44000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '66000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'msi E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'msi',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '54000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'msi E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'msi',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '36000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '88000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '77000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '88000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '77000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '88000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '77000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '88000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'lenovo E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'lenovo',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '34000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);
         \App\Product::create([
            'product_title' => 'toshiba E5-511-C0DX四核筆記型電腦',
            'product_brand' => 'toshiba',
            'product_content' => '15.6吋、Intel Celeron N2930 (1.83G/Burst2.16G)四核心、4G、500G、win8.1',
            'product_price' => '77000',
            'product_features' => '銀髮族大尺寸',
            'product_screen_size' => '15',
            'product_processor' => 'Intel Core i7',
         ]);

    }
}
