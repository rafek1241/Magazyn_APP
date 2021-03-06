<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('produkty')->insert([
          'pid' =>"SN132",
        	'nazwa'=>"Sneakersy",
        	'producent'=>"Dziecioł Zdrój",
        	'aleja'=>4,
        	'pozycja'=>5,
        	'box'=>2,
        	'ilosc'=>15,
        	'typ'=>'Meskie',
        	'model'=>"DZ452MMS",
        	'rozmiar'=>41,
        ]);
DB::table('produkty')->insert([
          'pid' =>"JXI321",
        	'nazwa'=>"Japonki",
        	'producent'=>"XinCompany",
        	'aleja'=>2,
        	'pozycja'=>5,
        	'box'=>2,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"XX452XXS",
        	'rozmiar'=>35,
        ]);
DB::table('produkty')->insert([
          'pid' =>"SNI932",
        	'nazwa'=>"Snickersy",
        	'producent'=>"BootsProducer",
        	'aleja'=>4,
        	'pozycja'=>5,
        	'box'=>1,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"BP452AAS",
        	'rozmiar'=>41,
        ]);
DB::table('produkty')->insert([
          'pid' =>"BOB221",
        	'nazwa'=>"Bobasy",
        	'producent'=>"Beebook",
        	'aleja'=>7,
        	'pozycja'=>8,
        	'box'=>2,
        	'ilosc'=>5,
        	'typ'=>'Damskie',
        	'model'=>"BB452KKS",
        	'rozmiar'=>36,
        ]);
DB::table('produkty')->insert([
          'pid' =>"ABI111",
        	'nazwa'=>"AbiPołer",
        	'producent'=>"Abibas",
        	'aleja'=>3,
        	'pozycja'=>2,
        	'box'=>2,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"WW452ZMS",
        	'rozmiar'=>41,
        ]);
DB::table('produkty')->insert([
          'pid' =>"ROH321",
        	'nazwa'=>"Rosheswim",
        	'producent'=>"PodrobilNike",
        	'aleja'=>2,
        	'pozycja'=>1,
        	'box'=>4,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"TT492UMS",
        	'rozmiar'=>41,
        ]);
DB::table('produkty')->insert([
          'pid' =>"LAK123",
        	'nazwa'=>"Lakierki",
        	'producent'=>"Lakiernik",
        	'aleja'=>7,
        	'pozycja'=>10,
        	'box'=>1,
        	'ilosc'=>10,
        	'typ'=>'Meskie',
        	'model'=>"BB112ZMS",
        	'rozmiar'=>41,
        ]);
DB::table('produkty')->insert([
          'pid' =>"TRA111",
        	'nazwa'=>"Trapery",
        	'producent'=>"Ogr production",
        	'aleja'=>3,
        	'pozycja'=>2,
        	'box'=>1,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"JD444OGR",
        	'rozmiar'=>28,
        ]);
DB::table('produkty')->insert([
          'pid' =>"KOR001",
        	'nazwa'=>"Korki",
        	'producent'=>"Zike",
        	'aleja'=>2,
        	'pozycja'=>1,
        	'box'=>8,
        	'ilosc'=>10,
        	'typ'=>'Meskie',
        	'model'=>"JD666JDD",
        	'rozmiar'=>44,
        ]);
DB::table('produkty')->insert([
          'pid' =>"TRA001",
        	'nazwa'=>"Trampki",
        	'producent'=>"Abibas",
        	'aleja'=>4,
        	'pozycja'=>8,
        	'box'=>1,
        	'ilosc'=>5,
        	'typ'=>'Meskie',
        	'model'=>"AB481SMS",
        	'rozmiar'=>39,
        ]);
        DB::table('historia')->insert([
        	'czynnosc'=>"Dodawanie",
        	'opis'=>"Operator dodal nowy produkt \"najki\".",
        ]);
        DB::table('historia')->insert([
        	'czynnosc'=>"Edycja",
        	'opis'=>"Operator edytowal produkt \"najki\".",
        ]);
    }
}
