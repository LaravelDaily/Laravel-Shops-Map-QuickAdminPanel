<?php

use App\Category;
use App\Role;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $pictures = collect(range(1,11));
        $users = Role::findOrFail(2)->users;
        $categories = Category::all()->pluck('id');

        $addresses = [
            [
                "address" => "Tesco Express, George Street, London",
                "latitude" => "51.5174361",
                "longitude" => "-0.1562695000000076"
            ],
            [
                "address" => "Tesco Superstore, Tilling Road, London",
                "latitude" => "51.5741621",
                "longitude" => "-0.21467619999998533"
            ],
            [
                "address" => "Sports Direct, Oxford Street, London",
                "latitude" => "51.5158907",
                "longitude" => "-0.13791100000003098"
            ],
            [
                "address" => "Outlet.store.uk, Finchley Road, London",
                "latitude" => "51.5391825",
                "longitude" => "-0.17634509999993497"
            ],
            [
                "address" => "Brick Lane Sunday Market, Brick Lane, London",
                "latitude" => "51.5212073",
                "longitude" => "-0.0718159000000469"
            ],
            [
                "address" => "The Harry Potter Shop at Platform 9 3/4, Pancras Road, London",
                "latitude" => "51.5321845",
                "longitude" => "-0.12392169999998259"
            ],
            [
                "address" => "The Beekeeper Honey - London Essex UK, Goodmayes Lane, London, Ilford",
                "latitude" => "51.5577173",
                "longitude" => "0.1089951999999812"
            ],
            [
                "address" => "Sainsbury's, London Road, Forest Hill, London",
                "latitude" => "51.4397092",
                "longitude" => "-0.055361199999993005"
            ],
            [
                "address" => "Lidl, Sydenham Road, London",
                "latitude" => "51.4253218",
                "longitude" => "-0.04806940000003124"
            ],
            [
                "address" => "CHANEL Old Spitalfields Market, Commercial Street, London",
                "latitude" => "51.51934869999999",
                "longitude" => "-0.07468889999995554"
            ],
        ];
        $currentAddress = 0;

        foreach($users as $user)
        {
            $shop = [
                'name' => $faker->company,
                'description' => $faker->paragraph,
                'address' => $faker->address,
                'active' => 1,
            ];
            $shop = $user->shops()->create(array_merge($shop, $addresses[$currentAddress++]));
            $shop->categories()->sync($categories->random(rand(0,3)));

            foreach($pictures->random(rand(1,3)) as $index)
            {
                $shop->addMediaFromUrl(public_path("assets/images/shops/a$index.jpg"))->toMediaCollection('photos');
            }
        }
    }
}
