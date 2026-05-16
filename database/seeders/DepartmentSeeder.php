<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('departments')->where('id', 1)->update([
            'name_dept' => 'Sastra Literasi',
            'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794',
            'description' => 'Divisi Sastra dan Literasi FORDI MAPELAR UB berlandaskan pada keyakinan bahwa sastra dan literasi merupakan sarana pembentukan nalar kritis, kepekaan sosial, dan kesadaran kultural. Melalui kegiatan membaca, menulis, berdialog, dan berkarya, divisi ini mendorong lahirnya gagasan serta karya yang reflektif, bertanggung jawab, dan relevan dengan realitas masyarakat.',
            'updated_at' => now(),
        ]);
    }
}
