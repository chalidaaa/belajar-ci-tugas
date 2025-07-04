<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Diskon extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $now   = date('Y-m-d H:i:s');

        $data = [
            [
                'id' => null,
                'tanggal' => $today,
                'nominal' => 10000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => null,
                'tanggal' => '2025-06-15',
                'nominal' => 20000,
                'created_at' => '2025-06-15 10:00:00',
                'updated_at' => '2025-06-15 10:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-06-10',
                'nominal' => 3000,
                'created_at' => '2025-06-10 08:30:00',
                'updated_at' => '2025-06-10 08:30:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-05-25',
                'nominal' => 40000,
                'created_at' => '2025-05-25 14:45:00',
                'updated_at' => '2025-05-25 14:45:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-04-30',
                'nominal' => 50000,
                'created_at' => '2025-04-30 16:00:00',
                'updated_at' => '2025-04-30 16:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-03-01',
                'nominal' => 15000,
                'created_at' => '2025-03-01 11:15:00',
                'updated_at' => '2025-03-01 11:15:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-02-14',
                'nominal' => 22000,
                'created_at' => '2025-02-14 09:20:00',
                'updated_at' => '2025-02-14 09:20:00'
            ],
            [
                'id' => null,
                'tanggal' => '2025-01-20',
                'nominal' => 18000,
                'created_at' => '2025-01-20 12:00:00',
                'updated_at' => '2025-01-20 12:00:00'
            ],
            [
                'id' => null,
                'tanggal' => '2024-12-05',
                'nominal' => 27000,
                'created_at' => '2024-12-05 13:30:00',
                'updated_at' => '2024-12-05 13:30:00'
            ],
            [
                'id' => null,
                'tanggal' => '2024-11-11',
                'nominal' => 33000,
                'created_at' => '2024-11-11 17:45:00',
                'updated_at' => '2024-11-11 17:45:00'
            ]
        ];

        $this->db->table('diskon')->insertBatch($data);
    }
}
