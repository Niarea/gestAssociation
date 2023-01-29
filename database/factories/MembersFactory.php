<?php

namespace Database\Factories;

use App\Models\Members;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Members::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'first_name' => $this->faker->firstname(),
            'contact' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'poste' => $this->faker->title(),
            'association_id' => $this->faker->name(),
        ];
    }
}
