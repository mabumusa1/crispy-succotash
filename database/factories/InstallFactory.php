<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DataCenter;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Install>
 */
class InstallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'data_center_id' => DataCenter::first()->id,
            'user_id' => User::first()->id,
            'name' => $this->faker->unique()->firstName,
            'properties' => \json_encode([])
        ];
    }

    /**
     * Make install a course.
     *
     * @return static
     */
    public function course()
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'course',
        ]);
    }
    /**
     * Make install a demo.
     *
     * @return static
     */
    public function demo()
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'demo',
        ]);
    }

    /**
     * Make install a dev.
     *
     * @return static
     */
    public function dev()
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'dev',
        ]);
    }

    /**
     * Make install a prod.
     *
     * @return static
     */
    public function prod()
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'prod',
        ]);
    }


}
