<?php
use App\User;
use App\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class,3)->create()->each(function($u){
                $u->questions()
                  ->saveMany(
                      factory(Question::class, rand(1,5))->make()
                  );
        });
        // factory(Question::class,3)->create();

    }
}
