<?php $__env->startSection('title','Buat Jadwal'); ?>

<?php $__env->startSection('page'); ?>

<div class="flex h-screen bg-red-300">
    
    <div class="bg-white w-1/5 min-h-screen p-6 flex flex-col items-center">
        <!-- Logo Bunga -->
        <div class="mb-8">
            <img src="<?php echo e(asset('Logo.jpg')); ?>" alt="Logo" class="w-50">
            <h2 class="text-2xl font-semibold text-gray-700">⸻⸻⸻⸻⸻</h2>
        </div>
        <!-- Sidebar menu items -->
        <ul class="w-full">
            <li class="mb-4">
                <button onclick="location.href='<?php echo e(route('dashboard')); ?>'" class="flex items-center w-full text-gray-700 bg-gray-300 shadow-2xl rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-10S17.523 2 12 2z" />
                    </svg>
                    Dashboard
                </button>
            </li>
            <li class="mb-4">
                <button onclick="location.href='<?php echo e(route('ajuanjadwal')); ?>'" class="flex items-center w-full text-gray-700 bg-gray-300 shadow-2xl rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-10S17.523 2 12 2z" />
                    </svg>
                    Verifikasi Jadwal
                </button>
            </li>
            <li class="mb-4">
                <button onclick="location.href='<?php echo e(route('ajuanruang')); ?>'" class="flex items-center w-full text-gray-700 bg-gray-300 shadow-2xl rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-10S17.523 2 12 2z" />
                    </svg>
                    Verifikasi Ruang Kelas
                </button>
            </li>
        </ul>
    </div>

    
    <div id="main-content" class="w-4/5 p-8 overflow-y-auto">
        <div class="bg-white border border-gray-300 rounded-3xl shadow-md p-6">
            <h1 class="text-3xl font-bold mb-6 text-red-400 text-center">Jadwal Kuliah S1 <?php echo e($data->prodi); ?></h1>

            <div class="overflow-x-auto">
                <?php
                    $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
                    $times = ['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
                ?>

                <table class="min-w-full bg-white text-center border border-gray-200">
                    <thead class="bg-red-400 text-white">
                        <tr>
                            <th class="py-3 px-4 text-sm font-semibold border-r border-white">Jam</th>
                            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th class="py-3 px-4 text-sm font-semibold border-r border-white"><?php echo e($day); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeIndex => $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="<?php echo e($timeIndex % 2 == 0 ? 'bg-gray-50' : 'bg-white'); ?>">
                                <td class="py-3 px-4 font-semibold border-r border-gray-200"><?php echo e($time); ?></td>
                                <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dayIndex => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="py-3 px-4 border-r border-gray-200">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($schedule->hari == $day && substr($schedule->jammulai, 0, 2) == substr($time, 0, 2)): ?>
                                                <div class="p-3 mb-2 border border-gray-300 rounded-lg bg-red-100 shadow-sm">
                                                    <span class="text-xs font-bold text-gray-900"><?php echo e($schedule->matakuliah); ?> <?php echo e($schedule->kelas); ?></span>
                                                    <p class="text-xs text-gray-700">Semester 1 / <?php echo e($schedule->sks); ?> SKS <br> <?php echo e($schedule->jammulai); ?> - <?php echo e($schedule->jamselesai); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/kpReviewJadwal.blade.php ENDPATH**/ ?>