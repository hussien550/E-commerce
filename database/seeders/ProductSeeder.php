<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
            'name'=>'OPPO mobile',
            'price'=>'1100$',
            'description'=>'smart phone 128GB',
            'category'=>'mobile',
            'gallery'=>'https://www.91-img.com/pictures/134124-v5-oppo-k3-mobile-phone-large-1.jpg?tr=q-60'
            ],

            [
                'name'=>'Samsung mobile',
                'price'=>'900$',
                'description'=>'smart phone 32GB',
                'category'=>'mobile',
                'gallery'=>'https://cf3.s3.souqcdn.com/item/2019/07/14/59/29/26/94/item_L_59292694_56a53deb387cb.jpg'
            ],

            [
                'name'=>'LG mobile',
                'price'=>'1000$',
                'description'=>'smart phone 16GB',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/eg_en/images/mobile-phones/md05255540/350_img.jpg'
            ],

            [
                'name'=>'Iphone mobile',
                'price'=>'1500$',
                'description'=>'smart phone 256GB',
                'category'=>'mobile',
                'gallery'=>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-family-hero?wid=940&hei=1112&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1604021663000'
            ],

            [
                'name'=>'Huawei mobile',
                'price'=>'750$',
                'description'=>'smart phone 128GB',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51zDfRUUhHL._AC_SX569_.jpg'
            ]


        ]);
    }
}
