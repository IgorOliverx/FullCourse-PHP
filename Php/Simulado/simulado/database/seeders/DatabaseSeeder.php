<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //aqui eu chamo a seeder que eu alimentei e executo o comando php artisan db:seed -> faz aq inserção no banco de dados
        $this->call(RamMemoryTypeSeeder::class);
        $this->call(SocketTypeSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(MotherboardSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProcessorSeeder::class);
        $this->call(RamMemorySeeder::class);
        $this->call(GraphicCardSeeder::class);
        $this->call(PowerSupplySeeder::class);
        $this->call(StorageDeviceSeeder::class);
        $this->call(MachineSeeder::class);
        $this->call(MachineHasStorageDeviceSeeder::class);

    }
}
