<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryfilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_filter')->insertOrIgnore([
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 1,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 2,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 3,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 4,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 5,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 6,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 7,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 8,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 9,
                                                        ],
                                                        [
                                                            'category_id' => 1,
                                                            'filter_id' => 10,
                                                        ],
                                                        
                                                    ]);
    }
}
