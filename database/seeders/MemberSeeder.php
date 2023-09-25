<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'code' => 'M001',
                'name' => 'Angga',
            ],
            [
                'code' => 'M002',
                'name' => 'Ferry',
            ],
            [
                'code' => "M003",
                'name' => "Putri",
            ],
            // Add more book data as needed
        ];

        foreach ($members as $memberData) {
            Member::create($memberData);
        }
    }
}
