<?php

namespace Database\Factories;

use App\Models\TourismCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TourismPlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // generando una variable llamada name que contenga una oracion aleatoria
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image360' => 'images/image360.jpg',
            'description' => $this->faker->text(1500),
            'location' => $this->faker->address,
            'is_active' => true,
            'date' => null,
            'hours' => $this->faker->randomElement(['siempre abierto', '14:00 a 18:00']),
            'weater' => $this->faker->randomElement(['sunny', 'cloudy', 'rainy', 'snowy']),
            'price' => $this->faker->randomElement(['gratis', '$10', '$20', '$30', '$40', '$50', '$60', '$70', '$80', '$90', '$100']),
            'altitude' => $this->faker->randomElement(['1,000', '2,000', '3,000', '4,000', '5,000', '6,000', '7,000', '8,000', '9,000', '10,000']),
            'essential' => 'Cámara fotográfica, protector solar, repelente, ropa para clima cálido, dinero en efectivo.',
            'user_id' => User::all()->random()->id,
            'tourism_category_id' => TourismCategory::all()->random()->id,
        ];
    }
}
