<?php

namespace Database\Seeders;
use App\Models\Category;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $category=[
           [ 'name'=>'Development'],
            ['name'=>'IT&Infrastructure'],
            ['name'=>'DevOps'],
            ['name'=>'Testing'],
            ['name'=>'Sales and Marketing'],
        ];
        Category::insert($category);
    }
}
