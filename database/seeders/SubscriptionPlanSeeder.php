<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptionPlans = [
            [
                'name' => 'Basic',
                'price' => 0,
                'active_period_in_months' => 0,
                'features' => json_encode(['Hanya dapat Melihat dalam Fitur Artikel', 'Akses Penuh ke Fitur Forum Diskusi', 'Akses Penuh ke Fitur Komentar'])
            ],
            [
                'name' => 'Premium',
                'price' => 19900,
                'active_period_in_months' => 1,
                'features' => json_encode(['Semua Fitur Pada Basic', 'Badge Lebah di Bagian Foto Frofil Anda', 'Akses Penuh Ke Fitur Prediksi', 'Akses Penuh Ke Fitur Artikel'])
            ],
        ];

        foreach($subscriptionPlans as $subscriptionPlan)
        {
            SubscriptionPlan::create($subscriptionPlan);
        }
    }
}
