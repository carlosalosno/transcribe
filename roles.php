<?php
/**
 * User: carlos.alonso
 * Date: 09/06/2016
 * Time: 12:45
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

                    <!--Section: Intro-->
                    <section>

                        <!--Users Table-->
                        <div class="row">
                            <div class="col-md-12">

                                <!--Floating action button-->
                                <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                                    <a class="btn-floating btn-large red waves-effect waves-light" data-toggle="modal" data-target="#modal-user">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th>Rol</th>
                                            <th>Proyectos</th>
                                            <th>Usuarios</th>
                                            <th>Audio</th>
                                            <th>Documentos</th>
                                            <th>Duplicar</th>
                                            <th>Borrar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">1</th>
                                            <td>Administrador</td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="proyectos1" checked>
                                                    <label for="proyectos1"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="usuarios1" checked>
                                                    <label for="usuarios1"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="audios1" checked>
                                                    <label for="audios1"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="documentos1" checked>
                                                    <label for="documentos1"></label>
                                                </fieldset></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">2</th>
                                            <td>Project Manager</td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox"  id="proyectos2" checked>
                                                    <label for="proyectos2"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="usuarios2" checked>
                                                    <label for="usuarios2"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="audios2" checked>
                                                    <label for="audios2"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="documentos2" checked>
                                                    <label for="documentos2"></label>
                                                </fieldset></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">3</th>
                                            <td>Revisor</td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox"  id="proyectos3" >
                                                    <label for="proyectos3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="usuarios3" >
                                                    <label for="usuarios3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="audios3" checked >
                                                    <label for="audios3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="documentos3" checked >
                                                    <label for="documentos3"></label>
                                                </fieldset></td>
                                            <td><i class="fa fa-copy" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash-o" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><i class="fa fa-edit" aria-hidden="true"></i></th>
                                            <th scope="row">4</th>
                                            <td>Transcriptor</td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox"  id="proyectos3" >
                                                    <label for="proyectos3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="usuarios3" >
                                                    <label for="usuarios3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="audios3" checked >
                                                    <label for="audios3"></label>
                                                </fieldset></td>
                                            <td><fieldset class="form-group">
                                                    <input type="checkbox" id="documentos3" checked >
                                                    <label for="documentos3"></label>
                                                </fieldset></td>
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
                    <div class="modal fade modal-ext" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3> Crear Nuevo Rol</h3>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                    <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="form1" class="form-control">
                                        <label for="form1">Nombre del Rol</label>
                                    </div>
                                    <div class="md-form">
                                        <fieldset class="form-group center-block">
                                            <input type="checkbox" id="proyectof">
                                            <label for="proyectof">Acceso a Proyectos</label>
                                        </fieldset>
                                    </div>
                                    <div class="md-form">
                                        <fieldset class="form-group center-block">
                                            <input type="checkbox" id="usuariosf">
                                            <label for="usuariosf">Acceso a Usuarios</label>
                                        </fieldset>
                                    </div>
                                    <div class="md-form">
                                        <fieldset class="form-group center-block">
                                            <input type="checkbox" id="audiosf">
                                            <label for="audiosf">Acceso a Usuarios</label>
                                        </fieldset>
                                    </div>
                                    <div class="md-form">
                                        <fieldset class="form-group center-block">
                                            <input type="checkbox" id="documentosf">
                                            <label for="documentosf">Acceso a Documentos</label>
                                        </fieldset>
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

                    <!-- Modal Admin Register -->
                    <div class="modal fade modal-ext" id="modal-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3> Create new Admin</h3>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                    <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="form5" class="form-control">
                                        <label for="form1">Your Name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="form6" class="form-control">
                                        <label for="form2">Your email</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="form7" class="form-control">
                                        <label for="form3">Your password</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="form8" class="form-control">
                                        <label for="form4">Repeat password</label>
                                    </div>

                                    <div class="text-xs-center">
                                        <button class="btn btn-primary btn-lg">Create</button>
                                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                                <!--/.Content-->
                            </div>
                        </div>


                    </div>
                    <!-- Modal Admin Register -->
                </div>
            </div>

            </section>
        </div>
        <!--/.Section: Description & Before/after-->
    </div>
</main>
<!-- /.Main layout-->

<?php
include("scripts.php");
?>
</body>
</html>