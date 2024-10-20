<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Adding previous seed data
        Order::create([
            'tanggal_order' => '2024-05-21',
            'bulan' => 'JUNI',
            'nama_buyer' => 'MUHAMMAD RIDWAN',
            'marking_code' => 'KL/Dik-Muh293/byAir',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SELLER',
            'estimasi_bongkar' => '15-17 JUNI'
        ]);

        // Adding new seed data
        Order::create([
            'tanggal_order' => '2024-08-21',
            'bulan' => 'AGUSTUS',
            'nama_buyer' => 'MUHAMMAD NUR',
            'marking_code' => 'LS/HKA-NUR488',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-08-21',
            'bulan' => 'AGUSTUS',
            'nama_buyer' => 'PUJI',
            'marking_code' => 'LS/HKA-PUJ489',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-08-23',
            'bulan' => null,
            'nama_buyer' => 'Irfan',
            'marking_code' => 'HH/Dikdik-490/ByAir',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-08-23',
            'bulan' => null,
            'nama_buyer' => 'Budi',
            'marking_code' => 'HH/Dikdik-491/ByAir',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-10-08',
            'bulan' => null,
            'nama_buyer' => 'Farid Ridlo',
            'marking_code' => 'LS/HKA/DIK-FAR572',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => null
        ]);

        Order::create([
            'tanggal_order' => '2024-10-09',
            'bulan' => null,
            'nama_buyer' => 'Muhammad Nur',
            'marking_code' => 'HH/DIKDIK-573/BYAIR',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => null
        ]);

        Order::create([
            'tanggal_order' => '2024-10-09',
            'bulan' => null,
            'nama_buyer' => 'ROBET H',
            'marking_code' => 'HH/DIKDIK-574/BYAIR',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'GUDANG CHINA'
        ]);

        Order::create([
            'tanggal_order' => '2024-10-09',
            'bulan' => null,
            'nama_buyer' => 'Puji',
            'marking_code' => 'HH/DIKDIK-575/BYAIR',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => null
        ]);

        Order::create([
            'tanggal_order' => '2024-10-09',
            'bulan' => null,
            'nama_buyer' => 'KUNAEFI',
            'marking_code' => 'HH/DIKDIK-576/BYAIR',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => null
        ]);

        Order::create([
            'tanggal_order' => '2024-10-10',
            'bulan' => null,
            'nama_buyer' => 'edi bacuk',
            'marking_code' => '577',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => null
        ]);

        Order::create([
            'tanggal_order' => '2024-09-03',
            'bulan' => null,
            'nama_buyer' => 'Dimas TAS',
            'marking_code' => 'HH/Dikdik-510/ByAir',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-09-03',
            'bulan' => null,
            'nama_buyer' => 'Daniel / Yohanes',
            'marking_code' => 'FAS/JNDRL/511/BYSEA',
            'pengiriman_via' => 'LAUT',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);

        Order::create([
            'tanggal_order' => '2024-09-03',
            'bulan' => null,
            'nama_buyer' => 'Faisal Bayu Prihandono',
            'marking_code' => 'HH/DIKDIK-512/BYAIR',
            'pengiriman_via' => 'UDARA',
            'posisi_produk' => 'SHIPPING TO BUYER'
        ]);
    }
}