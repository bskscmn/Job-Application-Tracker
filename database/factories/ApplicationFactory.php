<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'company' => $this->faker->word,
            'contactPerson' => $this->faker->name,
            'email' => $this->faker->companyEmail,
            'phone' => $this->faker->phoneNumber,
            'post_title' => $this->faker->sentence,
            'link' => $this->faker->url,
            'location' => $this->faker->city,
            'description' => $this->faker->paragraph(4, true),
            'sent_files' => uniqid() . '.pdf',
            'motivation_letter' => $this->faker->paragraph(3, true),
        ];
    }
}
