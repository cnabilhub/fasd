<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            //            $table->string('name');
            'name' => $this->faker->name(),
            'email' =>  $this->faker->unique()->safeEmail(),
            'desc' => $this->faker->text(),
            'address' => $this->faker->address(),
            'img' => $this->faker->image(null, 640, 480),
            'phone' => $this->faker->phoneNumber(),
            'RCS' => $this->faker->randomNumber(6, false),
            'TVA' => $this->faker->randomNumber(2, false),
            'NTVA' => $this->faker->randomNumber(6, false),
            'country' => $this->faker->randomNumber(2, false),
            'note' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
