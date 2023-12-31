<?php



namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

        for ($i = 0 ; $i < 20 ; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->date();
            $newTrain->arrival_time = $faker->date();
            $newTrain->train_code = $faker->unique()->bothify('??-####');
            $newTrain->number_train_carriage = $faker->randomDigit();
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
