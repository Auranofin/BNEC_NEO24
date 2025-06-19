<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competitions')->insert([
            [
                'name' => 'Debate',
                'logo' => 'Debate.png',
                'normal_price' => 475000,
                'total_quota' => 32,
                'early_price' => 400000,
                'early_quota' => 0,
                'content' => 'Argumentative discussion on opposing viewpoints',
                'link_group_whatsapp' => 'https://chat.whatsapp.com/DxdwdwfT0QmBbsZ0Gjxv6B',
                'qr_code_whatsapp' => null,
                'ebooklet' => null,
            ],
            [
                'name' => 'Essaywriting',
                'logo' => 'Essaywriting.png',
                'normal_price' => 150000,
                'total_quota' => 32,
                'early_price' => 50000,
                'early_quota' => 0,
                'content' => 'Creative stringing along of thoughts and ideas into written brilliancy',
                'link_group_whatsapp' => 'https://chat.whatsapp.com/Fqh3LOzNyMyGBlO95iNtwA',
                'qr_code_whatsapp' => null,
                'ebooklet' => null,
            ],
            [
                'name' => 'Storytelling',
                'logo' => 'Storytelling.png',
                'normal_price' => 375000,
                'total_quota' => 32,
                'early_price' => 275000,
                'early_quota' => 0,
                'content' => 'Narrative art through concise, evocative language',
                'link_group_whatsapp' => 'https://chat.whatsapp.com/CEg8N7I5EKdCfXxgQVnF5N',
                'qr_code_whatsapp' => null,
                'ebooklet' => null,
            ],
            [
                'name' => 'Speech',
                'logo' => 'Speech.png',
                'normal_price' => 375000,
                'total_quota' => 32,
                'early_price' => 275000,
                'early_quota' => 0,
                'content' => 'Oral expression of thoughts, ideas, or information publicly',
                'link_group_whatsapp' => 'https://chat.whatsapp.com/DolqEDfz7ozI65dEEfLY3U',
                'qr_code_whatsapp' => null,
                'ebooklet' => null,
            ]
        ]);
    }
}
