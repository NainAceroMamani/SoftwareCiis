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
                                            <th>País</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data as $ciudad): ?>
                                        <tr>
                                            <td><?php echo $ciudad->id_ciudad ?></td>
                                            <td>
                                                <a href="javascript:void(0)"><img src="<?php echo UPLOADS.'ciudades/'.$ciudad->id_ciudad.'/'.$ciudad->imagen_ciudad ?>" alt="Ciudad" width="60" height="45" class="img-circle"></a>
                                            </td>
                                            <td><b><?php echo $ciudad->name_ciudad ?></b></td>
                                            <td><?php echo substr($ciudad->description_ciudad, 0 , 200) ?></td>
                                            <td><b><?php echo $ciudad->name_pais ?></b></td>
                                            <td>    
                                                <button type="button" class="btn btn-success btn-circle" data-toggle="modal" 
                                                    data-target=".bs-example-modal-lg" onclick="myFunction(<?php echo $ciudad->id ?>)"><i class="fa fa-edit"></i> </button>

                                                <button type="button" class="btn btn-danger btn-circle" onclick="deletePais(<?php echo $ciudad->id ?>)"><i class="fa fa-times"></i> </button>
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
