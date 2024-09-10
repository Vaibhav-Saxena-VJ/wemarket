<?php $__env->startSection('content'); ?>
    <!-- Infographics Starts -->
    <style>

        .table tbody tr td:nth-child(1),
        .table tbody tr td:nth-child(5),
        .table tbody tr td:nth-child(6),
        .table tbody tr td:nth-child(7) {
            text-align: center;
        }
    </style>
    <?php
        $role_id = Auth::guard('arm_admins')->user()->role_id;
        $RolesPrivileges = App\Models\Arm_role_privilege::where('status', 'active')->where('id', $role_id)->select('privileges')->first();
    ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-12 ">
                    <section class="content-header" style="padding: 0 0px 15px 0;">
                        <h1>Infographics List
                            <div class="pull-right">
                            <?php if(!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'infographics_add')): ?>
                                <a href="<?php echo e(url('admin/add-infographics')); ?>">
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New </button>
                                </a>
                            <?php endif; ?>
                            </div>
                        </h1>
                    </section>
                    <div class="box box-primary">
                        <div class="box-body" style="min-height: 485px;">
                            <div class="row no-margin">
                                <div class="col-sm-12 no-pad">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="example_wrapper"
                                                    class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="arm_data_table"
                                                                class="table table-bordered yajra-datatable dataTable no-footer"
                                                                role="grid" aria-describedby="example_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th width="6%" class="text-center">Sr No.</th>
                                                                        <th width="15%">Title</th>
                                                                        <th width="15%">Link URL</th>
                                                                        
                                                                        <th width="10%" class="text-center">Image</th>
                                                                        <th width="6%" class="text-center">Status</th>
                                                                        <th width="8%" class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    
                                                                    
                                                                       

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End box-body -->
                    </div>
                    <!-- End box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('admin_panel/controller_js/cn_infographics.js')); ?>"></script> 

    <script type="text/javascript">
        $(".s_meun").removeClass("active");
        $(".media_menu_active").addClass("active");
        $(".media_infographics_active").addClass("active");

        $('.clear_btn').on('click', function() {
            location.reload();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/admin/media/infographics/infographics.blade.php ENDPATH**/ ?>