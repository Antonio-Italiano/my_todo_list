<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{TodoList, User};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoList>
 */
class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //RITORNA UN OGGETTO E PRENDIAMO IL PRIMO
        $user = User::inRandomOrder()->first();
        return [
            'name' => fake()->text(32),
            'user_id' => $user->id
        ];
    }
}
