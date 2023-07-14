<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Protect my company</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('adminindex')); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">espace responsable</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('adminindex')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>utlisateur</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">utlisateur</h6>
                        <a class="collapse-item" href="<?php echo e(route('admininsertuser')); ?>">ajouter un employer</a>
                        <a class="collapse-item" href="<?php echo e(route('adminlisteuser')); ?>">liste des employer</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                application
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>les attestation</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">attestation</h6>
                        <a class="collapse-item" href="<?php echo e(route('adminnouvatt')); ?>">nouvelle attistation</a>
                        <a class="collapse-item" href="<?php echo e(route('adminattver')); ?>">attistation verifer </a>
                        <a class="collapse-item" href="<?php echo e(route('adminattref')); ?>">attistation refuse </a>
                        <a class="collapse-item" href="<?php echo e(route('admintousatt')); ?>">tous les attistations </a>


                    
                    </div>
                    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>facture</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">facture</h6>
                        <a class="collapse-item" href="<?php echo e(route('adminnouvfac')); ?>">nouvelle facture</a>
                        <a class="collapse-item" href="<?php echo e(route('adminfacver')); ?>">factures verifer</a>
                        <a class="collapse-item" href="<?php echo e(route('adminfacref')); ?>">factures refuse</a>
                        <a class="collapse-item" href="<?php echo e(route('admintousfac')); ?>">tous les factures</a>

                     

                    </div>
                </div>
            </li>
            
           
            <!--Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            configuration
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('adminrecherchedate')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>configuration les factures</span></a>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
      

        </ul>
        <!-- End of Sidebar -->
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               
                <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">modifer compte employer</h2>
              <form action="<?php echo e(url('updateuser/'.$users->id)); ?>" method='Post'>
                <?php echo csrf_field(); ?>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name='name' value="<?php echo e($users->name); ?>"/>
                  <label class="form-label" for="form3Example1cg" >nom de utilisateur</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="number" id="form3Example1cg" class="form-control form-control-lg" name='telephone' value="<?php echo e($users->telephone); ?>"/>
                  <label class="form-label" for="form3Example1cg" name='telephone'>Numero telephone</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="<?php echo e($users->email); ?>"/>
                  <label class="form-label" for="form3Example3cg" name="email">mail de empolyer</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="test" id="form3Example4cg" class="form-control form-control-lg" name="societe" value="<?php echo e($users->societe); ?>"/>
                  <label class="form-label" for="form3Example4cg" name="password">societe</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success">modifer employer</button>
                </div>
              </form>

                <!-- /.container-fluid -->

            </div>
</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>


</body>

</html><?php /**PATH C:\xampp\htdocs\pfefinale\resources\views//admin/modiferemployer.blade.php ENDPATH**/ ?>