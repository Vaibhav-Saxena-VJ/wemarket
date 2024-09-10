<?php $__env->startSection("content"); ?>

<style>
    .content-wrapper {
        min-height: 0 !important;
    }
    .col-xl-4{
        overflow: hidden;
    }
    .dashboard-graph-img img{
        width: 100%;
    }
</style>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Dashboard</h1>
                </section>
            </div>
            <div class="col-md-12 no-pad dashboard" style="display: block;">                
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-xl-3 col-lg-3 no-pad-left">
                                    <div class="card dashboard-card">
                                        <p class="c-number"><?php echo e(!empty($totalReportCount)?$totalReportCount:'0'); ?></p>
                                        <p class="c-txt">All Reports</p>
                                        <i class="fa fa-book"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 no-pad-left">
                                    <div class="card dashboard-card">
                                        <p class="c-number"><?php echo e(!empty($totaUpcomingReportCount)?$totaUpcomingReportCount:'0'); ?></p>
                                        <p class="c-txt">Upcoming Reports</p>
                                        <i class="fa fa-level-down"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 no-pad-left">
                                    <div class="card dashboard-card">
                                        <p class="c-number"><?php echo e(!empty($totalTopSellingReportCount)?$totalTopSellingReportCount:'0'); ?></p>
                                        <p class="c-txt">Top Selling Reports</p>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="dashboard-graph-img mt-20">
                                    <img src="../admin_panel/commonarea/dist/img/images/dashboard/dashboard-research-market.jpg" alt="">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End box -->
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script type="text/javascript">
    $(".s_meun").removeClass("active");
    // $(".master_active").addClass("active");
    $(".dashboard_active").addClass("active");
    $(".clear_btn").on("click", function() {
        location.reload();
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>