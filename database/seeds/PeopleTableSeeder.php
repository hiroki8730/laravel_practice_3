<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'tel' => '080-2222-2222',
            'mail' => 'taro@ezweb.ne.jp',
            'content' => '初めてのお問い合わせです！',
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'tel' => '080-3333-2222',
            'mail' => 'hanako@docomo.ne.jp',
            'content' => '花屋さんってどの辺にありますか？',
        ];
        DB::table('people')->insert($param);
    }
}
