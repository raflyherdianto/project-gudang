<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'kode_pegawai' => '12345',
            'nama' => 'Rafly',
            'username' => 'raflyganteng',
            'password' => bcrypt('raflyganteng'),
            'email' => 'rafly@gmai.com',
            'alamat' => 'Jl. Gang Buntu',
            'jenis_kelamin' => 'L',
            'no_hp' => '08xxx',
            'level' => 'Administrator',
        ]);

        Kategori::create([
            'kode_kategori' => 'K01',
            'nama' => 'Plywood',
        ]);
        Kategori::create([
            'kode_kategori' => 'K02',
            'nama' => 'Chair',
        ]);
        Kategori::create([
            'kode_kategori' => 'K03',
            'nama' => 'Table',
        ]);
        Kategori::create([
            'kode_kategori' => 'K04',
            'nama' => 'Garden Tile',
        ]);
        Kategori::create([
            'kode_kategori' => 'K05',
            'nama' => 'Wall Panel',
        ]);
        Kategori::create([
            'kode_kategori' => 'K06',
            'nama' => 'Flooring',
        ]);
        Kategori::create([
            'kode_kategori' => 'K07',
            'nama' => 'MDF',
        ]);
        Barang::create([
            'kode_barang' => 'B01',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 2.7,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B02',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 2.4,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B03',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 3.6,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B04',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 5.5,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B05',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 7,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B06',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 9,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B07',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 9,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B08',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B09',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B10',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B11',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B12',
            'nama' => 'Plywood',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B13',
            'nama' => 'Plywood',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B14',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B15',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B16',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B17',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B18',
            'nama' => 'Block Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B19',
            'nama' => 'Block Board',
            'ukuran_mm' => '920 x 1830',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B20',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 12,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B21',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 15,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B22',
            'nama' => 'Particle Board',
            'ukuran_mm' => '1220 x 2440',
            'grade' => 'UTL/BTR',
            'kategori_id' => 1,
            'tebal_mm' => 18,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B23',
            'nama' => 'HMR',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 1,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B24',
            'nama' => 'Chair',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 2,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B25',
            'nama' => 'Chair',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 2,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B26',
            'nama' => 'Table',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 3,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B27',
            'nama' => 'Garden Tile',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 4,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B28',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B29',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B30',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B31',
            'nama' => 'Wall Panel',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 5,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B32',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B33',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B34',
            'nama' => 'Flooring',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 6,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Barang::create([
            'kode_barang' => 'B35',
            'nama' => 'MDF',
            'ukuran_mm' => '0',
            'grade' => '0',
            'kategori_id' => 7,
            'tebal_mm' => 0,
            'harga' => 0,
            'berat_item_kg' => 0,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB01',
            'nama' => 'Plywood1',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB02',
            'nama' => 'Plywood2',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB03',
            'nama' => 'Plywood3',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB04',
            'nama' => 'Plywood4',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB05',
            'nama' => 'Plywood5',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB06',
            'nama' => 'Plywood6',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB07',
            'nama' => 'Plywood7',
            'kategori_id' => 1,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB08',
            'nama' => 'Chair1',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB09',
            'nama' => 'Chair2',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB10',
            'nama' => 'Chair3',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB11',
            'nama' => 'Chair4',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB12',
            'nama' => 'Chair5',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB13',
            'nama' => 'Chair6',
            'kategori_id' => 2,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB14',
            'nama' => 'Table1',
            'kategori_id' => 3,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB15',
            'nama' => 'Table2',
            'kategori_id' => 3,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB16',
            'nama' => 'Gardentile1',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB17',
            'nama' => 'Gardentile2',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB18',
            'nama' => 'Gardentile3',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB19',
            'nama' => 'Gardentile4',
            'kategori_id' => 4,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB20',
            'nama' => 'Wallpanel1',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB21',
            'nama' => 'Wallpanel2',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB22',
            'nama' => 'Wallpanel3',
            'kategori_id' => 5,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB23',
            'nama' => 'Flooring1',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB24',
            'nama' => 'Flooring2',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB25',
            'nama' => 'Flooring3',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB26',
            'nama' => 'Flooring4',
            'kategori_id' => 6,
        ]);
        Gambar::create([
            'kode_gambar' => 'GB27',
            'nama' => 'Mdf1',
            'kategori_id' => 7,
        ]);
        Supplier::create([
            'kode_supplier' => 'S01',
            'nama' => 'PT. Javanese Wood',
            'alamat' => 'Jl. Anjasmoro 12',
            'kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'negara' => 'Indonesia',
            'kode_pos' => '67125',
        ]);
        Supplier::create([
            'kode_supplier' => 'S02',
            'nama' => 'PT. Kutai Timber Indonesia',
            'alamat' => 'Jl. Gajah Mada',
            'kota' => 'Probolinggo',
            'provinsi' => 'Jawa Timur',
            'negara' => 'Indonesia',
            'kode_pos' => '67155',
        ]);
    }
}
