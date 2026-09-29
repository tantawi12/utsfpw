
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?php echo e($title ?? 'POS Barokah Mart'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body class="bg-gray-100">
    <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
    <?php if(isset($header)): ?>
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <?php echo e($header); ?>

            </div>
        </header>
    <?php endif; ?>
 
    <main>
        <?php echo e($slot); ?>

    </main>
 
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\utsfpw\utsfpw-main\resources\views/components/app-layout.blade.php ENDPATH**/ ?>