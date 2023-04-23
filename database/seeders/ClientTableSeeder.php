<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = ['ahmed', 'mostafa'];

        foreach ($clients as $client) {
            Client::create([
                'name' => $client,
                'phone' => '012458695',
                'address' => 'mansoura'
            ]);
        }
    }
}
