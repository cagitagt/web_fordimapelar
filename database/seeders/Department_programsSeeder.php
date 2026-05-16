<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Department_programsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('department_programs')->insert([
            [
                'department_id' => 1,
                'name_program' => 'Sharelis (Sharing Menulis)',
                'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a',
                'description' => 'Kegiatan pembuatan karya sastra literasi dan seni secara rutin yang nantinya akan dievaluasi melalui peer review ataupun expert review.',
                'time_label' => 'TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name_program' => 'Workshop Kepenulisan',
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3',
                'description' => 'Kegiatan workshop dengan pemateri untuk meningkatkan kemampuan kepenulisan.',
                'time_label' => 'TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name_program' => 'Pustaka Rakyat',
                'image' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570',
                'description' => 'Kegiatan baca buku bersama, gelar karya sastra dan seni, serta pengumpulan buku bekas untuk didonasikan atau diperjualbelikan.',
                'time_label' => 'TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name_program' => 'The Story of Hope (SoH)',
                'image' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc',
                'description' => 'Pembuatan novel atau cerita dari seluruh anggota FORDI MAPELAR serta pihak lain yang memberi dampak signifikan bagi pembaca.',
                'time_label' => 'TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'department_id' => 1,
                'name_program' => 'Foruminate',
                'image' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc',
                'description' => 'Kegiatan podcast dan video edukasi dari pembedahan buku atau kepenulisan dengan topik pendidikan, isu, dan tren.',
                'time_label' => 'TBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
