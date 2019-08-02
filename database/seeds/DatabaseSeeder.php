<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'user'=> 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('unities')->insert([
            ['sigla' => 'HU', 'name' => 'Hospital Unimed', 'cnpj' => ''], 
            ['sigla' => 'SEDE', 'name' => 'Sede Administrativa', 'cnpj' =>''],
            ['sigla' => 'CA', 'name' => 'Central de Autorizações', 'cnpj' => ''],
            ['sigla' => 'PC', 'name' => 'Posto de Coleta', 'cnpj' => ''],
        ]);

        DB::table('departaments')->insert([
            ['sigla' => 'NDH', 'name' => 'Atenção Integral a Saúde','unity_id'=> '1','cost_center' => '730'],
            ['sigla' => 'AGT', 'name' => 'Agência Transfusional','unity_id'=> '1','cost_center' => '1025'],
            ['sigla' => 'AUD', 'name' => 'Auditoria de Enfermagen','unity_id'=> '1','cost_center' => '461'],
            ['sigla' => 'ADT', 'name' => 'Auditorio HU','unity_id'=> '1', 'cost_center' => '1275'],	
            ['sigla' => 'BER', 'name' => 'Berçario','unity_id'=> '1', 'cost_center' => '840'],	
            ['sigla' => 'CAL', 'name' => 'Caldeira','unity_id'=> '1', 'cost_center' => '1305'],	 
            ['sigla' => 'CCIH', 'name' => 'CCIH','unity_id'=> '1', 'cost_center' => '804'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Coordenação','unity_id'=> '1', 'cost_center' => '960'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Densitometria Ossea','unity_id'=> '1', 'cost_center' => '985'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Estar (Técnicos/Médicos)','unity_id'=> '1', 'cost_center' => '1000'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Exames Endoscópicos','unity_id'=> '1', 'cost_center' => '915'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Laudos','unity_id'=> '1', 'cost_center' => '995'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Mamografia','unity_id'=> '1', 'cost_center' => '975'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Raio X','unity_id'=> '1', 'cost_center' => '970'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Recepção','unity_id'=> '1', 'cost_center' => '990'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Ressonância','unity_id'=> '1', 'cost_center' => '1005'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Tomografia','unity_id'=> '1', 'cost_center' => '965'],	
            ['sigla' => 'CDI', 'name' => 'CDI - Ultrassonografia','unity_id'=> '1', 'cost_center' => '980'],	
            ['sigla' => 'AGE', 'name' => 'Central de Agendamentos','unity_id'=> '1', 'cost_center' => '1196'],	
            ['sigla' => 'CC', 'name' => 'Centro Cirurgico','unity_id'=> '1', 'cost_center' => '855'],	 
            ['sigla' => 'CO', 'name' => 'Centro Obstetrico','unity_id'=> '1', 'cost_center' => '865'],	 
            ['sigla' => 'CME', 'name' => 'CME','unity_id'=> '1', 'cost_center' => '950'],	 
            ['sigla' => 'COM', 'name' => 'Compras','unity_id'=> '1', 'cost_center' => '1230'],	 
            ['sigla' => 'ENF', 'name' => 'Coordenacao Enfermagem','unity_id'=> '1', 'cost_center' => '820'],	
            ['sigla' => 'CRP', 'name' => 'Corpo Clinico','unity_id'=> '1', 'cost_center' => '41'],	    
            ['sigla' => 'CPAE', 'name' => 'CPAE','unity_id'=> '1', 'cost_center' => '1070'],	 
            ['sigla' => 'NDH', 'name' => 'Nucleo Desenvolvimento Humano','unity_id'=> '1', 'cost_center' => '290'],	
            ['sigla' => 'FAR', 'name' => 'Farmácia Central','unity_id'=> '1', 'cost_center' => '1055'],	 
            ['sigla' => 'FAT', 'name' => 'Faturamento','unity_id'=> '1', 'cost_center' => '1205'],
            ['sigla' => 'FIN', 'name' => 'Financeiro','unity_id'=> '1', 'cost_center' => '535'],	
            ['sigla' => 'FIS', 'name' => 'Fisioterapia','unity_id'=> '1', 'cost_center' => '935'],	
            ['sigla' => 'HOT', 'name' => 'Hotelaria','unity_id'=> '1', 'cost_center' => '1085']      
        ]);
        
        DB::table('equipaments')->insert([
            'patrimony' => '12412',
            'name' => 'H-TI-8',
            'so' => 'Windows 7',
            'arquiteture' => 'x64',
            'pc_brand' => 'HP',
            'pc_model' => 'PRODESK 400 G4 SFF',
            'service_tag' => 'ABG12345',
            'partnumber' => '123456GG12BR',
            'proc_brand' => 'Intel',
            'proc' => 'i5-7500',
            'proc_hz' => '3.40',
            'memory' => '8',
            'memory_ddr' => 'DDR4',
            'memory_frequency' => '2133',
            'qtd_slots' => '2',
            'memory_slots' => '2',
            'disk' => '240',
            'disk_type' => 'SSD',
            'user' => 'augusto.grafen',
            'departament_id' => '1'
            ]);

        DB::table('maintences')->insert([
            'data' => '2018-08-01',
            'obs' => 'Primeira Manutenção',
            'equipament_id' => '1',
            'departament_id' => '1'
        ]);


    }
}
