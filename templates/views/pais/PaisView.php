<?php require_once INCLUDES.'adm_header.php'; ?>
<link rel="stylesheet" href="<?php echo PLUGINS.'dropify/css/dropify.min.css' ?>">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <?php require_once MODULES.'header.php' ?>
    <?php require_once MODULES.'sidebar.php' ?>
    
    <!-- ============================================================== -->
    <!-- MOdal Editar Pais  -->
    <!-- ============================================================== -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="#" class="form-horizontal" id="editarPaisform">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Editar Pais</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-3 mb-1">Nombre</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="name" id="nameEditar">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-3 mb-1">Descripción</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="descriptionEditar" name="description" id="description" cols="10" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left mb-1">Imagen</label>
                                        <div class="col-md-12">
                                            <input type="file" id="input-file-now" name="imagen" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="url" value="<?php echo URL ?>">
                        <input type="hidden" id="pais_id" value="0">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    
                    <div class="card">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Lista de Paises</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data as $pais): ?>
                                        <tr>
                                            <td><?php echo $pais->id ?></td>
                                            <td>
                                                <a href="javascript:void(0)"><img src="<?php echo UPLOADS.'paises/'.$pais->id.'/'.$pais->imagen ?>" alt="Pais" width="60" height="45" class="img-circle"></a>
                                            </td>
                                            <td><b><?php echo $pais->name ?></b></td>
                                            <td><?php echo substr($pais->description, 0 , 200) ?></td>
                                            <td>    
                                                <button type="button" class="btn btn-success btn-circle" data-toggle="modal" 
                                                    data-target=".bs-example-modal-lg" onclick="myFunction(<?php echo $pais->id ?>)"><i class="fa fa-edit"></i> </button>

                                                <button type="button" class="btn btn-danger btn-circle" onclick="deletePais(<?php echo $pais->id ?>)"><i class="fa fa-times"></i> </button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2017 Admin Pro by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

    <?php require_once INCLUDES.'adm_footer.php'; ?>
    <script src="<?php echo PLUGINS.'dataTable/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo PLUGINS.'dropify/js/dropify.min.js' ?>"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?php echo JS.'modules/pais.js' ?>"></script>
    <script>
        $('#myTable').DataTable();
    </script>

    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
</body>
</html>
