<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => fake()->unique()->regexify('[A-Z]{2,3}-[0-9]{3}'),
            'name' => fake()->name(),
            'specialist' => null,
            'phone_number' => fake()->phoneNumber(),
            'role' => 'Dokter',
            'room_code' => null,
            'photo' => null,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the user is an admin.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Admin',
            'specialist' => null,
        ]);
    }

    /**
     * Indicate that the user is a doctor.
     */
    public function doctor(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Dokter',
            'specialist' => fake()->randomElement(['Dokter Umum', 'Spesialis Penyakit Dalam', 'Spesialis Anak', 'Spesialis Gigi']),
        ]);
    }

    /**
     * Indicate that the user is an apoteker.
     */
    public function apoteker(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Apoteker',
            'specialist' => null,
        ]);
    }
}
