<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'admin@unitropico.edu.co',
            'password' => Hash::make('123456'),
        ]);

        DB::table('outlets')->insert([
            'name' => 'Entrada1',
            'address' => 'Entrada y salida peatonal:  Aquí podrás ingresar y salir de la universidad caminando y presentando tu carnet estudiantil.',
            'latitude' => '5.32237',
            'longitude' => '-72.38805',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Entrada2',
            'address' => 'Entrada vehicular: Aquí podrás entrar tu vehículo a la universidad presentando tu carné y el sticker de vehículo autorizado correspondiente.',
            'latitude' => '5.32311',
            'longitude' => '-72.38837',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Salida1',
            'address' => 'Salida vehicular: Aquí podrás salir de la universidad con tu respectivo vehículo.',
            'latitude' => '5.32067',
            'longitude' => '-72.39279',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Softball',
            'address' => 'Cancha de softball: Aquí podrás encontrar el espacio deportivo para el Softball y eventos de aviones.',
            'latitude' => '5.32029',
            'longitude' => '-72.39215',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Cafeteria',
            'address' => 'cafetería: Aquí puedes comer y comprar alimentos en la comodidad de las mesas de la cafetería universitaria.',
            'latitude' => '5.32110',
            'longitude' => '-72.38908',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'BloqueA',
            'address' => 'Bloque A: Salones del 101 al 212: mayormente los salones donde ven clases los estudiantes de las ingenierías.',
            'latitude' => '5.32143',
            'longitude' => '-72.38925',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'BloqueC',
            'address' => 'Bloque C: Aquí encontraras más laboratorios y salones de clases con una infraestructura diferente y con aires acondicionados.',
            'latitude' => '5.32151',
            'longitude' => '-72.39046',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Bienestar',
            'address' => 'Bienestar institucional: Aquí podrás realizar pedidos de implementos deportivos, hacer solicitudes deportivas y solicitar apoyo estudiantil.',
            'latitude' => '5.32159',
            'longitude' => '-72.38898',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'CanchaCubierta',
            'address' => 'Cancha cubierta: Aquí encuentras la cancha cubierta hecha para diversos deportes como vóley, básquet y soccer.',
            'latitude' => '5.32076',
            'longitude' => '-72.38892',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'CanchaTenis',
            'address' => 'Cancha de tenis: Aquí puedes practicar tus habilidades en el tenis con un excelente campo para este deporte.',
            'latitude' => '5.32165',
            'longitude' => '-72.38807',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'BibliotecaPublica',
            'address' => 'Biblioteca pública: En la biblioteca tendrás todos los libros que necesites para aumentar tu conocimiento y un espacio que puedes usar para realizar las respectivas lecturas.',
            'latitude' => '5.32231',
            'longitude' => '-72.38922',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'BloqueAdministrativo',
            'address' => 'Bloque Administrativo: Aquí podrás encontrar todo lo relacionado con cartera, admisiones a la universidad, ingresos, pagos y toda la parte de documentación de la universidad.',
            'latitude' => '5.32182',
            'longitude' => '-72.38869',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'ViveLab',
            'address' => 'Vive LAB: Aquí encuentras los respectivos servidores de la universidad, así como el laboratorio de ingeniería informática y todo con respecto a la tecnología de la universidad.',
            'latitude' => '5.32175',
            'longitude' => '-72.38890',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'AuditorioFundadores',
            'address' => 'Auditorio Fundadores: Aquí se realizan los seminarios, reuniones, graduaciones y eventos importantes de la Universidad.',
            'latitude' => '5.32166',
            'longitude' => '-72.38909',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'Entrada3',
            'address' => 'Esta es la entrada a los bloques de la universidad desde la zona de parqueo de la universidad.',
            'latitude' => '5.32165',
            'longitude' => '-72.38921',
            'creator_id' => 1,
        ]);

        DB::table('outlets')->insert([
            'name' => 'BloqueLaboratorios',
            'address' => 'Bloque laboratorios y emisora: aquí se encuentra los laboratorios de la universidad, también están los salones donde se ven las físicas y químicas.',
            'latitude' => '5.32137',
            'longitude' => '-72.38893',
            'creator_id' => 1,
        ]);
    }
}
