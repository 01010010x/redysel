<?php

use Illuminate\Database\Seeder;
use App\Paquete;
use App\Imagen;

class PaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $paquete4 = Paquete::create([
        //     'nombre'=> '2 Megas', 
        //     'subtitulo' => 'Plan Personal',
        //     'descripcion' => 'Si eres estudiante y tus trabajos son de investigación y de envío de archivos, este plan es para ti. Disfruta también de tus redes sociales como FACEBOOK y WHATSAPP.',
        //     'precio' => 150,
        //     'folio' => 'f-872341']);
        
        $paquete1 = Paquete::create([
            'nombre'=> '5 Megas', 
            'subtitulo' => 'Plan Básico',
            'descripcion' => 'Con este plan podrás conectar hasta 3 dispositivos de manera simultanea. Disfrutar de tus redes sociales preferidas e incluso tu SMARTTV.',
            'precio' => 250,
            'folio' => 'f-872341']);
        $paquete2 = Paquete::create([
            'nombre'=> '8 Megas', 
            'subtitulo' => 'Plan Familiar ',
            'descripcion' => 'Disfruta de tus mejores series con toda la familia. Conecta tu SMARTTV o Laptop y disfruta de la mejor experiencia en video conferencias y clases en linea.',
            'precio' => 350,
            'folio' => 'f-872342']);
        $paquete3 = Paquete::create([
            'nombre'=> '10 Megas', 
            'subtitulo' => 'Plan PRO ',
            'descripcion' => 'Conecta hasta 7 dispositivos móviles de manera simultánea. Disfruta de tus redes sociales, plataformas de entretenimiento y más. Navega sin preocupaciones.',
            'precio' => 450,
            'folio' => 'f-872343']);


    }
}
