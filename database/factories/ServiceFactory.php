<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(1000),
            'direction' => $this->faker->address,
            'location' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'facebook' => $this->faker->url,
            'whatsapp' => $this->faker->phoneNumber(),
            'website' => 'https://www.youtube.com/watch?v=2e4VSoLYPh0&t=8s',
            'user_id' => User::all()->random()->id,
            'service_category_id' => ServiceCategory::all()->random()->id,
        ];
    }
}
