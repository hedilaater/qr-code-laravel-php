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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('userindex')); ?>">
                
                <div class="sidebar-brand-text mx-3">espace employer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('userindex')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>tableau de bord</span></a>
            </li>

            <!-- Divider -->
        
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
                        <a class="collapse-item" href="<?php echo e(route('nouvellatt')); ?>">ajouter attestation</a>
                        <a class="collapse-item" href="<?php echo e(route('tousatt')); ?>">list des attestation </a>
                    
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>facture</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">facture</h6>
                        <a class="collapse-item" href="<?php echo e(route('novfac')); ?>">ajouter facture</a>
                        <a class="collapse-item" href="<?php echo e(route('tousfac')); ?>">list des factures</a>
                     

                    </div>
                </div>
            </li>
            <!--Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            certificats
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('rechechedate')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>list des attistations certife</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('recher')); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>list des factures certife</span></a>
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
               
                        <div class="card-body">
                            <div class="table-responsive">
                            </div>
                <div class="card-body">
                            <div class="table-responsive">
                            <legend>ajouter une nouvelle factures</legend>
                            <form method="POST" action="<?php echo e(route('addfacture')); ?> " >
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                <?php $__currentLoopData = $Configfac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Configfacs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label for="inputAddress">modele</label>
                                <select type="text" name='modele' class="form-control" id="inputAddress" placeholder="modele" required="required">
                                <option value="" selected disabled hidden disabled>selection Modele</option>
                                <option><?php echo e($Configfac['modele']); ?></option>
                            </select>
</div>
                                 <div class="form-group col-md-6">
                                <label for="inputAddress2">Prix unitaire</label>
                                <select type="text" name='prix' class="form-control" id="inputAddress2" placeholder="Prix unitaire" required="required">
                                <option value="" selected disabled hidden disabled>selection Prix</option>
                                <option><?php echo e($Configfac['prix']); ?></option>
                            </select>
                        </div>
                                <div class="form-group">
                                 <div class="form-group col-md-6">
                                <label for="inputCity"> Total HT</label>
                                <select type="text" name='ht' class="form-control" id="inputCity" placeholder='Total HT' required="required">                               
                                <option value="" selected disabled hidden disabled>selection Total Ht</option>
                                <option><?php echo e($Configfac['ht']); ?></option>
                            </select>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Quantité</label>
                                <input type="text" name='quantite' class="form-control" id="inputPassword4" placeholder="Quantité" required="required">
                                </div>
                                 </div> 
                                 <div class="form-group col-md-6">
                                <label for="inputAddress2">Total TTC</label>
                                <input type="text" name='complelment_adr' class="form-control" id="inputAddress2" placeholder=" Total TTC" required="required">
                                 </div> 
                                 <div class="form-group">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">date de facture</label>
                                <input type="date" name='date_facture'class="form-control" id="inputEmail4" placeholder="date de facture" required="required">
                                </div>                             
                                <div class="form-group col-md-6">
                                <label for="inputCity"> raison sociale</label>
                                <input type="text" name='r_sociale' class="form-control" id="inputCity" placeholder='raison sociale' required="required">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputAddress2">Adresse</label>
                                <input type="text" name='adresse' class="form-control" id="inputAddress2" placeholder="Adresse" required="required">
                                 </div>
                                 <div class="form-group col-md-6">
                                <label for="inputAddress2">Code Postale</label>
                                <input type="text" name='postale' class="form-control" id="inputAddress2" placeholder="Code Postale" required="required">
                                 </div>
                                 <div class="form-group col-md-6">
                                <label for="inputAddress2">Ville</label>
                                <input type="text" name='ville'class="form-control" id="inputAddress2" placeholder="Ville" required="required">
                                 </div>

                                 <div>
                                   <center>  <button type="submit" class="btn btn-primary" >ajouter</button></center>
                                </div>
                            </form>                

                            </div>
                        </div>
                            </div>
                        </div>
                    </div>

               
                    </div>

                </div>
                <!-- /.container-fluid -->

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

</html><?php /**PATH C:\xampp\htdocs\pfefinale\resources\views/user/novfacuser.blade.php ENDPATH**/ ?>