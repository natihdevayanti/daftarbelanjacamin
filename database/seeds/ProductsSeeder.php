<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert([
        //     'name' => 'Michael Kors Shoulder Bag - Light Pink',
        //     'description' => 'Tas selempang pink, awet, dan trendy',
        //     'photo' => 'https://i.ebayimg.com/images/g/edMAAOSwYYpb7AWO/s-l1600.jpg',
        //     'price' => 1200000.00
        // ]);
 
        DB::table('products')->insert([
            'name' => 'Women PU Buckle Chain Crossbody Shoulder Bag Small Handbags Cloth Pattern',
            'description' => 'Kondisi awet dan terbaru',
            'photo' => 'https://i.ebayimg.com/images/g/YC0AAOSwJudbbZut/s-l1600.jpg',
            'price' => 1200000.00
        ]);
 
        // DB::insert("insert into products(name, description, photo, price) 
        // VALUES ?, ?, ?, ?", ['Women PU Buckle Chain', 'Kondisi awet dan cerah', 'https://i.ebayimg.com/images', 900000]);
        DB::table('products')->insert([
            'name' => 'Women Clear Transparent Tote PVC Beach Bag Cosmetic Makeup Waterproof Handbag',
            'description' => 'Tas waterproof, mampu memuat banyak barang',
            'photo' => 'https://i.ebayimg.com/images/g/nc0AAOSwO-Rd5MzO/s-l1600.jpg',
            'price' => 1000000.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'Mini Backpack Leather Shoulder Bag Multi-function Small Bagpack School Backpack',
            'description' => 'Tas multifungsi dengan kualitas terbaik',
            'photo' => 'https://i.ebayimg.com/images/g/e1YAAOSwlyBd5P-h/s-l1600.jpg',
            'price' => 500000.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'Women Velvet Mini Backpack Girls School Bags Small Travel Handbag Shoulder Bag',
            'description' => 'Tas model Jepang dengan bahan yang awet dan berkualitas',
            'photo' => 'https://i.ebayimg.com/images/g/SrUAAOSwcttcGMY4/s-l1600.jpg',
            'price' => 200000.00
        ]);
    }
}

//Storage::disk()->url('');