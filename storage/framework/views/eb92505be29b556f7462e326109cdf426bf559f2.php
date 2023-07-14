<?php $__env->startSection('content'); ?>
<body class="bg-gradient-primary">

    <div class="container">

   
    <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <img src="qr.png" width="400px" height="400px">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">créer un compte!</h1>
                            </div>
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="nom de utlisateur" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="nom de utilisateur" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                     </div>
                        
                                     <div class="col-sm-6">
                                <input id="noms" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="nom de société" name="noms" value="<?php echo e(old('noms')); ?>" required autocomplete="noms" autofocus>

                                <?php $__errorArgs = ['noms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                     </div>
                        </div>
                        <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="telephone" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="numéro telephone" name="telephone" value="<?php echo e(old('telephone')); ?>" required autocomplete="noms" autofocus>

                                <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="email" type="email" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="adresse mail" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                        </div>

                        <div class="form-group row">

                        <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="mot de passe" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password-confirm" type="password" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="confirme mot de passe" name="password_confirmation" required autocomplete="new-password">
                                     </div>
                                     </div>

                        
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    <?php echo e(__('inscription')); ?>

                                </button>
                            
                    </form>
                    <hr>
                           
                            <div class="text-center">
                                <a class="small" href="<?php echo e(route('adminlogin')); ?>">Vous avez déjà un compte ? Connectez-vous!</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pfefinale\resources\views/auth/register.blade.php ENDPATH**/ ?>