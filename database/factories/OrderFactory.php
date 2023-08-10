<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ordert>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voucherNo' =>$this->faker->ean13,
            'qty' =>rand(1,10),
            'total' =>$this ->faker->numberBetween(5000,500000),
            'paymentSlip' =>$this->faker->imageUrl,
            'paymentID' =>rand (1,10),
            'itemID'  =>rand(1,10),
            'userID' =>rand(1,10),
        ];
    }
}
