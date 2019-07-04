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

        DB::table('departaments')->insert([
            ['name' => 'Atenção Integral a Saúde','local'=> 'Hospital Unimed','cost_center' => '730'],
            ['name' => 'Agência Transfusional','local'=> 'Hospital Unimed','cost_center' => '1025'],
            ['name' => 'Auditoria de Enfermagen','local'=> 'Hospital Unimed','cost_center' => '461'],
            ['name' => 'Auditorio HU','local'=> 'Hospital Unimed', 'cost_center' => '1275'],	
            ['name' => 'Berçario','local'=> 'Hospital Unimed', 'cost_center' => '840'],	
            ['name' => 'Caldeira','local'=> 'Hospital Unimed', 'cost_center' => '1305'],	 
            ['name' => 'CCIH','local'=> 'Hospital Unimed', 'cost_center' => '804'],	
            ['name' => 'CDI - Coordenação','local'=> 'Hospital Unimed', 'cost_center' => '960'],	
            ['name' => 'CDI - Densitometria Ossea','local'=> 'Hospital Unimed', 'cost_center' => '985'],	
            ['name' => 'CDI - Estar (Técnicos/Médicos)','local'=> 'Hospital Unimed', 'cost_center' => '1000'],	
            ['name' => 'CDI - Exames Endoscópicos','local'=> 'Hospital Unimed', 'cost_center' => '915'],	
            ['name' => 'CDI - Laudos','local'=> 'Hospital Unimed', 'cost_center' => '995'],	
            ['name' => 'CDI - Mamografia','local'=> 'Hospital Unimed', 'cost_center' => '975'],	
            ['name' => 'CDI - Raio X','local'=> 'Hospital Unimed', 'cost_center' => '970'],	
            ['name' => 'CDI - Recepção','local'=> 'Hospital Unimed', 'cost_center' => '990'],	
            ['name' => 'CDI - Ressonância','local'=> 'Hospital Unimed', 'cost_center' => '1005'],	
            ['name' => 'CDI - Tomografia','local'=> 'Hospital Unimed', 'cost_center' => '965'],	
            ['name' => 'CDI - Ultrassonografia','local'=> 'Hospital Unimed', 'cost_center' => '980'],	
            ['name' => 'Central de Agendamentos','local'=> 'Hospital Unimed', 'cost_center' => '1196'],	
            ['name' => 'Centro Cirurgico','local'=> 'Hospital Unimed', 'cost_center' => '855'],	 
            ['name' => 'Centro Obstetrico','local'=> 'Hospital Unimed', 'cost_center' => '865'],	 
            ['name' => 'CME','local'=> 'Hospital Unimed', 'cost_center' => '950'],	 
            ['name' => 'Compras','local'=> 'Hospital Unimed', 'cost_center' => '1230'],	 
            ['name' => 'Coordenacao Enfermagem','local'=> 'Hospital Unimed', 'cost_center' => '820'],	
            ['name' => 'Corpo Clinico','local'=> 'Hospital Unimed', 'cost_center' => '41'],	    
            ['name' => 'CPAE','local'=> 'Hospital Unimed', 'cost_center' => '1070'],	 
            ['name' => 'Desenvolvimento Humano','local'=> 'Hospital Unimed', 'cost_center' => '290'],	
            ['name' => 'Farmácia Central','local'=> 'Hospital Unimed', 'cost_center' => '1055'],	 
            ['name' => 'Faturamento','local'=> 'Hospital Unimed', 'cost_center' => '1205'],
            ['name' => 'Financeiro','local'=> 'Hospital Unimed', 'cost_center' => '535'],	
            ['name' => 'Fisioterapia','local'=> 'Hospital Unimed', 'cost_center' => '935'],	
            ['name' => 'Hotelaria','local'=> 'Hospital Unimed', 'cost_center' => '1085']      
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


    }
}
