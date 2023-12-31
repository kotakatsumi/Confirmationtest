<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>$this->faker->numberBetween(1,5),
            'fullname'=>$this->faker->name(),
            'gender'=>$this->faker->numberBetween(1,3),
            'email'=>$this->faker->safeEmail(),
            'tell'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->city(),
            'building'=>$this->faker->text(5),
            'detail'=>$this->faker->sentence()
        ];
    }
}
