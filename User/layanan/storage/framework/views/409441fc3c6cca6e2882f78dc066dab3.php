<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">TABEL DATA USER SISTEM LAYANAN</h3>
                       
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH USER</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id user</th>
                                <th scope="col">status user</th>
                                <th scope="col">nama user</th>
                                <th scope="col">no telepon</th>
                                <th scope="col">email user</th>
                                <th scope="col">password user</th>
                                <th scope="col">aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center">
                                        <img src="<?php echo e(asset('/storage/posts/'.$post->image)); ?>" class="rounded" style="width: 150px">
                                    </td>
                                    <td><?php echo e($user->title); ?></td>
                                    <td><?php echo $user->content; ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('posts.destroy', $user->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('posts.show', $user->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="<?php echo e(route('posts.edit', $user->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              <?php endif; ?>
                            </tbody>
                          </table>  
                          <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        <?php if(session()->has('success')): ?>
        
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

        <?php elseif(session()->has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
            
        <?php endif; ?>
    </script>

</body>
</html><?php /**PATH C:\xampp\htdocs\layanan\resources\views/users/index.blade.php ENDPATH**/ ?>