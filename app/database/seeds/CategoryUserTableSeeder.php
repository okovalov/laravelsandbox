<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryUserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			CategoryUser::create([
                'category_id' => rand(1,10),
                'user_id' => rand(1,10)
			]);
		}
	}

}