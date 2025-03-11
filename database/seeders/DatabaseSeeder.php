<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\TypeArticle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // DB::table('type_articles')->truncate();
        // DB::table('articles')->truncate();
        // TypeArticle::truncate();
        // Article::truncate();
        $this->call(TypeArticleTableSeeder::class);

        Article::factory(100)->create();
        Client::factory(100)->create();

        $this->call(DureeLocationSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
