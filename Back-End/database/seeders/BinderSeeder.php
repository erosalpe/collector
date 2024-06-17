<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Binder;
use Illuminate\Support\Facades\DB;

class BinderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $binderData = [
            [
                'user_id' => 1,
                'name' => 'Binder 1',
                'color' => 1,
            ],
            [
                'user_id' => 1,
                'name' => 'Binder 2',
                'color' => 2,
            ],
            [
                'user_id' => 1,
                'name' => 'Binder 3',
                'color' => 3,
            ],
            [
                'user_id' => 1,
                'name' => 'Binder 4',
                'color' => 4,
            ],
            [
                'user_id' => 1,
                'name' => 'Binder 5',
                'color' => 5,
            ],
        ];

        // Inserisci i dati nella tabella binder
        foreach ($binderData as $data) {
            Binder::create($data);
        }
    }
}
