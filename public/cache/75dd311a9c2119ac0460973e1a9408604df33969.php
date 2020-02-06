<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('home.inc.page_bg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('home.inc.page_border', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <header class="nk-header nk-header-opaque">
        <?php echo $__env->make('inc.topNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <?php echo $__env->make('inc.rightNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('inc.mobileNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="nk-main">
        <div class="nk-box bg-dark-1">
            <div class="container text-xs-center">
                <div class="nk-gap-6"></div>
                <div class="nk-gap-2"></div>
                <h2 class="nk-title h1 text-center">Guild Rankings</h2>
                <div class="container">
                    <?php if(count($data['guildrankings']) > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-sm table-dark table-striped tac">
                                <thead>
                                    <tr class="boss-record">
                                        <th class="boss-record">Rank</th>
                                        <th class="boss-record">Guild Name</th>
                                        <th class="boss-record">Guild Leader</th>
                                        <th class="boss-record">Members</th>
                                        <th class="boss-record">Points</th>
                                        <th class="boss-record">Faction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data['guildrankings']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guildrankings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($guildrankings->Rank); ?></td>
                                        <td><?php echo e($guildrankings->GuildName); ?></td>
                                        <td><?php echo e($guildrankings->MasterName); ?></td>
                                        <td><?php echo e($guildrankings->TotalCount); ?></td>
                                        <td><?php echo e($guildrankings->GuildPoint); ?></td>
                                        <?php if($guildrankings->Country == 0): ?>
                                            <td><img src="/resources/themes/core/images/icons/guildranking/aol.png" height="35" width="35"></td>
                                        <?php endif; ?>
                                        <?php if($guildrankings->Country == 1): ?>
                                            <td><img src="/resources/themes/core/images/icons/guildranking/uof.png" height="35" width="35"></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <h3 class="mb40">Sorry, there are currently no guilds to display.</h3>
                        <h5 class="mb40">Guilds must have at least 1 guild point and active to be displayed here.</h5>
                    <?php endif; ?>
                </div>
            </div>
        <?php  Separator(120);  ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>