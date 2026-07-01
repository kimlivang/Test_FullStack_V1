            
            

            <!DOCTYPE html>
            <html lang="km">

            <head>
                
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $__env->yieldContent('title', 'Hello | MyWebApp'); ?></title>

                
                <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

                <!-- Bootstrap 5.3.3 CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- Bootstrap Icons -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                <?php echo $__env->yieldPushContent('styles'); ?>

            </head>

            <body>
                <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <main class="container py-4">
                    <?php echo $__env->yieldContent('content'); ?>
                </main>
            </body>
            </html><?php /**PATH C:\Users\user1\Desktop\ShopLicSoft\resources\views/layouts/MainLayout.blade.php ENDPATH**/ ?>