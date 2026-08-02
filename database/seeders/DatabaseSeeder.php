<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Cria o Usuário Admin de teste
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@timesync.com',
            'password' => Hash::make('password'),
        ]);

        // 2. Cria clientes de demonstração
        User::factory()->create([
            'name' => 'Carlos Eduardo',
            'email' => 'carlos@email.com',
        ]);

        User::factory()->create([
            'name' => 'Mariana Lopes',
            'email' => 'mariana@email.com',
        ]);

        // 3. Cria mais 10 usuários fictícios aleatórios
        User::factory(10)->create();

        // 4. Cria agendamentos fixos para o Admin de teste
        Appointment::factory()->create([
            'user_id' => $admin->id,
            'client_name' => 'Carlos Eduardo',
            'service' => 'Technical Consultation',
            'date' => now()->format('Y-m-d'),
            'time' => '14:00',
            'status' => 'confirmed',
        ]);

        Appointment::factory()->create([
            'user_id' => $admin->id,
            'client_name' => 'Mariana Lopes',
            'service' => 'General Support',
            'date' => now()->addDay()->format('Y-m-d'),
            'time' => '10:30',
            'status' => 'pending',
        ]);

        // 5. Gera 15 agendamentos aleatórios extras no sistema
        Appointment::factory(15)->create();
    }
}