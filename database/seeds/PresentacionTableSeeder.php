<?php

use App\Models\Presentacion;
use Illuminate\Database\Seeder;

class PresentacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Presentacion::truncate();

        $presentacion=new Presentacion();
        $presentacion->director="Nelson Emilio";
        $presentacion->correo="relacionesinternacionales@ufps.edu.co";
        $presentacion->textoPresentacion="La oficina de Relaciones Internacionales de la Universidad Francisco de Paula Santander, ha optado por realizar acciones y establecer contactos pertinentes que favorezcan el desarrollo y cristalicen la Política de Internacionalización, mediante la búsqueda, suscripción y mantenimiento de vínculos de cooperación con instituciones del exterior, que permitan instaurar programas de interés común para estudiantes, docentes e investigadores";
        $presentacion->contacto="Edificio Torre Administrativa, Of. TA 304
        Avenida Gran Colombia N°12 E - 96 Barrio Colsag
        Cúcuta
        Norte de Santander
        Zip Code
        Colombia
        
        E-mail: 	relacionesinternacionales@ufps.edu.co
        Teléfono: 	(057) (7) 5752664 - 5776655 Ext. 240";
        $presentacion->mision="La oficina de Relaciones Internacionales de la Universidad Francisco de Paula Santander, ha optado por realizar acciones y establecer contactos pertinentes que favorezcan el desarrollo y cristalicen la Política de Internacionalización, mediante la búsqueda, suscripción y mantenimiento de vínculos de cooperación con instituciones del exterior, que permitan instaurar programas de interés común para estudiantes, docentes e investigadores.

        La relación con la comunidad académica está sustentada en el acompañamiento a las unidades interesadas en la formalización de convenios. Asesorías y apoyo individualizado sobre posibilidades de acceso a programas en el exterior, sean becas, estudios, pasantías, entre otros, e información sobre acceso a crédito, documentación y procedimientos; mediante el desarrollo de conferencias, talleres y cursos la Oficina brinda constante actualización, de igual manera, los extranjeros interesados en hacer parte de nuestra Comunidad Académica contarán con éstos servicios.";
        $presentacion->vision="La Universidad Francisco de Paula Santander, consciente de la importancia de la internacionalización para las Instituciones de Educación Superior, la instaura como propósito en el Proyecto Educativo Institucional y eje estratégico transversal del Plan de Desarrollo Institucional; ello comprueba el interés de nuestra Institución por construir una cultura de lo internacional en su que hacer docente, investigativo y de extensión, que permita y motive en la comunidad Universitaria su interacción con el mundo.

        Determina que el proceso de internacionalización proyectará la Universidad en el ámbito nacional e internacional, estableciendo políticas que faciliten el tránsito de estudiantes y docentes en las mejores universidades del mundo, en el marco de la globalización de la cultura. La Política de Internacionalización se aprueba mediante el Acuerdo N° 027 de 2010
     
        El Modelo de Internacionalización de la Universidad y sus unidades académicas se basa en la adopción y complementación de cuatro dimensiones primordiales, así:
     
     Dimensión Institucional: Fortalecimiento y proyección institucional.
     Dimensión Académica y Curricular: Internacionalización del currículo, movilidad y nuevas competencias.
     Dimensión de la Investigación: Innovación y transformación productiva para la competitividad regional.
     Dimensión del Desarrollo Regional Transfronterizo: Entendimiento mutuo y la cooperación binacional e internacional.
        De igual manera, mediante el desarrollo de diferentes actividades en casa, se busca la cohabitación de la Comunidad Académica con elementos internacionales e interculturales que favorezcan la inmersión en ambientes globales y beneficien la proyección internacional. Aunque no implican desplazamientos físicos para nuestra comunidad, este tipo de actividades brindarán valor agregado y a futuro motivaran en ésta el interés y anhelo por vivencias reales.";
        $presentacion->fotoDirector="https://ww2.ufps.edu.co/public/imagenes/noticia/8744522d756df68c19e3768e6bb99f76.jpg";
        $presentacion->save();



    }
}
