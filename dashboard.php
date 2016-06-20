<?php
/**
 * User: carlos.alonso
 * Date: 09/06/2016
 * Time: 11:21
 */
?>
<body>
<!-- Main layout-->
<main>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!--Main column-->
                <div class="col-md-12">
                    <div class="text-xs-center">
                    </div>

                    <!--Section: Intro-->
                    <section>

                        <!--MDB Intro-->
                        <div class="row">

                            <!--Panel-->
                            <div class="card card-block col-md-3">
                                <a class="btn-floating btn-large yellow darken-2 waves-effect waves-light"><i class="fa fa-user"></i></a>
                                <h4 class="h4-responsive teal-text">10 Transcriptores</h4>


                            </div>
                            <!--/.Panel-->
                            <!--Panel-->
                            <div class="card card-block col-md-3">
                                <a class="btn-floating btn-large green waves-effect waves-light"><i class="fa fa-cubes"></i></a>
                                <h4 class="h4-responsive teal-text">3 Proyectos</h4>

                            </div>
                            <!--/.Panel-->
                            <!--Panel-->
                            <div class="card card-block col-md-3">
                                <a class="btn-floating btn-large blue waves-effect waves-light"><i class="fa fa-tasks"></i></a>
                                <h4 class="h4-responsive teal-text">1.548 Audios Procesados</h4>

                            </div>
                            <!--/.Panel-->
                            <!--Panel-->
                            <div class="card card-block col-md-3">
                                <a class="btn-floating btn-large orange waves-effect waves-light"><i class="fa fa-tasks"></i></a>
                                <h4 class="h4-responsive teal-text">48 Audios Pendientes</h4>

                            </div>
                            <!--/.Panel-->

                            <div>
                                <!--Panel Bandwith Graph-->
                                <div class="card col-md-6">
                                    <div class="card-header"><i class="fa fa-cloud-download"></i> Audios Transcritos
                                    </div>
                                    <div class="card-block">
                                        <canvas id="lineChartEx"></canvas>
                                    </div>
                                </div>
                                <!--/.Panel Bandwith Graph-->

                                <!--Panel Graph-->
                                <div class="card col-md-6">
                                    <div class="card-header"><i class="fa fa-tasks"></i> Media Sources Types (M)
                                    </div>
                                    <div class="card-block">
                                        <canvas id="doughnutChartEx"></canvas>
                                    </div>
                                </div>
                                <!--/.Panel-->
                            </div>

                            <!--Panel Job List-->
                            <div class="card col-md-6">
                                <div class="card-header"><i class="fa fa-tasks"></i> Tareas en Curso
                                </div>
                                <div class="card-block">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="label bg-warning label-pill pull-xs-right">14</span> Revisiones Realizadas
                                        </li>
                                        <li class="list-group-item">
                                            <span class="label bg-success label-pill pull-xs-right">2</span> Revisiones Pendiendes
                                        </li>
                                        <li class="list-group-item">
                                            <span class="label bg-warning label-pill pull-xs-right">1</span> Transcripciones Pendientes
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/.Panel-->

                        </div>
                        <!--/.MDB Intro-->

                    </section>
                    <!--/.Section: Intro-->


                    <!--Section: Main features-->

                    <!--/.Section: Main features-->

                </div>
            </div>
        </div>

        </section>
    </div>
    <!--/.Section: Description & Before/after-->
</main>
<!-- /.Main layout-->

<!-- /Start your project here-->

<?php
include("scripts.php");
?>

<script>
    $(function () {
        var data = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
        var option = {
            responsive: true,
            scaleFontSize: 10,
        };
        //Chart 1
        var ctx = document.getElementById("lineChartEx").getContext('2d');
        var lineChart = new Chart(ctx).Line(data, option);


    });

    $(function () {
        var data = [
            {
                value:20.31,
                color: "#4D5360",
                highlight: "#5b6271",
                label: "Mail"
            },
            {
                value: 153.58,
                color: "#FF5A5E",
                highlight: "#ff6669",
                label: "Life"
            },
            {
                value: 153.58,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "File"
            },
            {
                value: 100.00,
                color: "#FDB45C",
                highlight: "#fdba68",
                label: "FTP"
            }
        ];

        var option = {
            responsive: true,
        };
        //Chart 6
        var ctx = document.getElementById("doughnutChartEx").getContext('2d');
        var myDoughnutChart = new Chart(ctx).Doughnut(data, option);

    });
</script>


</body>
</html>