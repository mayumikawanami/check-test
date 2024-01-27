<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->safeEmail,
            'tell_part1' => $this->faker->randomNumber(3),
            'tell_part2' => $this->faker->randomNumber(4),
            'tell_part3' => $this->faker->randomNumber(4),
            'address' =>  $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'detail' => $this->faker->sentence,
        ];
    }
}
