<template>
    <section class="bg-blue-values">
        <div class="container py-16">
            <div class="row">
                <h3 class="text-center redfox-red letter-spacing-2">NUESTROS VALORES</h3>
            </div>

            <div class="row my-4" id="values-row-one">
                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">HONESTIDAD</h5>
                    <p>
                        El motor fundamental. Creemos que la
                        transparencia y la integridad son esenciales
                        en cada paso que damos.
                    </p>
                </div>

                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">DISCIPLINA PERSONAL</h5>
                    <p>
                        La clave de nuestro éxito. Cada día nos esforzamos
                        superarnos y mantenernos enfocados en nuestros
                        objetivos. La disciplina nos impulsa a ser mejores, a
                        ofrecerte lo mejor.
                    </p>
                </div>

                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">COMPROMISO</h5>
                    <p>
                        El motor fundamental. Creemos que la
                        transparencia y la integridad son esenciales
                        en cada paso que damos.
                    </p>
                </div>
            </div>

            <div class="row" id="values-row-two">
                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">CONFIABILIDAD Y CONFIANZA</h5>
                    <p>
                        Valores inquebrantables. Construimos relaciones sólidas
                        basadas en la confianza que deposita cada cliente en
                        nosotros.
                    </p>
                </div>

                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">VOCACIÓN DE SERVICIO</h5>
                    <p>
                        Nuestro núcleo. Nos apasiona lo que hacemos, y eso se
                        refleja en cada servicio que brindamos.
                        Estamos aquí para acompañarte en cada momento con
                        pasión y dedicación.
                    </p>
                </div>

                <div class="col-10 col-sm-10 col-md-4">
                    <h5 class="redfox-red letter-spacing-4">MENTALIDAD POSITIVA</h5>
                    <p>
                        Nuestra energía. Creemos en el poder de una mente positiva
                        para superar desafíos y alcanzar metas.
                        Enfrentamos cualquier reto y creamos un camino lleno de éxitos.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Values"
}
</script>

<style scoped>
.bg-blue-values
{
    background-color: #F3F5F5;
}
.letter-spacing-4
{
    letter-spacing: 4px;
}
@media screen and (max-width: 576px) {
    #values-row-one,
    #values-row-two
    {
        text-align: center;
        justify-content: center;
    }
}
</style>
