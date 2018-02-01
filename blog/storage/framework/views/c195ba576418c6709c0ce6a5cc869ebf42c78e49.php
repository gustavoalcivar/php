<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $__env->yieldContent('title', 'Default'); ?> | Panel de administración </title>
	<link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>">
</head>
<body>
	<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<section>
		<?php echo $__env->yieldContent('content'); ?>
	</section>
	<script src="<?php echo e(asset('plugins/jquery/js/jquery-3.2.1.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>
</body>
</html>