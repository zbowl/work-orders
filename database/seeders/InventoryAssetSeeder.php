<?php

namespace Database\Seeders;

use App\Models\InventoryAsset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //InventoryAsset::factory()
        //    ->count(50)
        //    ->create();

        $assets = [
            [
                'item_number' => 'METERE0200',
                'item_description' => '1100 ELSTER 2S REX2 METER STYLE#ZFCWM000000',
                'bin_number' => 'DD4D  1D2',
                'unit_price' => 8620,
                'quantity_on_hand' => 750,
                'safety_stock' => 51,
                'quantity_on_order' => 0,
                'quantity_allocated' => 2,
                'item_class_code' => 'MTR',
                'location_code' => 'MTR',
            ],
            [
                'item_number' => 'CLAMPS0012',
                'item_description' => 'CLAMP SERVICE WEDGE THOMAS & BETTS # W20-1FC AL',
                'bin_number' => 'O1C',
                'unit_price' => 372,
                'quantity_on_hand' => 19,
                'safety_stock' => 35,
                'quantity_on_order' => 0,
                'quantity_allocated' => 2,
                'item_class_code' => 'E',
                'location_code' => 'WH',
            ],
            [
                'item_number' => 'CLAMPS0018',
                'item_description' => 'CLAMP SINGLE BOLT #8-2/0 STR. ACSR ANDERSON # LC-52-C-XB',
                'bin_number' => 'O2G',
                'unit_price' => 197,
                'quantity_on_hand' => 800,
                'safety_stock' => 70,
                'quantity_on_order' => 0,
                'quantity_allocated' => 2,
                'item_class_code' => 'E',
                'location_code' => 'WH',
            ],
            [
                'item_number' => 'CONNEC0190',
                'item_description' => 'CONNECTOR INSULATION PIERCING SICAME #TTD-2110-FBTUNI',
                'bin_number' => 'BB15C BB19B',
                'unit_price' => 947,
                'quantity_on_hand' => 3048,
                'safety_stock' => 168,
                'quantity_on_order' => 12,
                'quantity_allocated' => 4,
                'item_class_code' => 'E',
                'location_code' => 'WH',
            ],
            [
                'item_number' => 'WIREAL0030',
                'item_description' => 'WIRE ALUM. #2-7W TRIPLEX "SHRIMP/XLP" 1000\' PER REEL',
                'bin_number' => 'UU3 & 4 A,B,C',
                'unit_price' => 74,
                'quantity_on_hand' => 21000,
                'safety_stock' => 1000,
                'quantity_on_order' => 0,
                'quantity_allocated' => 65,
                'item_class_code' => 'E',
                'location_code' => 'WH',
            ],
        ];

        foreach($assets as $asset){
            $assetModel = new InventoryAsset();
            $assetModel->create($asset);
        }


    }
}
