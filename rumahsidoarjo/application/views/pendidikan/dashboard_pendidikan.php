<div class="container-fluid">
    <div class="mb-4">
        <h6><i class="fas fa-home"></i><b> DASHBOARD PENDIDIKAN</b></h6>
    </div>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js"></script>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-3 mb-5">
            <div class="card border-left-info">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-info mb-1" style="padding-left: 15px;">
                                SD
                            </div> <br>
                            <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                <?php echo $sd->total ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class="btn bg-gradient-light text-center">
                    <a href="<?= base_url('Pendidikan'); ?>" aria-current="page" style="color:black">
                        Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-3 mb-5">
            <div class="card border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-success mb-1" style="padding-left: 15px;">
                                SMP
                            </div> <br>
                            <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                <?php echo $smp->total ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class="btn bg-gradient-light text-center">
                    <a href="<?= base_url('Pendidikan/Smp'); ?>" aria-current="page" style="color:black"> Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-3 mb-5">
            <div class="card border-left-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-warning mb-1" style="padding-left: 15px;">
                                SLB
                            </div> <br>
                            <div class="h4 font-weight-bold text-gray-700" style="padding-left: 15px;">
                                <?php echo $slb->total ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-4x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class="btn bg-gradient-light text-center">
                    <a href="<?= base_url('Pendidikan/Slb'); ?>" aria-current="page" style="color:black">
                        Detail
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>