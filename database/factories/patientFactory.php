<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\patient;
use App\Models\doctor;
use App\Models\departments;
use Illuminate\Support\Str;
class patientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pat_fname'=> $this->faker->name(),
            'pat_lname'  => $this->faker->name(),
            'pat_phone' => $this->faker->numerify('###########'),
            'pat_gender' =>$this->faker->randomElement(['Male','Female']),
            'pat_category' =>$this->faker->randomElement(['In Patient','Out Patient']),
            'pat_email' =>$this->faker->safeEmail(),
            'pat_address' => Str::random(15),
            'pat_date_of_birth' =>$this->faker->date($format = 'Y-m-d'),
            'doctor' =>$this->faker->numberBetween(1,doctor::count()),
            'department' =>$this->faker->numberBetween(1,departments::count()),
            'status'=>$this->faker->randomElement(['Active','Not Active']),
        ];
    }
}
