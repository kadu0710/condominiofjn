<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BKM | Requisição de Materiais</title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="lib/media/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="lib/media/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="lib/media/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="lib/media/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="lib/media/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="lib/media/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="lib/media/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="lib/media/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="lib/media/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="lib/media/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="lib/media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="lib/media/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="lib/media/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="lib/media/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link ref="//fonts.googleapis.com/css?family=Poppins:300,regular,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="lib/plugins/font-awesome-5/css/fontawesome-all.min.css" />

    <!-- Bootstrap Core Css -->
    <link href="lib/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="lib/plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="lib/plugins/animate-css/animate.css" rel="stylesheet"/>

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="lib/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="lib/plugins/morrisjs/morris.css" rel="stylesheet"/>

    <!-- Dropzone Css -->
    <link href="lib/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="lib/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SweetAlert -->
    <!-- <link href="lib/plugins/sweetalert/sweetalert.css" rel="stylesheet"> -->

    <!-- Bootstrap Select Css -->
    <link href="lib/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="lib/css/style.css" rel="stylesheet">

    <!-- Material Colors -->
    <link href="lib/css/material-colors/material-design-color-palette.min.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="lib/css/themes/all-themes.css" rel="stylesheet"/>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-deep-purple">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Um momento...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php include_once 'view/vNavBar.php'; ?>
    <!-- #Top Bar -->

    <!-- Side Bar -->
    <?php include_once 'view/vSideBar.php'; ?>
    <!-- #Side Bar -->

    <div class="text-center bg-red" style="position: fixed; top: 0; height: 210px; padding-left: 280px; width: 100%; display: flex; align-items: center; text-align: center; align-content: center; z-index: -1"></div>
    <section class="content" id="divConteudo">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <div class="card">
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#home" data-toggle="tab">HOME</a></li>
                        <li role="presentation"><a href="#profile" data-toggle="tab">PROFILE</a></li>
                        <li role="presentation"><a href="#messages" data-toggle="tab">MESSAGES</a></li>
                        <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <b>Home Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut
                                tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <b>Profile Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut
                                tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            <b>Message Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut
                                tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings">
                            <b>Settings Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut
                                tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid" id="divResult"></div>
    </section>

    <!-- Jquery Core Js -->
    <script src="lib/plugins/jquery/jquery.min.js"></script>

    <!-- Jquery Ui -->
    <script src="lib/plugins/jquery/jquery-ui.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="lib/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="lib/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="lib/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="lib/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="lib/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script href="lib/plugins/raphael/raphael.min.js"></script>
    <script href="lib/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="lib/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="lib/plugins/flot-charts/jquery.flot.js"></script>
    <script src="lib/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="lib/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="lib/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="lib/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="lib/plugins/dropzone/dropzone.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="lib/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="lib/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="lib/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- SweetAlert -->
    <script src="lib/plugins/sweetalert/sweetalert2.min.js"></script>

    <!-- JqueryValidator -->
    <script src="lib/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- InputMask -->
    <script src="lib/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- MaskMoney -->
    <script src="lib/plugins/mask-money/jquery.maskMoney.min.js"></script>

    <!-- Moment Plugin Js -->
    <script src="lib/plugins/momentjs/moment.js"></script>
    <script src="lib/plugins/momentjs/moment-pt-br.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="lib/plugins/autosize/autosize.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="lib/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- jQuery MD5 -->
    <script src="lib/plugins/jquery-md5/jquery.md5.js"></script>

    <!-- ListJs -->
    <script src="lib/plugins/list-js/list.min.js"></script>


    <!-- Custom Js -->
    <script src="lib/js/admin.js"></script>
    <!--<script src="lib/js/pages/index.js"></script>-->

    <!-- Demo Js -->
    <script src="lib/js/demo.js"></script>
    <script type="text/javascript">
        function pag(p){

            $("#divConteudo").load("view/"+p, {limit: 25}, 
                function (responseText, textStatus, req) {
                    if (textStatus == "error") {
                        $("#divConteudo").html(responseText);
                    }
                });
            $("div.overlay").trigger('click');

        }
    </script>
</body>

</html>