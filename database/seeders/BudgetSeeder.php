<?php

namespace Database\Seeders;

use App\Models\Budget;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudgetSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Budget::factory()
        //    ->count(10)
        //    ->create();
        $budgets = [
            [
                'budget_number' => '20-CAPE-80050',
                'description' => '',
                'strategic_plan_number' => ''
            ],
            [
                'budget_number' => '20-CAPE-01003',
                'description' => '',
                'strategic_plan_number' => ''
            ],
            [
                'budget_number' => '20-CAPG-01003',
                'description' => '',
                'strategic_plan_number' => ''
            ],
            [
                'budget_number' => 'CO-ENG-10001',
                'description' => '',
                'strategic_plan_number' => ''
            ],
            [
                'budget_number' => '11-EXP-892',
                'description' => '',
                'strategic_plan_number' => ''
            ],
            [
                'budget_number' => '11-EXP-593',
                'description' => '',
                'strategic_plan_number' => ''
            ],
        ];
        foreach($budgets as $budget){
            $budgetModel = new Budget();

            $budgetModel->create($budget);
        }

    }
}
