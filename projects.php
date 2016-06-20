<?php
/**
 * User: carlos.alonso
 * Date: 09/06/2016
 * Time: 19:32
 */

include('head.php');
include('top_nav.php');
include('left_nav.php');
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

                        <!--Users Table-->
                        <div class="row">
                            <div class="col-md-12">

                                <!--Floating action button-->
                                <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                                    <a class="btn-floating btn-large red waves-effect waves-light" data-toggle="modal" data-target="#modal-project">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th>Proyecto</th>
                                            <th>Project Managers</th>
                                            <th>Revisores</th>
                                            <th>Transcriptores</th>
                                            <th>Estado</th>
                                            <th>Media</th>
                                            <th>Duplicar</th>
                                            <th>Borrar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">1</th>
                                            <td>Proyecto 1</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>En Curso</td>
                                            <td><i class="fa fa-headphones" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">2</th>
                                            <td>Proyecto 2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>En Curso</td>
                                            <td><i class="fa fa-headphones" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">3</th>
                                            <td>Proyecto 3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>En Curso</td>
                                            <td><i class="fa fa-headphones" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">4</th>
                                            <td>Proyecto 4</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>6</td>
                                            <td>En Curso</td>
                                            <td><i class="fa fa-headphones" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <!--Users Table-->

                                    <!--Paginator-->
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                        <!--Paginator-->

                    </section>
                    <!--/.Section: Intro-->

                    <!-- Modal User Register -->
                    <div class="modal fade modal-ext" id="modal-project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3> Crear Nuevo Proyecto</h3>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                    <div class="md-form">
                                        <i class="fa fa-book prefix"></i>
                                        <input type="text" id="form1" class="form-control">
                                        <label for="form1">Nombre de Proyecto</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-server prefix"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Servidor FTP</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3">Usuario FTP</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="form4" class="form-control">
                                        <label for="form4">Contraseña FTP</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-clock-o prefix"></i>
                                        <input type="text" id="form5" class="form-control">
                                        <label for="form5">Tamaño de la sección de audio ( en minutos)</label>
                                    </div>

                                    <div class="text-xs-center">
                                        <button class="btn btn-success btn-lg">Crear</button>
                                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>

                                <!--/.Content-->
                            </div>
                        </div>


                    </div>

                    <!-- Modal User Register -->


                </div>
            </div>

            </section>
        </div>
        <!--/.Section: Description & Before/after-->
    </div>
</main>
<?php
include("scripts.php");
?>

</body>
</html>