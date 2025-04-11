<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert(
            [
                [
                    'title' => 'Te acompañamos en la compra de tu nuevo hogar de forma segura',
                    'image' => 'broker-casa-propia.jpg',
                    'preview' => 'El sueño de la casa propia y los desafíos que conlleva poder hacer realidad esa gran meta es algo que nos persigue siempre. Entendemos las dificultades y las inquietudes de cada
                        comprador a la hora de dar el primer paso.',
                    'content' => '
                        <p>El sueño de la casa propia y los desafíos que conlleva poder hacer realidad esa gran meta
                        es algo que nos persigue siempre. Entendemos las dificultades y las inquietudes de cada
                        comprador a la hora de dar el primer paso.</p>

                        <p>Comprar una casa propia es una decisión muy importante, y esto requiere de información
                        precisa y contar con un acompañamiento seguro y eficaz para no cometer errores en las
                        diferentes fases y transacciones.</p>

                        <p>En la actualidad contamos con múltiples plataformas digitales de real estate que <strong>te
                        acercan información de valor</strong> para ganar tiempo e invertirlo en el recorrido de inmuebles,
                        pero muchas veces sin resultados positivos. Desde nuestra experiencia entendimos que la
                        concreción de la compra y el resultado buscado se obtiene desde el <strong>encuentro cara a cara,</strong>
                        el conocer con detalle las necesidades, dificultades, los miedos. Cada caso es particular
                        para nosotros y es ahí donde buscamos una estrategia acorde y brindamos el acompañamiento
                        a cada persona.</p>

                        <p>En #RedFox trabajamos con un equipo multidisciplinario con visión 360 para acompañarte en
                        este nuevo reto. Te contamos nuestro diferencial:</p>

                        <ol>
                            <li><strong>Valor humano</strong>: escuchamos, entendemos y guiamos en esta ruta de la mejor forma.
                            No atendemos a simples “clientes“, acompañamos y compartimos con cada persona
                            que llega. Nos interiorizamos con cada historia enfocados en la búsqueda de soluciones.</li>

                            <li><strong>Profesionalismo multidisciplinario</strong>: nuestro staff cuenta con profesionales de
                            la rama de la abogacía, contable y bienes raíces para lograr desempeñar un
                            trabajo completo según tus necesidades.</li>

                            <li><strong>Seguridad</strong>: no todos cuentan con suficiente información o experiencias previas
                            para poder llevar adelante el proceso de la compra de un inmueble. Nuestro staff
                            actúa de guía e intermediario para lograr que la operación sea de forma segura y
                            eficaz. Estamos regulados por el colegio inmobiliario con matrícula correspondiente
                            que nos habilita a realizar esta actividad.</li>

                            <li><strong>Conocer el mercado</strong>: contamos con profesionales instruidos para generar estrategias
                            y planes comerciales con visión certera a la hora de la compra o inversión en un
                            inmueble en un mercado tan fluctuante como el nuestro.</li>

                            <li><strong>Contactos</strong>: dentro de #RedFox contamos con bases de información y contactos que
                            funcionan de red para cruzar datos y lograr dar con el inmueble acorde a lo buscado.</li>
                        </ol>

                        <p>Para cada persona, pareja, familia, existe un hogar ideal. Nosotros queremos
                        ayudarte en ese momento clave para lograr tu sueño.</p>
                    ',
                    'seo_title' => 'RedFox | Te acompañamos en la compra de tu nuevo hogar de forma segura',
                    'seo_meta_description' => 'El sueño de la casa propia y los desafíos que conlleva poder hacer realidad esa gran meta es algo que nos persigue siempre',
                    'seo_meta_tags' => 'Web, inmobiliaria, Real Estate, Propiedades, Inversiones, Casa propia, comprar tu casa, hogar, inmobiliarias, alquileres',
                    'outstanding' => true,
                ],

                [
                    'title' => 'Tasación de un inmueble',
                    'image' => 'blogs-redfoxweb.jpg',
                    'preview' => 'El puntapié inicial para poder poner un inmueble a la venta es necesario hacer una tasación formal',
                    'content' => '
                        <p>El puntapié inicial para poder poner un inmueble a la venta es necesario hacer una
                        tasación formal y entender con qué contamos. La misma se trata de un proceso que
                        nos permite determinar el valor económico real de un bien raíz en función de sus
                        características, por ejemplo:</p>

                        <ul>
                            <li>Tamaño.</li>
                            <li>Ubicación.</li>
                            <li>Número de habitaciones.</li>
                            <li>Baños acabados.</li>
                            <li>Antigüedad de la propiedad.</li>
                            <li>Cercanía respecto a puntos de interés, como colegios y vías de acceso.</li>
                            <li>Características del área circundante.</li>
                            <li>Valor del terreno.</li>
                            <li>Área construida.</li>
                        </ul>

                        <p>
                            Una vez que contamos con toda la información podemos proceder a poner un precio
                            real para ejecutar las publicaciones adecuadas según las demandas que tiene el mercado.
                        </p>

                        <p>
                            Dentro de la tasación existen varios puntos a tener en cuenta con lo que nos encontramos
                            a diario en el estudio, y los cuales traemos para llevar mayor claridad y despejar todas
                            las dudas y temores que se presentan.
                        </p>

                        <p>
                            <strong>1. Poner un precio alto para salir al mercado</strong>
                            En ciertas ocasiones resulta tentador salir en una primera publicación con un precio por encima
                            del valor real para cubrirse en el caso de que haya una negociación previa. Esto solo genera
                            desgaste y frustración en el propietario, ya que la mayoría de las veces no es una estrategía
                            que dé buenos resultados.
                        </p>

                        <p>
                            Se pierden posibles compradores, y se extiende a un ciclo sin fin de negociaciones, pero está
                            vez, entre el propietario y la empresa inmobiliaria. La solución siempre es ir con el precio
                            real y entender el mercado y sus fluctuaciones.</p>

                        <p>
                            <strong>2. No visitar la vivienda</strong>
                            Creer que con tan solo los planos, las fotografías y una entrevista con los dueños de la
                            propiedad es más que suficiente para establecer un precio aproximado es totalmente falso.
                            Es necesario visitar la propiedad y caminarla con el o los propietarios. Entender qué
                            precisan, cuáles son sus necesidades y cuáles son las virtudes de la vivienda. También,
                            es necesario entender cuáles son los puntos más flojos y con qué podemos encontrarnos para
                            poder solucionarlo antes de tener las primeras producciones y visitas.</p>

                        <p>
                            <strong>3. No solicitar la documentación completa</strong>
                            Tener toda la información y documentación necesaria de la propiedad es imprescindible a la
                            hora de hacer la tasación. Saber con cuántos metros cuadrados se cuenta por escritura nos
                            ayudará a dar un precio real. También es necesario saber si contamos con planos, deudas,
                            expensas, etc entre otros papeles para brindar una mejor asesoría.
                        </p>

                        <p>
                            Recordemos siempre que una buena tasación no es la que nos de el precio que esperamos por
                            nuestra propiedad, sino que nos de el precio real según el mercado. La inmobiliaria que sea
                            responsable y entienda esto será la que nos dará una estrategía acorde para lograr la venta
                            de la propiedad.
                        </p>
                    ',
                    'seo_title' => 'RedFox | Tasación de un inmueble',
                    'seo_meta_description' => 'El puntapié inicial para poder poner un inmueble a la venta es necesario hacer una tasación formal',
                    'seo_meta_tags' => 'Web, inmobiliaria, Real Estate, Propiedades, Inversiones',
                    'outstanding' => true,
                ],

                [
                    'title' => 'Los grandes mitos del sector inmobiliario',
                    'image' => 'realestate.jpg',
                    'preview' => 'Dentro del rubro inmobiliario sobrevuelan diversos mitos urbanos que muchas veces ayudan a dudar y crear miedos a la hora de elegir una empresa para acompañar los cambios de inmuebles.',
                    'content' => '
                        <p>
                            Dentro del rubro inmobiliario sobrevuelan diversos mitos urbanos que muchas veces ayudan a
                            dudar y crear miedos a la hora de elegir una empresa para acompañar los cambios de inmuebles.
                            Ya sea para la compra o venta, estar atentos y descreer de la mayoría de las oportunidades que
                            se nos presentan es moneda corrientes.
                        </p>

                        <p>
                            Por eso, desde #RedFox queremos presentar algunos puntos importantes a tener en cuenta a la
                            hora de elegir una empresa para ayudar en las transacciones necesarias.
                        </p>


                        <p>No dar la exclusiva a una sola inmobiliaria </p>
                        <p>
                            La mayoría de las personas creen que es mucho mejor tener su propiedad en varias inmobiliarias
                            con el ideal de llegar a más personas. Esto no es verdad, ya que al no tener una exclusiva de
                            la propiedad, hace que puedas perder la venta de tu inmueble. Es decir, que la propiedad circule
                            en varias empresas solo crea confusión y se rige a las reglas de cada staff para lograr la venta.
                        </p>

                        <p>Debo elegir la inmobiliaria que venda la propiedad en el precio que deseo </p>
                        <p>
                            Falso, algunas inmobiliarias con poca experiencia, tratan de conseguir el inmueble para la venta
                            diciendo lo que el cliente desea escuchar, esto se transforma en algo poco realista y genera
                            frustración.
                        </p>

                        <p>
                            La idea es poder estirar los tiempos y mostrar al propietario que según cierto tiempo puedan
                            bajar el precio. Es por ello, que se debe elegir la inmobiliaria que te genere confianza, te
                            explique los puntos con claridad y te ofrezca la mejor estrategia para la venta.
                        </p>

                        <p>Todos los ejecutivos de ventas son iguales.</p>
                        <p>
                            En #RedFox trabajamos con un equipo multidisciplinario compuesto por abogados, contadores y
                            ejecutivos de bienes raíces para poder brindarte una estrategia 360 acompañado con el mejor
                            plan para cada cliente que llega al estudio. El valor humano que ofrecemos desde el primer
                            contacto nos distingue por encima de otras empresas, nos ocupamos y acompañamos a cada uno
                            en el camino de la compra/venta de su inmueble. Nuestro trabajo es guiar para obtener el
                            resultado buscado, pero también el estar a disposición para lo que precisen post-transacción.
                        </p>

                        <p>No importa la producción audiovisual para la exposición de tu propiedad en los portales
                        <p>
                            Todo entra por los ojos, y es por eso que necesitamos de una producción profesional para
                            las fotografías que expondremos en las diferentes plataformas digitales.
                            Es de suma importancia poder despersonalizar el inmueble, contratar fotógrafos profesionales
                            y darle una visión 360 de lo que estamos vendiendo. Pensemos que el primer contacto será con
                            ese material, concretar una cita y una posible venta (posterior) es poder presentar y dar un
                            sentido de pertenencia del futuro hogar.
                        </p>

                        <p>Vender/comprar con inmobiliaria es muy caro</p>
                        <p>
                            Es falso, ya que dependiendo del lugar donde se compra/vende la propiedad el porcentaje para
                            todas las inmobiliarias es el mismo. También es necesario entender que, en el caso de ser el
                            comprador, la comisión a la inmobiliaria la paga el propietario, por ende no genera un costo
                            extra al comprador.
                        </p>

                        <p>
                            Este valor va a permitir que todas las partes de la transacción cuenten con la asesoría y
                            acompañamiento legal y de bienes raíces necesarios para cerrar los trámites de forma óptima.
                        </p>

                    ',
                    'seo_title' => 'RedFox | Los grandes mitos del sector inmobiliario',
                    'seo_meta_description' => 'Dentro del rubro inmobiliario sobrevuelan diversos mitos urbanos que muchas veces ayudan a dudar y crear miedos a la hora de elegir una empresa para acompañar los cambios',
                    'seo_meta_tags' => 'Web, inmobiliaria, Real Estate, Propiedades, Inversiones, rubro inmobiliario',
                    'outstanding' => false,
                ],

                [
                    'title' => '¿Por qué es beneficioso comprar una casa?',
                    'image' => 'inversiones-maqueta.jpg',
                    'preview' => 'La compra de un inmueble es una de las decisiones más importantes a tomar en la vida de una persona. Previo a la compra de la propiedad, el comprador pasa por dudas y temores.',
                    'content' => '
                        <p>
                            La compra de un inmueble es una de las decisiones más importantes a tomar en la vida de una
                            persona. Previo a la compra de la propiedad, el comprador pasa por dudas y temores. Saber si
                            realmente conviene una casa o un departamento, cerca o lejos de la ciudad son patrones que
                            muchas veces se repiten.
                        </p>

                        <p>
                            Dede #RedFox queremos compartir en este artículo algunos motivos para entender los beneficios
                            de comprar una casa y entender por qué sería una gran inversión para vos y tu familia.
                        </p>

                        <p>
                            <strong>1. Trabajar desde el hogar:</strong> la pandemia que nos mantuvo dentro de casa nos enseñó la importancia
                            de los espacios y ambientes que necesitamos en nuestro hogar. Ella también nos mostró lo fácil
                            y cómodo de trabajar desde nuestro hogar y hoy, es una tendencia que sigue presente en la sociedad.
                        </p>

                        <p>
                            <strong>2. Contar con espacios verdes:</strong> tener lugares propios para la dispersión propia y en familia es
                            fundamental. Nuevas oportunidades de disponer espacios propios como los compartidos son
                            puntos a favor. La simple razón de estar en casa lleva a buscar zonas menos pobladas,
                            lejos del caos de la ciudad y lograr más descanso y óseo de calidad.
                        </p>

                        <p>
                            <strong>3. Contar con servicios extras:</strong> comprar una casa en un barrio privado nos otorga varias
                            ventajas. Contar con los amenities del mismo lugar nos brinda una vida en comunidad,
                            nuevos vínculos y experiencias extraordinarias. En muchas ocasiones, estos barrios
                            cuentan canchas de tenis, fútbol, golf, salones de eventos, fiestas internas, campeonatos,
                            eventos, entre otras actividades.
                        </p>

                        <p>
                            <strong>4. Seguridad para nuestros seres queridos:</strong> uno de los pilares fuertes para la decisión del
                            cambio es contar con seguridad privada, tener un círculo de confianza y monitoreo constante.
                        </p>

                        <p>
                            <strong>5. La inversión:</strong> a largo plazo el negocio en bienes raíces es una de las mejores apuestas,
                            la cual crece y se revaloriza año tras año.
                        </p>

                        <p>
                            Observamos que las necesidades de las personas cambian, mutan año tras año. El que antes
                            veía con buenos ojos la compra de un departamento, hoy piensa en buscar una casa. Las
                            personas con poco espacio abierto, también piensan en lugares abiertos con más espacio
                            de diversión y compartir.
                        </p>

                        <p>
                            Entre nuestras propiedades podemos compartir una de estas casas más soñadas en un barrio
                            cerrado exclusivo de Buenos Aires. Ingresá y conocé más de ella: (casa de Terravista)
                        </p>
                    ',
                    'seo_title' => 'RedFox | ¿Por qué es beneficioso comprar una casa?',
                    'seo_meta_description' => 'La compra de un inmueble es una de las decisiones más importantes a tomar en la vida de una persona. Previo a la compra de la propiedad, el comprador pasa por dudas y temores.',
                    'seo_meta_tags' => 'Web, inmobiliaria, Real Estate, Propiedades, Inversiones, compra de un inmueble, propiedades inmobiliarias, casas, hogar, inmobiliarias',
                    'outstanding' => false,
                ],

                [
                    'title' => 'Cómo preparamos tu propiedad para la producción audiovisual',
                    'image' => 'render-inmobiliario.jpg',
                    'preview' => 'A la hora de buscar una propiedad en sitios online la primera impresión cuenta. Son segundos con los que contamos para poder captar la atención de posibles compradores a través de las imágenes',
                    'content' => '
                    <p>
                        A la hora de buscar una propiedad en sitios online la primera impresión cuenta. Son
                        segundos con los que contamos para poder captar la atención de posibles compradores
                        a través de las imágenes, es por eso que una buena producción fotográfica es importante.
                    </p>

                    <p>
                        Pero detengámonos en este punto. ¿Qué significa para las ventas tener buenas fotos?
                        La realización de una buena producción audiovisual (fotos y videos) significara más
                        visitas, más consultas, más ofertas y mayor posibilidades de venta. Un gran avance
                        son los tours 360 que podemos ofrecer a los posibles compradores. Se buscan vídeos
                        y visitas virtuales para ver si gusta el aspecto de la misma antes de visitarla en
                        persona.
                    </p>

                    <p>
                        Desde RedFox, te damos algunos tips para poder llevar adelante una buena producción
                        audiovisual para exponer de la mejor forma la propiedad. Es necesario:
                    </p>

                    <p>
                        <strong>1. Despersonalizar la propiedad:</strong> dejar la casa lo más vacía posible para el momento de
                        las fotos y vídeos. Con esto logramos que los posibles compradores se puedan imaginar
                        en ella con sus propias pertenencias, colocar su impronta y pensar cómo se sentirían
                        en ella.
                    </p>

                    <p>
                        <strong>2. Limpieza:</strong> antes de la producción coordinar con un equipo la limpieza profunda de la
                        propiedad para poder dar una mejor imagen.

                    <p>
                        <strong>3. Luz natural:</strong> elegir el mejor momento que nos regala cada vivienda para realzar los
                        puntos más positivos.
                    </p>
                    <p>
                        <strong>4. Tomas de diferentes ángulos:</strong> realizar una producción completa, con tomas de todos
                        los ángulos posibles que pueda entregar mayor información y precisión a los usuarios
                        que navegan por el sitio.
                    </p>

                    <p>
                        <strong>5. Sin límites de horarios:</strong> cuando se coordina una producción siempre se debe pensar que
                        llevará tiempo, mucho. Es por eso, que necesitamos coordinar toda una jornada con el
                        equipo de producción e inquilinos para no incomodar y traer todo el material necesario.
                        Es preferible que sobre tiempo a que falte.
                    </p>

                    <p>
                        <strong>6. Equipo profesional:</strong> es necesario contratar a profesionales del área y no improvisar con nada.
                    </p>

                    <p>
                        Es necesario pensar que todo entra por los ojos, que las primeras impresiones cuentan, y mucho.
                        No escatimemos recursos, tiempo, ni tampoco subamos material sin chequear porque nos gana la
                        ansiedad. Es mejor tomarse más tiempo pero que sea un producto final aceptable y competitivo.
                    </p>
                    ',
                    'seo_title' => 'RedFox | Cómo preparamos tu propiedad para la producción audiovisual',
                    'seo_meta_description' => 'A la hora de buscar una propiedad en sitios online la primera impresión cuenta. Son segundos con los que contamos para poder captar la atención de posibles compradores a través de las imágenes',
                    'seo_meta_tags' => 'Web, inmobiliaria, Real Estate, Propiedades, Inversiones, compra de un inmueble, propiedades inmobiliarias, casas, hogar, inmobiliarias, renders, audiovisuales, presentaciones',
                    'outstanding' => false,
                ],
            ]
        );
    }
}
