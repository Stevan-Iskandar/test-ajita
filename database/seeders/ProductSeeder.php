<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'namaproduk'    => 'Gamis Tsurayya',
                'penjual'       => 'HijUp Store',
                'kota'          => 'Bandung',
                'kategori'      => 'Fashion',
                'harga'         => 300000,
                'berat'         => 1.5,
            ],
            [
                'namaproduk'    => 'Robot Alpha 1S',
                'penjual'       => 'Electra',
                'kota'          => 'Surabaya',
                'kategori'      => 'Elektronik',
                'harga'         => 4000000,
                'berat'         => 3,
            ],
            [
                'namaproduk'    => 'Adidas Telstar 18',
                'penjual'       => 'Sportivo',
                'kota'          => 'Jakarta',
                'kategori'      => 'Olahraga',
                'harga'         => 1500000,
                'berat'         => 0.2,
            ],
            [
                'namaproduk'    => 'Kemeja Pantai',
                'penjual'       => 'Sportivo',
                'kota'          => 'Jakarta',
                'kategori'      => 'Fashion',
                'harga'         => 50000,
                'berat'         => 0.2,
            ],
            [
                'namaproduk'    => 'Trafo Up/Down',
                'penjual'       => 'Prima Shop',
                'kota'          => 'Semarang',
                'kategori'      => 'Elektronik',
                'harga'         => 75000,
                'berat'         => 1,
            ],
            [
                'namaproduk'    => 'Matras Yoga',
                'penjual'       => 'HijUp Store',
                'kota'          => 'Bandung',
                'kategori'      => 'Olahraga',
                'harga'         => 35000,
                'berat'         => 0.1,
            ],
            [
                'namaproduk'    => 'Hijab Monalisa',
                'penjual'       => 'HijUp Store',
                'kota'          => 'Bandung',
                'kategori'      => 'Fashion',
                'harga'         => 75000,
                'berat'         => 0.1,
            ],
            [
                'namaproduk'    => 'Drone DJI Trello',
                'penjual'       => 'Electra',
                'kota'          => 'Surabaya',
                'kategori'      => 'Elektronik',
                'harga'         => 4000000,
                'berat'         => 5,
            ],
            [
                'namaproduk'    => 'Nike Treadmill',
                'penjual'       => 'Nike Indonesia',
                'kota'          => 'Bali',
                'kategori'      => 'Olahraga',
                'harga'         => 7000000,
                'berat'         => 12,
            ],
            [
                'namaproduk'    => 'Celana Jogger',
                'penjual'       => 'Waikiki',
                'kota'          => 'Tangerang',
                'kategori'      => 'Fashion',
                'harga'         => 100000,
                'berat'         => 0.3,
            ],
        ];

        foreach ($data as $d)
        Product::create($d);
    }
}
