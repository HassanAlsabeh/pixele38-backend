<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'waybill' => $this->faker->name(),
            'user_id' => $this->faker->randomNumber(),
            'customer_address' =>$this->faker->address(),
            'customer_name' =>$this->faker->name(),
            'customer_phone' =>$this->faker->phoneNumber(),
        ];
    }
}
