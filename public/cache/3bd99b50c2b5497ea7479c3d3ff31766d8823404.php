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
        <?php echo $__env->make('home.inc.mainHeader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('home.inc.revSlider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('home.inc.mainFeatures', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('home.inc.countDown', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('inc.signForms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php
    echo '<pre>';
        var_dump($data);
        echo 'Visitor IP: '.$data["Browser"]->IP.'<br>';
    echo '</pre>';
?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>