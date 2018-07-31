<?php

use Illuminate\Database\Seeder;

class productstable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Pò Tót',
                'description'=>'Húc như bò',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGFJ-2UrjLiJ9xpu47XvB2TGx4uije1yjto9Ha3yQxSbed0Gej'
            ],
            [
                'id'=>2,
                'name'=>'Bò lợn',
                'description'=>'Ụm bò',
                'categoryId'=>2,
                'price'=>2000,
                'image'=>'https://i.ytimg.com/vi/0TU_t4UFfDs/maxresdefault.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Bò sắt',
                'description'=>'tau đắt ',
                'categoryId'=>3,
                'price'=>2500,
                'image'=>'https://i.ytimg.com/vi/0TU_t4UFfDs/maxresdefault.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Bò gỗ',
                'description'=>'Còn tau thì rẻ',
                'categoryId'=>2,
                'price'=>2700,
                'image'=>'https://i.ytimg.com/vi/iH7cuqVpMMU/hqdefault.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Lòng Bò',
                'description'=>'Bò bò bò',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://yeutre.vn/cdn/medias/uploads/146/146541-long-bo-luoc-theo-cach-1.jpg'
            ],
            [
                'id'=>6,
                'name'=>'Tình Bò',
                'description'=>'bò là tui',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'https://www.chovui.com/wp-content/uploads/2015/11/caecdfcedthumb-144730515684gkn.jpg'
            ],
            [
                'id'=>7,
                'name'=>'Bò Duỵ',
                'description'=>'i am bò',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://www.chovui.com/wp-content/uploads/2015/11/caecdfcedthumb-144730515684gkn.jpg'
            ],
            [
                'id'=>8,
                'name'=>'Bò Bò',
                'description'=>'LBò BÒ',
                'categoryId'=>1,
                'price'=>2000,
                'image'=>'https://www.chovui.com/wp-content/uploads/2015/11/caecdfcedthumb-144730515684gkn.jpg'
            ],
            [
                'id'=>9,
                'name'=>'Bò Tình',
                'description'=>'Tình bò ',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://pagesongkhoe.net/wp-content/uploads/2018/04/bo.jpg'
            ],
            [
                'id'=>10,
                'name'=>'bò ngoại Nội',
                'description'=>'Thịt rất ngon',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://pagesongkhoe.net/wp-content/uploads/2018/04/bo.jpg'
            ],
            [
                'id'=>11,
                'name'=>'Bò Nội',
                'description'=>'no comment',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'http://pagesongkhoe.net/wp-content/uploads/2018/04/bo.jpg'
            ],
            [
                'id'=>12,
                'name'=>'Bò Toán',
                'description'=>'no comment',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/10/03/105/23441004/1_100183.jpg'
            ],
            [
                'id'=>13,
                'name'=>'Bò Lí',
                'description'=>'no comment',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'http://a9.vietbao.vn/images/vn999/55/2014/08/20140823-what-the-hoi-7.jpg'
            ],
            [
                'id'=>14,
                'name'=>'Bò Long',
                'description'=>'thích ăn bò',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'https://www.chovui.com/wp-content/uploads/2015/11/caecdfcedthumb-144730515684gkn.jpg'
            ],
            [
                'id'=>15,
                'name'=>'Bò Yang',
                'description'=>'Bò BÒ',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://www.chovui.com/wp-content/uploads/2015/11/caecdfcedthumb-144730515684gkn.jpg'
            ],
            [
                'id'=>16,
                'name'=>'Bò Úc',
                'description'=>'Đến từ Úc',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgE2AsGB2NqLhJPTwg8ps-lriCdH50jWOPQBndCHrSiH0pY0OSbA'
            ],
            [
                'id'=>17,
                'name'=>'Úc Bò',
                'description'=>'Đến từ Úc',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgE2AsGB2NqLhJPTwg8ps-lriCdH50jWOPQBndCHrSiH0pY0OSbA'
            ],
            [
                'id'=>18,
                'name'=>'Bò Tàu Khựa',
                'description'=>'Đồ tàu khựa',
                'categoryId'=>3,
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgE2AsGB2NqLhJPTwg8ps-lriCdH50jWOPQBndCHrSiH0pY0OSbA'
            ],
            [
                'id'=>19,
                'name'=>'Bò Nhà Mỉnh',
                'description'=>'Hi hi',
                'categoryId'=>4,
                'price'=>2000,
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgE2AsGB2NqLhJPTwg8ps-lriCdH50jWOPQBndCHrSiH0pY0OSbA'
            ],
            [
                'id'=>20,
                'name'=>'Bò spetsnaz',
                'description'=>'spetsnaz',
                'categoryId'=>5,
                'price'=>2000,
                'image'=>'https://vignette.wikia.nocookie.net/armies/images/4/4a/Spetsnaz_Logo.png/revision/latest?cb=20110725005130'
            ]
        ]);
    }
}
