<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Agtian Muhamad Ricky Tanshidiq',
        //     'email' => 'agtianrickey33@gmail.com',
        //     'password' => Hash::make('123456789'),
        // ]);

        // Company::create([
        //     'name' => 'RSUD dr Rehatta Provinsi Jawa Tengah',
        //     'email' => 'rsuddrrehatta@jatengprov.go.id',
        //     'address' => 'Jl. Raya Kelet - Jepara km. 37, Keling, Jepara, Jawa Tengah',
        //     'latitude' => '-6.501837990950934',
        //     'longitude' => '110.90776711533921',
        //     'radius_km' => '0.5',
        //     'time_in' => '08:00',
        //     'time_out' => '17:00',
        // ]);

        $this->call([
            // AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
