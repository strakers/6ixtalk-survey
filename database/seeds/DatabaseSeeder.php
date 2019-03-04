<?php

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
        $this->call(WordTypeSeeder::class);
        $this->call(GeneratedNameSeeder::class);
        $this->call(QuestionGroupSeeder::class);
        $this->call(WordPhraseSeeder::class);
    }
}
