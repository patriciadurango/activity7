<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit; 

class KitSeeder extends Seeder
{
    public function run()
    {
        Kit::create(['kitName' => 'StarterKit']);
        Kit::create(['kitName' => 'IntermediateKit']);
        Kit::create(['kitName' => 'Kit5']); 
    }
}