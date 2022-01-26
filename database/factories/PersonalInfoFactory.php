<?php

namespace Database\Factories;

use App\Models\PersonalInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'contact_num' => $this->faker->e164PhoneNumber,
            'department' => $this->faker->randomElement($array = array ('CITE','COA','CEA','CBE','MarT')),
            'subject' => $this->faker->randomElement($array = array ('Network Security','Networking 1','Gender and Soc','Technopreneurship','Networking 2')),
            'section' => $this->faker->randomElement($array = array ('IT21S1','IT21S2','IT31S1','IT31S2','IT32S1')),
            'schedule' => $this->faker->randomElement($array = array ('MWF 8:30am-1:30pm','TTHS MWF 8:30am-1:30pm','MWF 1:30pm-6:30pm','TTHS MWF 1:30pm-6:30pm','MWF 6:30pm-8:30pm')),

            'created_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
