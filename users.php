<?php
/**
 * Created by PhpStorm.
 * User: carlos.alonso
 * Date: 09/06/2016
 * Time: 10:51
 */
aa
include('head.php');
include('top_nav.php');
include('left_nav.php');
?>

<body>
<!-- page content and controls will be here -->
<main>
    <div class="main-wrapper">
        <div class="container-fluid" ng-app="myApp" ng-controller="usersCtrl">
            <div class="row">
                <div class="col-md-12">
                    <h4>Usuarios</h4>
                    <!-- used for searching the current list -->
                    <input type="text" ng-model="search" class="form-control" placeholder="Buscar usuarios..." />

                    <!-- table that shows product record list -->
                    <table class="table">

                        <thead>
                        <tr>
                            <th class="text-align-center">ID</th>
                            <th class="width-30-pct">Name</th>
                            <th class="width-30-pct">Email</th>
                            <th class="text-align-center">Created</th>
                            <th class="text-align-center">Action</th>
                        </tr>
                        </thead>

                        <tbody ng-init="getAll()">
                        <tr ng-repeat="d in names | filter:search">
                            <td class="text-align-center">{{ d.id }}</td>
                            <td>{{ d.name }}</td>
                            <td>{{ d.email }}</td>
                            <td class="text-align-center">{{ d.created }}</td>
                            <td>
                                <a ng-click="readOne(d.id)" class=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a ng-click="deleteProduct(d.id)" class=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- end of table that shows product record list -->

                    <!-- modal for for creating new product -->
                    <div id="modal-user-form" class="modal">
                        <div class="modal-content">
                            <h4 id="modal-user-title">Crear Nuevo Usuario</h4>
                            <div class="row">
                                    <div class="input-field col-md-12">
                                        <input ng-model="name" type="text" class="validate" id="form-name" placeholder="Su nombre..." />
                                        <label for="name">Nombre</label>
                                    </div>

                                    <div class="input-field col-md-12">
                                        <input ng-model="email" type="email" class="validate" placeholder="Su Email..."></input>
                                        <label for="email">Email</label>
                                    </div>


                                    <div class="input-field col-md-12">
                                        <input ng-model="password" type="password" class="validate" id="form-price" placeholder="Su password..." />
                                        <label for="password">Password</label>
                                    </div>


                                    <div class="input-field col-md-12">
                                        <a id="btn-create-product" class="waves-effect waves-light btn btn-success btn-lg margin-bottom-1em" ng-click="createProduct()">Crear</a>

                                        <a id="btn-update-user" class="waves-effect waves-light btn btn-success btn-lg margin-bottom-1em" ng-click="updateProduct()">Actualizar</a>

                                        <a class="modal-action modal-close waves-effect waves-light btn btn-danger btn-lg margin-bottom-1em">Cerrar</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of modal for for creating new product -->
                    <!-- floating button for creating product -->
                    <div class="fixed-action-btn" style="bottom:45px; right:24px;">
                        <a class="waves-effect waves-light btn modal-trigger btn-floating btn-large red" href="#modal-user-form" ng-click="showCreateForm()"><i class="large material-icons">add</i></a
                    </div>
                    <!-- end of floating button for creating product -->


                </div> <!-- end col s12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>
</main>

<?php
include("scripts.php");
?>



<script>
    // angular js codes will be here
    var app = angular.module('myApp', []);
    app.controller('usersCtrl', function($scope, $http) {

        // read products
        $scope.getAll = function(){
            $http.get("controllers/read_users.php").success(function(response){
                $scope.names = response.records;
            });
        }

        // retrieve record to fill out the form
        $scope.readOne = function(id){

            // change modal title
            $('#modal-user-title').text("Editar Usuario");

            // show udpate product button
            $('#btn-update-user').show();

            // show create product button
            $('#btn-create-product').hide();

            // post id of product to be edited
            $http.post('controllers/read_user.php', {
                'id' : id
            })
                .success(function(data, status, headers, config){

                    // put the values in form
                    $scope.id = data[0]["id"];
                    $scope.name = data[0]["name"];
                    $scope.email = data[0]["email"];
                    $scope.password = data[0]["password"];

                    // show modal
                    $('#modal-user-form').openModal();
                })
                .error(function(data, status, headers, config){
                    toastr.info('Imposible recuperar usuaario.');
                    //Materialize.toast('Imposible recuperar usuaario.', 4000);
                });
        }

        // update product record / save changes
        $scope.updateProduct = function(){
            $http.post('controllers/update_user.php', {
                'id' : $scope.id,
                'name' : $scope.name,
                'email' : $scope.email,
                'password' : $scope.password
            })
                .success(function (data, status, headers, config){
                    console.log(data);
                    // tell the user product record was updated
                    toastr.info(data);
                    //Materialize.toast(data, 4000);

                    // close modal
                    $('#modal-user-form').closeModal();

                    // clear modal content
                    $scope.clearForm();

                    // refresh the product list
                    $scope.getAll();
                });
        }

        // delete product
        $scope.deleteProduct = function(id){

            // ask the user if he is sure to delete the record
            if(confirm("Estas Seguro?")){
                // post the id of product to be deleted
                $http.post('controllers/delete_user.php', {
                    'id' : id
                }).success(function (data, status, headers, config){

                    // tell the user product was deleted
                    toastr.info(data);
                    //Materialize.toast(data, 4000);

                    // refresh the list
                    $scope.getAll();
                });
            }
        }

        $scope.showCreateForm = function(){
            // clear form
            $scope.clearForm();

            // change modal title
            $('#modal-user-title').text("Crear Nuevo Usuario");

            // hide update product button
            $('#btn-update-user').hide();

            // show create product button
            $('#btn-create-user').show();

        }

        // clear variable / form values
        $scope.clearForm = function(){
            $scope.id = "";
            $scope.name = "";
            $scope.email = "";
            $scope.password = "";
        }

        // create new product
        $scope.createProduct = function(){

            // fields in key-value pairs
            $http.post('controllers/create_user.php', {
                    'name' : $scope.name,
                    'email' : $scope.email,
                    'password' : $scope.password
                }
            ).success(function (data, status, headers, config) {
                    console.log(data);
                    // tell the user new product was created
                    toastr.info(data);
                   //Materialize.toast(data, 4000);

                    // close modal
                    $('#modal-user-form').closeModal();

                    // clear modal content
                    $scope.clearForm();

                    // refresh the list
                    $scope.getAll();
                });
        }


    });
    // jquery codes will be here

    $(document).ready(function(){
        // initialize modal
        $('.modal-trigger').leanModal();
    });


</script>

</body>
</html>