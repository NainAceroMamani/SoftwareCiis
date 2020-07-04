<?php require_once INCLUDES.'adm_header.php'; ?>
<link rel="stylesheet" href="<?php echo PLUGINS.'dropify/css/dropify.min.css' ?>">
<link rel="stylesheet" href="<?php echo PLUGINS.'multiselect/css/select2.min.css' ?>">
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
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Registro de Ciudades</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" class="form-horizontal" id="crearCiudadform">
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Nombre</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="name" id="name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Descripción</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="description" id="description" cols="10" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Paises</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="pais_id">
                                                        <optgroup label="Paises Disponibles">
                                                        <?php foreach($data as $pais): ?>
                                                            <option value="<?php echo $pais->id ?>"><?php echo $pais->name ?></option>
                                                        <?php endforeach; ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Imagen</label>
                                                <div class="col-md-9">
                                                    <input type="file" id="input-file-now" name="imagen" class="dropify" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-dark">Registrar</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                                <input type="hidden" id="url" value="<?php echo URL ?>">
                            </form>
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
<script src="<?php echo JS.'modules/ciudad.js' ?>"></script>
<script src="<?php echo PLUGINS.'multiselect/js/select2.full.min.js' ?>"></script>
<script>
    $('#myTable').DataTable();
</script>

<script>
    $(document).ready(function() {
        $(".select2").select2();
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
