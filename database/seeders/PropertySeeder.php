<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Departamento Penthouse en Venta Belgrano 5 Ambientes. Terraza y Pileta Propia',
                    'price' => 700000,
                    'currency' => 'USD',
                    'address' => '3 de Febrero 2141, Belgrano',
                    'zip_code' => '1428',
                    'operation' => 'En Venta',
                    'description' => "
                        Penthouse de estilo moderno funcional ubicado en zona residencial segura, de vistas panorámicas a la ciudad, en cercanía a la plaza Barrancas de Belgrano. Este piso es un hallazgo poco común. Posee proximidad a una variada oferta comercial.
                        <br /><br />
                        Es una propiedad de 4 dormitorios, 3 baños y 2 toilettes de ambientes amplios, cómodos y con detalles exclusivos. La torre tiene 15 años de antigüedad, la unidad fue remodelada hace 8 años en diseño y categoría.
                        <br /><br />
                        Al abrirse paso hacia el nivel superior llegará a su excepcional piscina, donde podrá disfrutar de la sensación de relax, rodeado de confort y en total privacidad.
                        <br /><br />
                        Una pieza arquitectónica que debe ser percibida en forma personal.
                        <br /><br />
                        Distribución:
                        <br /><br />
                        Piso 10:<br />
                        – Entrada principal por palier privado<br />
                        – Living comedor con amplio balcón.<br />
                        – Toilette y placard de recepción.<br />
                        – Cocina, con sol de mañana y ventilación natural, modernizada Íntegramente.<br />
                        – Dos dormitorios cómodos con placard , con excelente vista y Súper luminosos.<br />
                        – Baño completo con ventanal y excelente ventilación y luz natural.<br />
                        – Entrada de servicio.<br />
                        – Lavadero.<br />
                        – Dependencia de servicio.<br />
                        <br /><br />
                        Piso 11:<br />
                        – El dormitorio principal amplio en suite con vestidor y baño con jacuzzi<br />
                        – Parrilla propia en zona semicubierta.<br />
                        – Piscina privada en zona semicubierta.<br />
                        – Toilette.<br />
                        – La unidad tiene 1 cochera propia en el edificio.<br />
                        <br /><br />
                        El edificio cuenta con entrada principal y de servicio, cocheras y servicio de portería 24 hs.
                        Todos los dormitorios tienen AA frío-calor y , al igual que el living-comedor.
                        <br /><br />
                        Ubicación:
                        La ubicación es excelente, a 1 cuadra de Juramento, 5 de Cabildo y 4 de Libertador. Cerca de subte D, Tren y Barrancas de Belgrano. Restaurantes, Bares, Cines, Bancos, Colegios y gran cantidad de comercios cercanos.
                        <br /><br />
                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad
                        <br /><br />
                        Posibilidad de financiar saldo de precio, también se puede tomar alguna propiedad de menor valor en parte de pago.
                        <br /><br />
                        Corredor: Augusto José Müller CUCICBA: 7910.
                        <br /><br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.",

                    'bathrooms' => 3,
                    'rooms' => 4,
                    'outstanding' => false,
                    'square_meters' => 285,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2091,
                    'estate_id' => 1,
                ],

                [
                    'id' => 2,
                    'name' => 'Lote en Venta Club Náutico Boat Center, Tigre',
                    'price' => 150000,
                    'currency' => 'USD',
                    'address' => 'Club Náutico Boat Center de Tigre',
                    'zip_code' => '1712',
                    'operation' => 'En Venta',
                    'description' => "
                        Lote de 520m² ubicado en el barrio privado Club Náutico Boat Center de Tigre. La unidad cuanta con amarra propia y seguridad. El lugar muy tranquilo. El mísmo tiene acceso desde Nordelta por tierra y por agua a través de su propio canal, desembocando al río Luján. Ubicado muy cerca del centro comercial Nordelta, a 5 minutos del centro de Nordelta, así también como una gran variedad de servicios y ofertas comerciales.<br /><br />

                        El lote tiene escritura y está con los papeles listos para transferir.<br /><br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br /><br />

                        Corredor: Augusto José Müller CMCPSI 6735<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 520,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 6805,
                    'estate_id' => 6,
                ],

                [
                    'id' => 3,
                    'name' => 'Venta Departamento 3 Ambientes Mar del Plata, Chauvin',
                    'price' => 180000,
                    'currency' => 'USD',
                    'address' => 'Mar del Plata, Argentina',
                    'zip_code' => '1712',
                    'operation' => 'En Venta',
                    'description' => "
                        Departamento de 3 ambientes en 4to Piso. Privilegiada ubicación. Zona residencial y muy tranquila. A 6 cuadras de la Plaza del Agua y a media cuadra de la Plaza Güemes.<br /><br />
                        Impecable estado con detalles de categoría, Hermosa vista y superluminoso dada la orientación Noreste al frente.<br /><br />
                        Amplio Living-Comedor. Cocina completa con amoblamientos en alto y bajo mesada en perfecto estado. Barra desayunadora con cómodo espacio para lavarropas.<br /><br />
                        Habitación principal en suite y otra habitación que actualmente se usa como escritorio. También se puede usar como segundo dormitorio debido a sus dimensiones. Amplios placards en ambas habitaciones.<br /><br />
                        El departamento posee un segundo baño completo. Bañera en ambos baños.<br /><br />
                        Cuenta con un balcón al frente y otro al contrafrente.<br /><br />
                        Caldera individual. Calefacción en todos los ambientes.<br /><br />
                        Edificio con ascensor.<br /><br />
                        Cochera propia.<br /><br />
                        La terraza del edificio dispone de un Salón de Usos Múltiples con amoblamientos de categoría, moderna parrilla a gas y cocina completa.<br /><br />
                        Muy lindo espacio al aire libre para recreación.<br /><br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br /><br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br /><br />

                        Corredor: Augusto José Müller CMCPSI 6735<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 0,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 6357,
                    'estate_id' => 6,
                ],

                [
                    'id' => 4,
                    'name' => 'Venta Monoambiente Villa Urquiza con Terraza Propia',
                    'price' => 98500,
                    'currency' => 'USD',
                    'address' => 'Quesada al 5400, Villa Urquiza, Ciudad Autónoma de Buenos Aires',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Monoambiente único en la zona.<br /><br />
                        Se encuentra en primer piso por escalera. Además, cuenta con terraza propia ubicada en el segundo piso de mayores dimensiones.<br /><br />
                        Departamento super-luminoso y con techos altos.<br />
                        Terraza con vista abierta, lo que permite aprovechar el sol durante todo el día.<br />
                        La propiedad se sitúa en Villa Urquiza con gran variedad comercios, medios de transportes y fácil accesibilidad.<br />
                        A dos cuadras de Av. Congreso y Av. Triunvirato.<br />
                        Zona muy tranquila.<br /><br />

                        La propiedad cuenta con:<br />
                        Cocina amoblada con mesada amplia en impecable estado.<br />
                        Ambiente principal con pisos de porcelanato en muy buen estado.<br />
                        Posee una subdivisión que le brinda privacidad al espacio destinado a la habitación respetando la entrada de luz en todos los sectores del departamento.<br />
                        Baño completo con bañera.<br />
                        Amplio balcón cubierto con lavadero y espacio para lavarropas.<br />
                        Gran terraza con moderna pérgola, parrilla y bacha con mesada.<br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />

                        Corredor: Augusto José Müller CUCICBA: 7910.<br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.<br />
                        ",
                    'bathrooms' => 1,
                    'rooms' => 1,
                    'outstanding' => false,
                    'square_meters' => 81,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2028,
                    'estate_id' => 1,
                ],

                [
                    'id' => 5,
                    'name' => 'Venta Departamento en Haedo con Patio Propio',
                    'price' => 80000,
                    'currency' => 'USD',
                    'address' => 'Ayacucho 385, Haedo/ Morón, Haedo, Provincia de Buenos Aires',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Departamento en venta Haedo, Morón 2 Ambientes. Con patio, ubicado en zona residencial, con solamente 15 años de antigüedad y excelente estado de conservación. El inmueble se encuentra en la planta baja del edificio, Los ambientes cuentan con mucha iluminación gracias a que cuenta con una amplia galería con vista al patio trasero de la propiedad.<br /><br />

                        Descripción de ambientes:<br />

                        Cocina:La cocina posee bajo mesada en notable condición de conservación, cuenta con cocina (4 hornallas + horno), extractor.<br /><br />

                        Living comedor:<br />

                        Sector del inmueble espacioso e iluminado, que conecta los distintos ambientes entre sí, y, por su parte, tiene acceso a la galería y patio externo.<br /><br />

                        Baño:<br />

                        En buenas condiciones, completo con ducha y ventiluz al patio interno<br /><br />

                        Dormitorio:<br />

                        El dormitorio tiene una puerta corrediza a un pequeño patio interno lo que le aporta luminosidad al ambiente, el mismo cuanta con un placard empotrado muy espacioso y calefacción de tiro balanceado.<br /><br />

                        Patio interno:<br />

                        La propiedad cuenta con un patio interno que da gran iluminación al dormitorio. El mismo, cuenta con un pequeño depósito.<br /><br />

                        Galería y patio principal:<br />

                        La galería cuenta con techo y ventanas blindex, además de un sector de lavadero con bacha. Por su parte, el patio tiene una porción cubierta con piso de cemento y el resto con pasto natural.<br /><br />

                        La propiedad cuenta con calefacción individual y aire acondicionado instalado.<br /><br />
                        Ubicación:<br />
                        -A una cuadra de Av. Rivadavia<br />
                        -Transporte público: Estación de trenes y subtes (Haedo línea Roca y Sarmiento, estación Ramos Mejía)<br />
                        -Universidad UTN, jardines y colegios.<br />
                        -Plazas y variedad de ofertas comerciales (supermercados, farmacias y centros comerciales).<br />
                        -Hospital Dr. Guemes, Clínica Tachella.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />
                        Corredor: Augusto José Muller CMCPSI: 6735.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.<br />
                        ",
                    'bathrooms' => 1,
                    'rooms' => 1,
                    'outstanding' => false,
                    'square_meters' => 96,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 6568,
                    'estate_id' => 6,
                ],

                [
                    'id' => 6,
                    'name' => 'Venta Lote Gral Rodriguez',
                    'price' => 18000,
                    'currency' => 'USD',
                    'address' => 'Mercedes 700, Las Malvinas, General Rodriguez',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Lote en venta en General Rodriguez, frente de 10 x 30 de largo, total de 300 m2<br />
                        Ubicado en un barrio en crecimiento, a solo 20 cuadras de Acceso Oeste . Se encuentra a 12 minutos del centro comercial de Gral Rodriguez.<br />
                        Medios de transportes cercanos, tren Sarmiento, 57,203<br />
                        Listo para escriturar.<br /><br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />
                        Corredor: Augusto José Müller CMCPSI 6735.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modificaciones y las normas reglamentarias dictadas por los colegios departamentales.<br />
                        ",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 300,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 6364,
                    'estate_id' => 6,
                ],

                [
                    'id' => 7,
                    'name' => 'Venta Casa San Fernando 4 Ambientes',
                    'price' => 140000,
                    'currency' => 'USD',
                    'address' => 'Intendente Arnoldi 1600, San Fernando',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Hermosa casa con frente de ladrillos a la vista de 4 espaciosos ambientes y en perfecto estado. La construcción de la casa es impecable y se encuentra todo en funcionamiento. La propiedad se encuentra en la cercanía de plazas y medios de transporte público.<br /><br />

                        La unidad cuenta con:<br />
                        -Un ambiente a la entrada con aire acondicionado<br />
                        -Tres dormitorios, amplios, bien iluminados y con cercanía al baño<br />
                        -Baño completo con bañera<br />
                        -Cocina muy bien amoblada<br />
                        -Patio trasero, amplio, con acceso a la terraza<br />
                        -Terraza con vista al barrio que abarca la totalidad del inmueble y posibilidad de ampliar la construcción<br />
                        -Cochera cubierta<br />
                        -Baulera<br />
                        -Jardín delantero<br /><br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br />

                        Corredor: Augusto José Müller CMCPSI 6735<br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales
                        ",
                    'bathrooms' => 1,
                    'rooms' => 3,
                    'outstanding' => false,
                    'square_meters' => 159,
                    'times_visited' => 0,
                    'type_id' => 1,
                    'city_id' => 6749,
                    'estate_id' => 6,
                ],
                [
                    'id' => 8,
                    'name' => 'Venta Monoambiente Almagro',
                    'price' => 53500,
                    'currency' => 'USD',
                    'address' => 'Estado de Palestina 549, Almagro',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Monoambiente en venta en Almagro, ubicado en calle Palestina. 6 años de antigüedad ubicado en planta
                        baja a metros del Hospital Italiano, cuenta con patio parcialmente techado, el cual aporta gran iluminación
                        al ambiente. Cuenta con aire acondicionado, gas natural y agua corriente.<br /><br />

                        Descripción:
                        Ambiente principal: El ambiente principal del inmueble cuenta con pisos de madera en excelente
                        estado así como también un ventanal con salida al patio, aportando gran iluminación a todo el
                        departamento.<br /><br />

                        Cocina:<br />
                        La cocina se encuentra amoblada con bajo mesadas, alacenas, amplia mesada y heladera que se
                        encuentra integrada en el bajo mesadas.<br /><br />

                        Baño:<br />
                        El baño cuenta con ducha.<br /><br />

                        Patio:<br />
                        Gran patio en parte techado, en parte sin techar, fuente de iluminación del departamento.<br /><br />

                        Transporte público:<br />
                        Estaciones de subte y trenes: Línea A (Castro Barros, Loria, Río de Janeiro) y línea B
                        (Medrano y Angel Gallardo) y una gran variedad de líneas de colectivo<br /><br />

                        Educación:<br />
                        Cercano a jardines infantiles así como también colegios primarios. CBC – Ramos Mejía,
                        UTNl – FRBA, UP, Facultad de Psicología<br /><br />

                        Cercanía con áreas verdes (Plaza Almagro, Parque Centenario) centros comerciales (Shoppping Abasto,
                        Paseo Comercial Balvanera, etc.) centros de salud (Hospital Italiano, Naval, entre otros)<br />
                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />
                        Corredor: Augusto José Muller CUCICBA: 7910.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades
                        exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340,
                        la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 1,
                    'outstanding' => false,
                    'square_meters' => 35,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2014,
                    'estate_id' => 2,
                ],
                [
                    'id' => 9,
                    'name' => 'Venta Departamento 4 Ambientes San Nicolás',
                    'price' => 99000,
                    'currency' => 'USD',
                    'address' => 'Av. Corrientes 1373, San Nicolás',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Departamento de cuatro ambientes con muy buena iluminación. Excelente ubicación en pleno centro,
                        sobre una de las avenidas más importantes de la ciudad. A 3 cuadras del Obelisco. A metros de la
                        estación Uruguay del Subte B y del Metrobus con transporte a toda la ciudad y salida inmediata a
                        provincia de Buenos Aires.<br /><br />

                        Por las cualidades de sus ambientes, es apto para uso tanto residencial como profesional.
                        En materia de seguridad, al ser una zona turística y muy transitada, cuenta con gran presencia
                        policial y sistema de cámaras en el todo el barrio.<br />
                        Se destaca también la gran cantidad de actividades y entretenimiento, sumado a los locales
                        comerciales de ambos lados de las avenidas cercanas Av. 9 de Julio.<br /><br />

                        La unidad cuenta con:<br />
                        -Cocina completa y amoblada con calefón, anafe y horno a gas<br />
                        -Un ambiente al ingreso, más pequeño, para diferentes usos.<br />
                        -Dos amplios ambientes con pisos de madera parqué, ambos con placares.<br />
                        -El tercer ambiente cuenta con un entrepiso que aporta a la estética del lugar, además cuenta con
                        amplios placares en la parte baja así también como placares y estanterías en el entrepiso.<br />
                        -Baño completo con bañera.<br />
                        -Baño de servicio.<br /><br />

                        Corredor: Augusto José Müller CMCPSI 6735 CUCICBA 7910.<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266,
                        la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por
                        los colegios departamentales.
                        ",
                    'bathrooms' => 2,
                    'rooms' => 3,
                    'outstanding' => false,
                    'square_meters' => 74,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2007,
                    'estate_id' => 2,
                ],
                [
                    'id' => 10,
                    'name' => 'Lote en Venta Sobre Ruta 213 en Barrio San Isidro, Posadas 2/2',
                    'price' => 15000,
                    'currency' => 'USD',
                    'address' => 'Misiones, Posadas, San Isidro',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Lote de 320m² ubicado sobre Ruta 213 , Barrio San Isidro. El lugar muy tranquilo, cuenta con
                        una reserva natural, a 15 minutos del centro, así también como una gran variedad de servicios
                        y ofertas comerciales.<br /><br />

                        El lote tiene escritura y está con los papeles listos para transferir.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br />
                        Corredor: Augusto José Müller CCPM 171.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley
                        20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias
                        dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 320,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 54028,
                    'estate_id' => 54,
                ],
                [
                    'id' => 11,
                    'name' => 'Lote en Venta Sobre Ruta 213 en Barrio San Isidro, Posadas 1/2',
                    'price' => 15000,
                    'currency' => 'USD',
                    'address' => 'Misiones, Posadas, San Isidro',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Lote de 320m² ubicado sobre Ruta 213 , Barrio San Isidro. El lugar muy tranquilo, cuenta con una
                        reserva natural, a 15 minutos del centro, así también como una gran variedad de servicios y ofertas
                        comerciales.<br /><br />

                        El lote tiene escritura y está con los papeles listos para transferir.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br />
                        Corredor: Augusto José Müller CCPM 171.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266,
                        la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas
                        por los colegios departamentales.
                        ",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 320,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 54028,
                    'estate_id' => 54,
                ],
                [
                    'id' => 12,
                    'name' => 'Venta Departamento 3 ambientes La Boca',
                    'price' => 58000,
                    'currency' => 'USD',
                    'address' => 'La Boca, Argentina',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Departamento de 3 ambientes en el barrio de La Boca, Ciudad Autónoma de Buenos Aires.<br /><br />

                        Se trata de una propiedad ubicada en el 6to piso lo que lo hace muy luminoso y con una vista abierta a la ciudad.<br /><br />

                        Características de los ambientes:<br />

                        -Living comedor: Cómodo, con hall de entrada y balcón francés que aporta muy buena iluminación.<br />
                        -Cocina: equipada con bajo mesada, alacena y cocina con horno. Bien iluminada gracias a un amplio ventanal.<br />
                        -Baño: completo con bañera, al cual se accede por un hall de distribución que también lleva a los dormitorios dos dormitorios.<br />
                        -Dormitorios: Ambos cuentan con placares empotrados. El primer dormitorio tiene vista al exterior, el segundo dormitorio da acceso al lavadero.<br />
                        -Lavadero: Ambiente cerrado con ventana al exterior, bacha y mesada de azulejos.<br /><br />

                        Lugares relevantes en la cercanía:<br />
                        Líneas de Colectivo: 8, 20, 25, 33, 53, 64, 86, 130, 152, 159, 168, entre otras.<br />
                        Cercanía con gran variedad de colegios, jardines, plazas, comercios, clínicas y hospitales.<br />
                        Corredor Inmobiliario Augusto Muller CUCICBA 7910.<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades
                        exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340,
                        la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 2,
                    'outstanding' => false,
                    'square_meters' => 59,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2028,
                    'estate_id' => 2,
                ],
                [
                    'id' => 13,
                    'name' => 'Venta Local Comercial en Recoleta, Juncal 1300',
                    'price' => 200000,
                    'currency' => 'USD',
                    'address' => 'Juncal 1300, Recoleta',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Excelente local comercial en venta de 7m de frente con vidriera sobre calle Juncal
                        en transitada zona comercial de Recoleta.<br /><br />

                        Distribución:<br />
                        Planta baja: cuenta con 45m² de local con cocina y toilette.<br />

                        Subsuelo: cuenta con 35m² de subsuelo actualmente siendo utilizados como depósito.<br />

                        El local se encuentra en excelentes condiciones generales. No es apto para gastronomía.<br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br />

                        Corredor: Augusto José Müller CUCICBA 7910<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley
                        20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias
                        dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 80,
                    'times_visited' => 0,
                    'type_id' => 4,
                    'city_id' => 2014,
                    'estate_id' => 2,
                ],
                [
                    'id' => 14,
                    'name' => 'Venta PH de 5 Ambientes en Caballito',
                    'price' => 270000,
                    'currency' => 'USD',
                    'address' => 'Francisco Bilbao, Caballito Sur',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        PH en venta sobre la calle Bilbao, con excelente iluminación.<br /><br />

                        Planta baja:<br />

                        Living-comedor: se encuentra al ingresar a la propiedad. El mismo es muy amplio y luminoso,
                        el mismo, originalmente el patio del PH, ha sido remodelado y techado con vidrio para permitir
                        el paso de luz. A nuestra izquierda se encuentran los 3 dormitorios de la planta baja, seguidos
                        por el baño y luego, al seguir por el living-comedor hacia el fondo, nos encontramos con una
                        barra desayunadora que da a la cocina.<br /><br />

                        Dormitorios: La propiedad cuenta con 3 dormitorios en la planta baja. El tercer dormitorio
                        hacia el fondo es el dormitorio principal, el cual ha aprovechado espacio del dormitorio
                        del medio para crear un vestidor.<br /><br />

                        Baño: Baño completo con bañera y grifería muy vistosa y en excelente estado.<br /><br />

                        Cocina: Cocina equipada con una amplia mesada, bajomesada y alacenas. Cuenta también con
                        una barra al living. El ambiente tiene espacio suficiente para agregar más muebles aparte
                        de la heladera.<br /><br />

                        Planta alta:<br />

                        Dormitorio: Al subir la escalera por el living-comedor no topamos primero con un dormitorio
                        más en la curva de la escalera.<br /><br />

                        Quincho: Al continuar llegamos al quincho, equipado con una amplia mesada y alacenas y lugar
                        para poner una mesa y más muebles. El mismo nos da acceso al lavadero y a la terraza.<br /><br />

                        Lavadero: el mismo cuenta con lugar para lavarropas, y suficiente espacio para utilizar el
                        espacio cómodamente.<br /><br />

                        Terraza: muy amplia, techada solo parcialmente.<br /><br />

                        Cercanía con lugares relevantes en la zona:<br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.
                        <br /><br />

                        Corredor: Augusto José Muller CUCICBA: 7910.
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley
                        20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias
                        dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 4,
                    'outstanding' => false,
                    'square_meters' => 187,
                    'times_visited' => 0,
                    'type_id' => 7,
                    'city_id' => 2042,
                    'estate_id' => 2,
                ],
                [
                    'id' => 15,
                    'name' => 'Venta Casa con tres Ambientes, Cochera y Quincho – Cuatro Monoambientes al fondo',
                    'price' => 37800000,
                    'currency' => 'Pesos',
                    'address' => 'Acevedo 5578, Posadas',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Múdate a una hermosa Casa en el Barrio San Miguel, a 1 cuadra de Tambor de Tacuarí y Av. 115.
                        <br />

                        Casa de 3 ambientes con cochera para 2 autos y gran quincho semicubierto.
                        Esta propiedad posee cuatro departamentos independientes que te permiten
                        una renta mensual. ! Oportunidad de negocio!
                        <br /><br />

                        Descripción de la casa<br />

                        Hall de entrada:<br />
                        Cochera/galería de 37,44 m, (para 2 autos).<br /><br />

                        Dormitorios:<br />
                        -Primer cuarto: Amplio con ventana al este de la propiedad.<br />
                        -Segundo cuarto: Dormitorio principal, más amplio, con ventana al este de la propiedad.
                        <br /><br />

                        2 Baños:<br />
                        -Completo con ducha, se accede a través del pasillo.<br />
                        -Completo con ducha, se accede a través del Quincho.<br /><br />

                        Living-comedor:<br />
                        Amplio con acceso al cuarto de lavado y al quincho.<br /><br />

                        Cocina:<br />
                        Amplia, amoblada con bajomesadas.<br /><br />

                        Cuarto de lavado:<br />
                        Habitación para fines varios, originalmente utilizada como
                        cuarto de lavado, con pileta de lavar con canilla.<br /><br />

                        Quincho con parrilla:<br />
                        39,36 m² El quincho cuenta con parrilla, mesada, muebles
                        bajomesada y una pileta con canilla. Con un baño completo.<br /><br />

                        Patios:<br />
                        Patio con mucha luz, a lado del quincho, y patio que
                        ofrece acceso a la dependencia de los departamentos.<br /><br />

                        Descripción de los Departamentos:<br />
                        Entrada independiente, al seguir por el pasillo nos
                        encontramos con un patio de acceso a los dptos. de 2 pisos.<br /><br />

                        Departamentos en planta baja: 24 m²<br />
                        -Primer dpto.: cocina, comedor, 1 habitación y 1 baño.<br />
                        -Segundo dpto.: Ubicado en el pasillo de enfrente, idénticas características y medida.<br /><br />

                        Departamentos el primer piso: 27,75 m²<br />
                        Se accede por escalera, la misma se encuentra en el medio de los edificios.<br />
                        -Primer dpto.: cocina, comedor, 1 habitación y 1 baño.<br />
                        -Segundo dpto.: Ubicado en el pasillo de enfrente, idénticas características y medida.<br /><br />

                        Lavadero:<br />
                        Cada dpto. cuenta con su lavadero, ubicado en la parte trasera del hall de entrada.<br /><br />

                        El inmueble tiene cercanía con:<br />

                        Transporte:<br />
                        Colectivos (líneas varias)<br /><br />

                        Educación:<br />
                        Jardín maternal, escuela primaria y secundaria.<br /><br />

                        Áreas Verdes:<br />
                        Plaza San Miguel.<br /><br />

                        Comercios:<br />
                        A pocas cuadras de supermercado “CHANGO MAS” y gran variedad de
                        ofertas comerciales, tiendas, rotiserías y farmacias.<br /><br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas
                        surgirán del título de propiedad.<br /><br />

                        Corredor: Augusto José Muller<br />
                        La tasación, intermediación y la conclusión de las operaciones
                        sobre esta propiedad son actividades exclusivas de este corredor
                        matriculado, conforme las previsiones de la ley 20.266, la ley
                        CABA 2340, la ley provincial 10.973 y sus modif. y las normas
                        reglamentarias dictadas por los colegios departamentales. Las
                        expensas, ABL y AySA no son exactas y están sujetas a modificaciones.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 4,
                    'outstanding' => false,
                    'square_meters' => 338,
                    'times_visited' => 0,
                    'type_id' => 7,
                    'city_id' => 54028,
                    'estate_id' => 54,
                ],
                [
                    'id' => 16,
                    'name' => 'Venta Lote – Paraje Villalonga Lote 8 Mz E',
                    'price' => 79633,
                    'currency' => 'USD',
                    'address' => 'Villalonga, Misiones',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Lote con cercanía a Playa Costa Sur<br />

                        Paraje Villalonga<br />

                        Terreno de 187 mt2. con salida en ambas calles ( delante y detrás) 160 y 162 A.<br />

                        A 10 minutos del centro de Posadas. A 300 metros de la Playa COSTA SUR .<br /><br />

                        Barrio tranquilo a pocas cuadras de la autovía de acceso sur.<br />
                        Frente al terreno hay una plaza central con juegos, ideal para familias y niños pequeños.<br />

                        Se encuentra en cercanía al arroyo Zaiman.<br /><br />

                        El lote se encuentra próximo a diversos negocios como supermercados, entre otros.<br /><br />

                        Papeles al día listo para escriturar.<br /><br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.
                        Corredor: Augusto José Müller CCPM 171
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son
                        actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley
                        20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias
                        dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 0,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 187,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 54028,
                    'estate_id' => 54,
                ],
                [
                    'id' => 17,
                    'name' => 'Venta Departamento 2 Ambientes en Palermo con Balcón Cerrado',
                    'price' => 72000,
                    'currency' => 'USD',
                    'address' => 'Villalonga, Misiones',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Departamento en venta sobre Av. Medrano al 1600; 2 cómodos
                        ambientes con buena iluminación; seguridad las 24 hs.<br /><br />

                        La propiedad cuenta con:<br />

                        Living comedor: Amplio living comedor conectado con la cocina y con acceso al balcón con cerramiento.<br />

                        Dormitorio principal: Cuenta con un amplio placard y ventana que da al balcón, la cual aporta iluminación<br />

                        Cocina: Amoblada con alacena y bajomesada con acceso al living comedor, cocina de 3 hornallas.<br />

                        Baño: Completo con bañera.<br />

                        Balcón: Cerrado con un gran ventanal que aporta iluminación a todos los ambientes de la propiedad.<br />

                        Estaciones de subte/tren: En cercanía de las estaciones Scalabrini Ortiz y Bulnes de la línea D de subte.<br />

                        Paradas de colectivos: Cercano a las paradas de las líneas 29, 39, 111, 152, 160, 188, entre otras.<br />

                        Educación: Próximo a jardines de infantes como a escuelas primarias y secundarias.<br />
                        En cercanía de la Universidad de Palermo (Facultad de Ingeniería) y la Universidad Nacional de San Martin Pascal.<br />

                        Áreas verdes: El inmueble se encuentra a metros de la Plaza Güemes y de la Plaza Unidad Latinoamericana.<br />

                        Comercios: En cercanía de diversos comercios como farmacias, bares, restaurantes y a metros del Shopping Alto Palermo.<br />

                        Salud: Se encuentra a metros del Hospital de Niños Ricardo Gutiérrez y del Sanatorio San José, entre otros.<br />

                        Las expensas no son exactas y están sujetas a modificaciones.<br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />

                        Corredor: Augusto José Muller CUCICBA: 7910.<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad
                        son actividades exclusivas de este corredor matriculado, conforme las previsiones de
                        la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas
                        reglamentarias dictadas por los colegios departamentales.”
                        ",
                    'bathrooms' => 1,
                    'rooms' => 1,
                    'outstanding' => false,
                    'square_meters' => 35,
                    'times_visited' => 0,
                    'type_id' => 5,
                    'city_id' => 2098,
                    'estate_id' => 2,
                ],
                [
                    'id' => 18,
                    'name' => 'Venta PH 6 ambientes en Parque Patricios Esteban de Luca 2200',
                    'price' => 150000,
                    'currency' => 'USD',
                    'address' => 'Esteban de Luca 2210, Parque Patricios',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        PH de 6 ambientes para reciclar a la venta en Parque Patricios.
                        <br />
                        Descripción de los ambientes
                        <br />
                        Hall de entrada:
                        <br />
                        Cuarto amplio que nos da acceso al primer cuarto y conecta con el resto de la propiedad a través de un pasillo.
                        <br />
                        Dormitorios:
                        <br />
                        -Primer cuarto: Amplio con ventana a la calle
                        <br />
                        -Segundo cuarto: Dormitorio principal, más amplio, con ventana al patio de la propiedad.
                        <br />
                        Baño:
                        <br />
                        Completo con ducha, se accede a través del pasillo.
                        <br />
                        Oficina:
                        <br />
                        A continuación del baño.
                        <br />
                        Living-comedor:
                        <br />
                        Amplio con acceso al patio y la cocina.
                        <br />
                        Cocina:
                        <br />
                        Amplia, amoblada con bajomesadas y alacenas.
                        <br />
                        Toilettes:
                        <br />
                        La propiedad cuenta con dos toilettes, uno ubicado cerca del baño principal y el segundo se encuentra en la parte trasera, al cual se accede por un pasillo detrás de la cocina.
                        <br />
                        Patio:
                        <br />
                        Amplio patio con mucha luz, ofrece acceso a la dependencia, patio superior y cuarto de lavado en el primer piso, se accede por una escalera.
                        <br />
                        Dependencia:
                        <br />
                        Habitación de usos múltiples, al seguir por el pasillo nos encontramos con el patio del primer piso.
                        <br />
                        Patio superior:
                        <br />
                        Patio que conecta el pasillo de la escalera con el cuarto de lavado.
                        <br />
                        Cuarto de lavado:
                        <br />
                        Habitación para fines varios, originalmente utilizada como cuarto de lavado.
                        <br />
                        Cuartos en el primer piso:
                        <br />
                        Se accede por escalera, la misma se encuentra en el pasillo, junto a la puerta de la oficina.
                        <br />
                        -Primer cuarto: Idéntico al living comedor, cuenta con una claraboya grande que da al patio de la planta alta.
                        <br />
                        -Segundo cuarto: De menor tamaño, ubicado sobre la oficina.
                        <br />
                        El inmueble tiene cercanía con:
                        <br />
                        Transporte:
                        <br />
                        Estaciones de tren y subte (Caseros, Parque Patricios) y también de colectivos (líneas varias)
                        <br />
                        Educación:
                        <br />
                        Jardines maternales, escuelas primarias y secundarias y universidades como la facultad de psicología
                        <br />
                        Áreas Verdes:
                        <br />
                        Plaza coronel Rodríguez, parque de los patricios, plazoleta monteagudo, etc.
                        <br />
                        Comercios: Gran variedad de ofertas comerciales, supermercados y farmacias.
                        <br />
                        Salud:
                        <br />
                        -Hospital Muñiz
                        <br />
                        -Hospital de pediatría
                        <br />
                        -Centro medicó barrial
                        <br />
                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.
                        <br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.
                        <br />
                        Corredor: Augusto José Muller CUCICBA 7910
                        <br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales. Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.
                        ",
                    'bathrooms' => 2,
                    'rooms' => 2,
                    'outstanding' => false,
                    'square_meters' => 205,
                    'times_visited' => 0,
                    'type_id' => 7,
                    'city_id' => 2028,
                    'estate_id' => 2,
                ],
                [
                    'id' => 19,
                    'name' => 'Venta Departamento Dos Ambientes en Villa Crespo con Cochera Propia',
                    'price' => 110000,
                    'currency' => 'USD',
                    'address' => 'Lavalleja 620, Villa Crespo, Ciudad Autónoma de Buenos Aires',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Amplio departamento de 2 ambientes en venta en Villa Crespo, sobre la calle Lavalleja,
                        con excelente iluminación, a solo 6 cuadras de Parque Centenario, 2 cuadras de Av.
                        Corrientes y 4 de Av. Córdoba.<br />

                        Esta unidad se encuentra en un 5to Piso y se conserva en excelente estado de conservación.
                        El edificio está construido con una estética muy moderna y cuenta con cochera techada.<br /><br />

                        Sus características son:<br />

                        Living comedor: Al ingresar a la propiedad nos encontramos primero con un escritorio estratégicamente
                        ubicado junto a un toilette. Luego seguimos con el living comedor, con pisos de cerámica en notables
                        condiciones y un gran ventanal que da salida al balcón, por lo cual, el ambiente cuenta con excelente iluminación.<br />

                        El sector de la cocina está conectada al living comedor, tiene bajo mesadas, alacenas y una gran
                        mesada. A su vez, está equipada con cocina (4 hornallas + horno).<br />

                        El dormitorio cuenta con pisos de cerámica al igual que el living comedor, a su vez, posee un
                        placard empotrado, cuenta con un gran ventanal, por lo cual le da una muy buena iluminación,
                        también cuenta con un baño en suite muy moderno con bañadera.<br /><br />

                        Edificio con ascensor.<br />

                        Cochera propia.<br />

                        La terraza del edificio dispone de un salón de usos múltiples con parrilla y cocina completa.<br />

                        Muy lindo espacio al aire libre para recreación.<br />

                        Privilegiada ubicación. Zona residencial y muy tranquila.<br /><br />

                        Se encuentra en cercanía de diversos transportes públicos, a saber:<br />

                        Subtes y trenes:<br />

                        A 5 minutos de Ángel gallardo, Línea B<br />

                        Educación:<br />

                        A 20 min de Universidad de Palermo y a 17 min de Universidad Tecnológica Nacional – FRBA<br />

                        Espacios verdes:<br />

                        Plazoleta Elías Alippi, Plazoleta Baron Hirsch, Plazoleta Crucero General Belgrano<br />

                        Salud:<br />

                        Clínica de La Ciudad, Hospital Naval Buenos Aires Cirujano Mayor Doctor Pedro Mallo, Centro Médico Integral Fitz Roy<br />

                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br />

                        Corredor: Augusto José Müller CUCICBA 7910<br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades
                        exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340,
                        la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.
                        ",
                    'bathrooms' => 1,
                    'rooms' => 1,
                    'outstanding' => false,
                    'square_meters' => 40,
                    'times_visited' => 0,
                    'type_id' => 3,
                    'city_id' => 2105,
                    'estate_id' => 2,
                ],










                [
                    'id' => 50,
                    'name' => 'Venta – Clinica de Alta Complejidad en Especialidades con Cirugía – Pilar',
                    'price' => 350000,
                    'currency' => 'USD',
                    'address' => 'Office Park Norte, Buenos Aires, Pilar',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Se trata de una Clínica de Alta Complejidad que fue concebida para posicionarse rápidamente como líder en nuestro país. Equipada con tecnología de punta que permite lograr los más altos estándares de atención, con un bajo costo y tiempo de mantenimiento.<br />
                        Fue diseñada por un reconocido arquitecto sanitarista con la más alta especificidad, su visión logró darle a esta clínica estándares internacionales de excelencia.<br />
                        Ubicada en el complejo Office Park Plaza, Del Viso-Pilar, en un destacado Polo de Servicios de Salud de prestigiosa imagen institucional sobre Panamericana, acompañado de varios espacios gastronómicos, empresariales con estacionamientos privados y por hora para visitantes, lo convierten en el lugar perfecto.<br />
                        Sus excelentes consultorios y quirófanos equipados con la mejor tecnología la hacen ideal para cirugías ambulatorias de cualquier especialidad.<br />

                        Distribución descriptiva:<br />

                        Hall de acceso, recepción y distribución:<br />
                        Cuenta con un acceso a través de una puerta blindex con protección nocturna (rejas con cerradura) que permite el ingreso directo de pacientes a la recepción y sala de espera con espacio hasta 10 personas.<br />
                        En la recepción se encuentra el mostrador tipo Front Desk con dos puestos de recepcionistas desde el cual los pacientes y/o profesionales podrán ser direccionados a: sala de cambiado, el quirófano principal, sala de recuperación, sala de diagnóstico por imágenes, o la los consultorios privados ( bordó, azul y verde).<br />
                        A su derecha existe una puerta de ingreso exclusiva para profesionales que dirige a la zona de cambiado, baño privado, lockers, office y laboratorio. Continuando por un pasillo de uso exclusivo que comunica a los profesionales con el área pública.<br /><br />

                        Oficinas Administrativas:<br />

                        Detrás del mostrador de recepción ambas recepcionistas podrán ingresar a las salas de administración donde podrán organizar los archivos de los pacientes o documentación administrativa.<br /><br />

                        Sala de Máquinas:<br />

                        Cuenta con tanque de agua individual de triple filtrado de carbón activado con cristales de sal y desmineralizado, bomba presurizadora, comandos de los estabilizadores de tensión y paneles de control de los diferentes aires acondicionados de todas las salas.<br />
                        El Aire acondicionado central, específicamente para quirófano y consultorios, cuenta con presión positiva totalmente computarizados para controlar cada ambiente. Posee además un segundo aire para sala de espera, cocina y laboratorio.<br /><br />

                        Sala de Imágenes<br />
                        La misma contiene el correcto blindaje plomado para la realización de imágenes en rayos x.<br /><br />

                        Baño de profesionales<br />
                        Además del baño de pacientes en recepción, la clínica cuenta con otro baño que posee una cabina de ducha para profesionales junto a los lockers.<br /><br />

                        Laboratorio<br />
                        Cuanta con conexión para aire comprimido, desagüe, con una mesada de Corian-Dupont con su canilla de lavado incluida. Los pisos son Vinílico Armstrong.<br /><br />

                        Office – Cocina<br />
                        Continua al baño de profesionales se encuentra el office con lockers, ideal espacio de refrigerio para profesionales.<br /><br />

                        Sala de Esterilización<br />
                        Se accede a través de puertas de Blindex con Push Button, vidriado 360 grados permitiendo la vista al paciente del proceso de esterilización de contaminación. La zona de trabajo se compone de mesadas de Corian-Dupont sin superficie de relieve que evita contaminaciones cruzadas. Los pisos son de Vinílicos Armstrong con zócalos quirúrgicos redondeados para facilitar su máxima higiene.<br /><br />

                        Consultorios Bordó (1), Azul (2) y Verde (3)<br />
                        Todos los consultorios están revestidos en piso y pared con Vinílico Armstrong con zócalos quirúrgicos redondeados que permite una limpieza rápida, efectiva y sencilla.<br />
                        Poseen muebles montados sobre la pared con mesadas de Corian-Dupont los que se encuentran suspendidos sin contacto con el piso lo que permite una mejor higienización de los ambientes. Las bachas cuentan con canillas con sensores automáticos.<br />
                        Todas las mesadas están recubiertas con material de Dupont – DuPont™ Corian® material macizo, no poroso y homogéneo, compuesto por 1/3 de resina acrílica también conocida como polimetilmetacrilato o PMMA, y 2/3 de minerales naturales.<br />
                        Todos los consultorios presentan intercomunicadores con conexión de circuito cerrado y música funcional.<br />

                        Quirófano secundario-Sector de Transferencia-Quirófano Principal.<br />

                        El ingreso a esta área es a través del quirófano menor que puede utilizarse como sala de anestesia o preparación pre-quirúrgica, cuenta con Lámpara Scialítica alemana. Toda esta área cuanta con presión positiva con filtros HEPA contra agentes patógenos que se transmiten por aire para obtener procedimientos quirúrgicos asépticos.<br />
                        Se accede al sector de cambiado y transferencia de pacientes y el área de lavado prequirúrgico a través de la doble circulación al Quirofano Principal. Éste cuenta con una columna quirúrgica DRAGUER giratoria. Luz con foco japonés (Scialitica), doble puerta a sala de transferencia push button. Al estar construido en su totalidad con ventanales de piso a techo ofrece una visual abierta al interior del complejo.<br />

                        Sala de recuperación<br />

                        Pensada en el post operatorio frente al consultorio 3 se encuentra la sala de recuperación con capacidad para dos pacientes y familiares y/o acompañantes al término de cirugía.<br /><br />

                        Características Generales<br />

                        La clínica posee pisos Armstrong con zócalo sanitario que se extienden por las paredes hasta el techo, de fácil limpieza, desinfección y con muy bajo costo y tiempo para su mantenimiento.<br />
                        Los pisos y revestimientos en las áreas públicas son de porcelanato italiano.<br />
                        Todas las mesadas son Corian-Dupont (tipo silestone) con uniones imperceptibles y de sellado químico que no permite espacio de ingreso a bacterias. Calefacción y refrigeración sectorizadas por consultorio.<br />
                        La clínica cuenta en la terraza con un espacio sectorizado y cerrado con los equipos de refrigeración y calefacción. Asimismo tiene previsto en ese sector un espacio para la instalación futura compresores y grupo electrógeno.<br />
                        En el primer subsuelo se encuentran dos cocheras cubiertas fijas.<br />

                        Una clínica única en el mercado; sus instalaciones superan de manera exorbitante el precio de oportunidad en el que se encuentra ofrecida. Además existe posibilidades de financiación privada, consúltenos.<br /><br />

                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad.<br /><br />

                        Corredor: Augusto José Müller CMCPSI 6735.<br /><br />

                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.
                        ",
                    'outstanding' => true,
                    'bathrooms' => 2,
                    'rooms' => 0,
                    'square_meters' => 179,
                    'times_visited' => 0,
                    'type_id' => 2,
                    'city_id' => 6638,
                    'estate_id' => 6,
                ],

                [
                    'id' => 51,
                    'name' => 'Venta Casa de 4 ambientes Ubicada en Country Terravista, Zona Oeste',
                    'price' => 453000,
                    'currency' => 'USD',
                    'address' => 'Terravista, General Rodriguez',
                    'zip_code' => '1710',
                    'operation' => 'En Venta',
                    'description' => "
                        Excelente propiedad ubicada en el country Terravista, Zona Oeste. Espaciosa y de estilo arquitectónico racionalista, y una estética muy relajada y bien lograda.<br />
                        Permite el estacionamiento de hasta 4 vehículos en su cochera cubierta al frente.<br /><br />

                        Descripción de los ambientes:<br />
                        Al ver la casa de frente se aprecian los balcones, los cuales dan tanto a la parte posterior como anterior de la propiedad.<br /><br />

                        Planta Baja<br />

                        Living-comedor:<br />
                        Al ingresar a la propiedad nos encontramos con el primer ambiente. Un espacioso living comedor, dividido por un muro decorativo que separan la parte del living, demarcada por su piso de madera.<br /><br />

                        Cocina:<br />
                        Siguiendo por la derecha luego de ingresar a la propiedad nos encontramos con una muy amplia cocina amueblada con bajomesadas y alacenas. La misma cuenta con un kitchen island con cocina y extractor. La cocina cuenta con un montaplatos dirigido al cuarto principal.<br /><br />

                        Toilette:<br />
                        El mismo se encuentra entre la cocina y la escalera que lleva a planta alta.<br /><br />

                        Playroom:<br />
                        Al continuar hacia la derecha desde la cocina nos encontramos con la escalera que lleva a la planta alta, y a la izquierda de esta el playroom. El mismo cuenta con lugar para instalar equipos de sonido y video, pensado como un lugar para relajarse y disfrutar de contenidos multimedia. Este espacio también sirve como punto de control para el sistema de música y video centralizado de la casa.<br /><br />

                        Quincho con parrilla:<br />
                        A continuación del playroom se encuentra este amplio quincho con un amplio ventanal al exterior. Este cuenta con una parrilla dual (eléctrica y a carbón) y un baño completo.<br /><br />

                        Parque:<br />
                        Amplio parque con riego por aspersión automático, sectorizado y controlado por computadora con timer automático.<br /><br />
                        Los vidrios que dan al parque, al igual que todos los vidrios de la planta baja son antibandálicos, lo cual hace que el vidrio se astille en lugar de romperse. Dos reflectores de alta intensidad permiten iluminar con confort todo el amplio del parque. El mismo cuenta con una pileta de 3,5×11 m con playa húmeda, con timer y preparada para calefacción.<br /><br />

                        Garaje:<br />
                        Cubierto con lugar para cuatro vehículos.<br /><br />

                        Planta Alta<br />

                        Dormitorio Principal:<br />
                        Master Suite de 50 m². El ambiente se encuentra dividido dando lugar a un amplio vestidor, baño en suite completo, con ducha y bañera con hidromasaje y montaplatos a la cocina. El dormitorio cuenta con acceso a los balcones de la propiedad.<br /><br />

                        Escritorio:<br />
                        Amplio y cómodo ambiente empleado como escritorio. La propiedad cuenta con un sistema de cámaras de seguridad centralizadas en este ambiente con 16 bocas ocultas en toda la casa.<br /><br />

                        Dormitorios:<br />
                        Dos ambientes ubicados en planta alta, espaciosos y luminosos. Ambos con acceso a los balcones de la planta alata.<br /><br />

                        Baño:<br />
                        El amplio baño completo con bañera se encuentra ubicado al final del pasillo entre los dos escritorios.<br /><br />

                        Otras características de la propiedad:<br />
                        -Blackouts con control remoto en todos los ambientes de la propiedad.<br />
                        -Calefacción dual por radiadores y losa radiante en los lugares de tránsito.<br />
                        -Suministro de agua dual (by pass). Agua de bomba y corriente en caso de un eventual corte del suministro.<br />
                        -Instalación para generador eléctrico, automático y listo para usar.<br />
                        -Instalación eléctrica independiente en PB y PA.<br />
                        -Instalaciones de aire acondicionado en toda la casa sin caños a la vista con desagües internos.<br />
                        -Toda la propiedad está hecha en hormigón H21 de alta calidad.<br />
                        -Aberturas de PVC REHAU con doble vidrio en toda la casa.<br />

                        Este deslumbrante hogar que permitirá sensaciones elocuentes se encuentra en una de las mejores ubicaciones de este exclusive private city llamada Terravista; que introduce un concepto de interacción entre lotes desde 1000 m² y espacios verdes.<br /><br />
                        El barrio cuenta con un sistema de seguridad perimetral de última generación, 2 canchas de fútbol 11, 9 canchas de tenis, 1 de hockey, 1 playón polideportivo para básquet, vóley y fútbol 5.<br /><br />
                        El precio publicado no incluye los muebles, consultar por la opción de venta amoblada.<br /><br />

                        Corredor: Augusto José Müller CMCPSI 6735.<br /><br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.
                        ",
                    'outstanding' => true,
                    'bathrooms' => 2,
                    'rooms' => 3,
                    'square_meters' => 349,
                    'times_visited' => 0,
                    'type_id' => 1,
                    'city_id' => 6364,
                    'estate_id' => 6,
                ],


                //alquiler
                [
                    'id' => 52,
                    'name' => 'Oficina Comercial Tribunales.',
                    'price' => 340000,
                    'currency' => 'USD',
                    'address' => 'Corrientes 1386, San Nicolás, Ciudad Autoónoma de Beunos Aires',
                    'zip_code' => '1043',
                    'operation' => 'En Alquiler',
                    'description' => "
                        Oficina en venta o alquiler en Calle Corrientes. Amplia oficina ubicada en el edificio Apolo, para venta o alquiler en el barrio de San Nicolás. La unida cuenta con 216 m² dispuesta frente a calle Corrientes.
                        <br /><br />
                        Es una propiedad que cuenta con 8 ambientes, con destino de oficina, entre ellos, 2 baños. Cuenta con aire acondicionado, agua corriente, línea telefónica y luz eléctrica.
                        <br /><br />
                        Se encuentra próxima a las líneas de Subte A, B, C y D así como también a varias líneas de colectivos, ya que, está ubicada a 300 metros del Metro bus.<br />
                        Las expensas tienen un costo aproximado de $30.000.<br />
                        Las expensas, ABL y AySA no son exactas y están sujetas a modificaciones.<br />
                        Las medidas son aproximadas y orientativas. Las medidas exactas surgirán del título de propiedad<br />
                        Corredor: Augusto José Muller CUCICBA: 7910.<br />
                        La tasación, intermediación y la conclusión de las operaciones sobre esta propiedad son actividades exclusivas de este corredor matriculado, conforme las previsiones de la ley 20.266, la ley CABA 2340, la ley provincial 10.973 y sus modif. y las normas reglamentarias dictadas por los colegios departamentales.<br />
                    ",
                    'bathrooms' => 2,
                    'rooms' => 0,
                    'outstanding' => false,
                    'square_meters' => 216,
                    'times_visited' => 0,
                    'type_id' => 6,
                    'city_id' => 2007,
                    'estate_id' => 1,
                ],
            ]
        );
    }
}
