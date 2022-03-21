<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        return [
//            'name' => $this->faker->name,
//            'email' => $this->faker->unique()->safeEmail,
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
//        ];
        $name = explode(" ", $this->faker->name);
        return [
            'first_name_kana' => 'カナミョウジ',
            'last_name_kana' => 'カナナマエ',
            'first_name' => $name[0],
            'last_name' => $name[0],
            'artist' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password' => 'abcde12345', // password
            'phone_number' => $this->faker->unique()->phoneNumber,
            'postal_code' => $this->faker->postcode,
            'prefecture' => $this->prefecture(),
            'city' => $this->faker->city,
            'street_address' => $this->faker->streetAddress,
            'tfa_existence' => $this->faker->boolean,
            'tfa_token' => uniqid('', true),
        ];
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }

    private function prefecture() :string
    {
        $prefectures = ['東京都', '埼玉県', '千葉県', '神奈川県', '茨城', '栃木'];
        return array_rand($prefectures);
    }
}
