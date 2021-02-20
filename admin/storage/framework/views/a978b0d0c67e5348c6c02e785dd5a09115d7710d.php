 
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($page_name." ".$title); ?>

       
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/admin')); ?>/dashbord"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Manage <?php echo e($title); ?></a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php echo $__env->make('admin.layout._status_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo e($page_name." ".$title); ?></h3>
              <a href="<?php echo e(url('/admin')); ?>/add_value_add_services" class="btn btn-primary pull-right">Add Service</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Service Name</th>
                  <th>Service Type</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Video Link</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <?php echo e($key+1); ?>

                      </td>
                      <td>
                        <?php echo e($value->service_type); ?>

                      </td>
                      <td>
                        <?php echo e($value->service_name); ?>

                      </td>
                      <td>
                        <?php echo e($value->price); ?>

                      </td>
                      <td class="col-xs-4">
                        <?php echo e($value->description); ?>

                      </td>
                      <td>
                        <?php echo e($value->video_link); ?>

                      </td>
                      <td class="">
                       <a href="<?php echo e(url('/admin')); ?>/edit_value_add_services/<?php echo e($value->id); ?>" title="Edit" class="btn btn-default">
                          <i class="fa fa-edit text-info"></i>
                        </a>
                        <a href="<?php echo e(url('/admin')); ?>/view_value_add_services/<?php echo e($value->id); ?>" title="View" class="btn btn-default">
                          <i class="fa fa-eye text-primary"></i>
                        </a>
                       <a href="<?php echo e(url('/admin')); ?>/delete_value_add_services/<?php echo e($value->id); ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-default">
                          <i class="fa fa-trash text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\marutiseva_live\admin\resources\views/admin/booking/value_add_services.blade.php ENDPATH**/ ?>