<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Poppins:wght@200;400&display=swap"
    rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Logo.jpg">
    <title><?php echo $__env->yieldContent('title'); ?> - IRIS</title>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        @media print {
            body {-webkit-print-color-adjust: exact;}

            @page {
                margin: 0;
            }

            * {
                page-break-after: always;
            }
        }
    </style>

    
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>

    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-200 dark:bg-blek-900">
    <?php echo $__env->yieldContent('page'); ?>
</body>
</html>
<?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/header.blade.php ENDPATH**/ ?>