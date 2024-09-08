<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' =>  Project::all()->random()->id,
            'name' => fake()->name(),
            'description' => fake()->text(200),
            // fake from enums status (e.g., todo, in-progress, done)
            'status' => fake()->randomElement(['todo', 'in-progress', 'done']),
        ];
    }
}
