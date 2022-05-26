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
            'image360' => 'images/image3602.jpg',
            'description' => $this->faker->text(1500),
            'location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.804422324122!2d-65.24428868455371!3d-19.02833791581828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7ce7ab5055d7b00!2zMTnCsDAxJzQyLjAiUyA2NcKwMTQnMzEuNiJX!5e0!3m2!1ses!2sbo!4v1653278616400!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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
