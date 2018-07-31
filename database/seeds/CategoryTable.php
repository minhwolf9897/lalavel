<?php

use Illuminate\Database\Seeder;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([[
                'id' => 1,
                'name' => 'Bò Tót',
                'description' => 'Hello các bạn tớ biết húc ',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ9a1qX4GH3NOtmwbNY7Xc2f9Strc7feSxZDu4oJV-XsbJjn4C'
            ],
                [
                    'id' => 2,
                    'name' => 'Bò giống',
                    'description' => 'Nhìn giống bò',
                    'image' => 'https://i.ytimg.com/vi/NBzQd2i7THU/hqdefault.jpg'
                ],
                [
                    'id' => 3,
                    'name' => 'Bò sữa',
                    'description' => ' toàn sữa',
                    'image' => 'http://boquocte.vn/admin/webroot/upload/image/images/6.jpg'
                ],
                [
                    'id' => 4,
                    'name' => 'Bò kinh tế',
                    'description' => 'Bò mavel biến gen',
                    'image' => 'http://bimatthegioi.com/wp-content/uploads/2017/08/biet-doi-chien-binh-avengers-ai-la-nguoi-manh-nhat.jpg'
                ],
                ]
        );
    }
}
