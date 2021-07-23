<br>
<br>
<br>
<br>

<div class="container">
    <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive text-white font-weight-bold my-5 wow fadeInDown"
            style="visibility: visible; animation-name: fadeInDown;">Nosotros</h2>
        <!-- Section description -->
        <p class="lead grey-text w-responsive mx-auto mb-5">V&V Security, es una empresa integral que entrega servicios,
            dirigidos a satisfacer los requerimientos de protección física mediante el uso de guardias, servicios de
            aseo industrial y servicios de recursos humanos. V&V Security en Chile, esta dirigido por profesionales
            chilenos de vasta trayectoria empresarial y con una gran experiencia en el campo de la seguridad.</p>
        <p class="lead grey-text w-responsive mx-auto mb-5">Actualmente cuenta con una alta selección garantizan al
            cliente la mas rigurosa personal, adecuado entrenamiento y permanente supervisión del personal asignado al
            cliente.</p>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="fa fa-sitemap fa-3x red-text"></i>
                <h5 class="font-weight-bold my-4 text-white">Misión</h5>
                <p class="grey-text mb-md-0 mb-5">Ser una solución para las necesidades de servicios Outsoursing en
                    seguridad, aseo y recursos humanos, brindando la mejor calidad, respuesta, cooperación, ética
                    profesional e innovación del mercado.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="fa fa-eye fa-3x cyan-text"></i>
                <h5 class="font-weight-bold my-4 text-white">Visión</h5>
                <p class="grey-text mb-md-0 mb-5">Consolidarnos como una empresa lider en servicios a través de la
                    confianza, innovación, y adaptación para lograr la total satisfacción de nuestros clientes.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <i class="fa fa-handshake fa-3x orange-text"></i>
                <h5 class="font-weight-bold my-4 text-white">Valores</h5>
                <div class="container">
                    <div class="row text-justify mb-md-0 mb-5">

                        <ul class="grey-text col-6">
                            <li>cooperación</li>
                            <li>Innovación</li>
                            <li>Seguridad</li>
                            <li>Amabilidad</li>
                            <li>confianza</li>
                        </ul>
                        <ul class="grey-text col-6">
                            <li>Atención</li>
                            <li>Motivación</li>
                            <li>Compromiso</li>
                            <li>Competitividad</li>
                            <li>Ética profesional</li>
                        </ul>
                    </div>
                </div>



            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>

    <hr class="my-5">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">

    </script>

    <section id="Organigrama" class="text-center my-5">
        <h2 class="h1-responsive text-white font-weight-bold my-5 wow fadeInDown"
            style="visibility: visible; animation-name: fadeInDown;">Organigrama</h2>
        <div id="chart_div"></div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
</div>

<script>
google.charts.load('current', {
    packages: ["orgchart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('string', 'Manager');
    data.addColumn('string', 'Manager');

    // For each orgchart box, provide the name, manager, and tooltip to show.

    data.addRows([
        [{
            'v': 'Gerente general',
            'f': 'Gerente general<div>Chrisitan Villablanca Paredes</div>'
        }, '', ''],
        [{
            'v': 'Abogados',
            'f': 'Abogados<div>Estudio jurídico</div><div>Guido Rojas Leal</div>'
        }, 'Gerente general', ''],
        [{
            'v': 'Gerente de Administración y Finanzas',
            'f': 'Gerente de Administración y Finanzas<div>Responsable de calidad</div><div>Fabiola Aguayo Sanhueza</div>'
        }, 'Gerente general', ''],
        [{
            'v': 'Contador Auditor',
            'f': 'Contador Auditor<div>Oscar Moraga Ramírez</div>'
        }, 'Gerente general', ''],
        [{
            'v': 'Encargada de RRHH',
            'f': 'Encargada de RRHH<div>Cecilia Cerna Ch.</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Manager',
            'f': 'Manager<div> Administración y Gestión de Negocios</div><div>Carolina Herrera Lobos</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Encargada de Contabilidad y Adquisiciones',
            'f': 'Encargada de Contabilidad y Adquisiciones<div>Patricia Huenchullán M.</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Jefe de central Operaciones',
            'f': 'Jefe de central Operaciones<div>Luis Campos Z.</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Jefe de Operaciones Terreno',
            'f': 'Jefe de Operaciones Terreno<div>Patricio Figueroa P.</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Jefe de Prevención de Riesgos',
            'f': 'Jefe de Prevención de Riesgos<div>Claudio Villablanca P.</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Encargado de Sistemas',
            'f': 'Encargado de Sistemas<div>Depto Software</div><div>Mauricio Anasco</div>'
        }, 'Gerente de Administración y Finanzas', ''],
        [{
            'v': 'Asistente de RRHH',
            'f': 'Asistente de RRHH<div>Yessela Muñoz B.</div>'
        }, 'Encargada de RRHH', ''],
        [{
            'v': 'Supervisor Central de Operaciones',
            'f': 'Supervisor Central de Operaciones<div>Yony Guzman S.</div>'
        }, 'Jefe de central Operaciones', ''],
        [{
            'v': 'Asistente Central de Operaciones',
            'f': 'Asistente Central de Operaciones<div>Juan Olivares</div>'
        }, 'Jefe de central Operaciones', ''],
        [{
            'v': 'Supervisor Terreno',
            'f': 'Supervisor Terreno<div>Omar Gutierrez</div><div>José Quezada</div><div>Sergio Emhart</div><div>Esteban Concha</div><div>Erika Muñoz</div><div>Cristian Andwanter</div>'
        }, 'Jefe de Operaciones Terreno', ''],
        [{
            'v': 'Encargado de Prevención de Riesgos',
            'f': 'Encargado de Prevención de Riesgos<div>Edison Quijada R.</div>'
        }, 'Jefe de Prevención de Riesgos', '']

    ]);



    // Create the chart.
    var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
    // Draw the chart, setting the allowHtml option to true for the tooltips.
    chart.draw(data, {
        'allowHtml': true
    });
}
</script>