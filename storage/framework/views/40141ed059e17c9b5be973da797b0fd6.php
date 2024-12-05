<?php $__env->startSection('title','Buat Jadwal'); ?>

<?php $__env->startSection('page'); ?>

<style>
    /* Hilangkan outline pada elemen teks dan cegah pemilihan teks */
    p, span, h1, h2, h3, h4, h5, h6, a {
        outline: none;
        user-select: none;
    }
</style>

<div class="flex h-screen">
            
  
            <?php if (isset($component)) { $__componentOriginal78360931958477711eb9d74b536a91ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal78360931958477711eb9d74b536a91ae = $attributes; } ?>
<?php $component = app\View\Components\SideBar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('side-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\app\View\Components\SideBar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->route()->getName())]); ?>
              
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal78360931958477711eb9d74b536a91ae)): ?>
<?php $attributes = $__attributesOriginal78360931958477711eb9d74b536a91ae; ?>
<?php unset($__attributesOriginal78360931958477711eb9d74b536a91ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal78360931958477711eb9d74b536a91ae)): ?>
<?php $component = $__componentOriginal78360931958477711eb9d74b536a91ae; ?>
<?php unset($__componentOriginal78360931958477711eb9d74b536a91ae); ?>
<?php endif; ?>
          

    
    <div id="main-content" class="w-4/5 bg-red-300 p-8 overflow-y-auto h-screen ml-[20%]">
        <div class="bg-white border border-gray-300 rounded-3xl shadow-md p-6">
            <h1 class="text-3xl font-bold mb-6 text-red-400">Pengajuan Jadwal</h1>
            
            <!-- Input Search -->
            <div class="flex justify-between mb-6">
                <input id="searchRuang" type="text" placeholder="Cari Program Studi" class="bg-gray-100 rounded-lg px-4 py-2 w-2/3">
            </div>
            
            <!-- Table Jadwal -->
            <table id="Ruang" class="min-w-full bg-white rounded-lg shadow-md text-center">
                <thead class="bg-red-300">
                    <tr>
                        <th class="py-3 px-4 text-sm font-semibold">No</th>
                        <th class="py-3 px-4 text-sm font-semibold">Program Studi</th>
                        <th class="py-3 px-4 text-sm font-semibold">Jumlah Jadwal</th>
                        <th class="py-3 px-4 text-sm font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4"><?php echo e($loop->iteration); ?></td>
                        <td class="py-3 px-4"><?php echo e($jadwal->prodi); ?></td>
                        <td class="py-3 px-4"><?php echo e($jadwal->jadwal_count); ?></td>
                        <td class="py-3 px-4">
                            <?php if($jadwal->all_pending): ?>
                                <button id="approve-btn-<?php echo e($loop->iteration); ?>" type="button" 
                                    onclick="approveJadwal('<?php echo e($jadwal->prodi); ?>')" 
                                    class="text-white bg-[#2ACD7F] px-3 py-2 text-xs font-medium rounded-lg ml-2">Setuju</button>
                                
                                <button id="reject-btn-<?php echo e($loop->iteration); ?>" type="button" 
                                    onclick="rejectJadwal('<?php echo e($jadwal->prodi); ?>')" 
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg px-3 py-2 text-xs font-medium rounded-lg ml-2">Tolak</button>
                                <a type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 px-3 py-2 text-xs font-medium rounded-lg ml-2" href = "reviewjadwal/<?php echo e($jadwal->prodi); ?>">
                                    Detail
                                </a>
                            <?php else: ?>
                                <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full"><?php echo e($jadwal->belumcount); ?> Jadwal yang Belum Dibuat !</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function approveJadwal(prodi) {
        if(confirm("Are you sure to approve the schedule for " + prodi + "?")) {
            $.ajax({
                url: "<?php echo e(route('jadwal.approve')); ?>",
                type: "POST",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    prodi: prodi
                },
                success: function(response) {
                    alert(response.message);
                    location.reload(); // Reload the page to reflect changes
                }
            });
        }
    }

    function rejectJadwal(prodi) {
        if(confirm("Are you sure to reject the schedule for " + prodi + "?")) {
            $.ajax({
                url: "<?php echo e(route('jadwal.reject')); ?>",
                type: "POST",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    prodi: prodi
                },
                success: function(response) {
                    alert(response.message);
                    location.reload(); // Reload the page to reflect changes
                }
            });
        }
    }

    function reviewjadwal(prodi) {
        window.location.href = `reviewjadwal/${prodi}`;
    }
</script>


<script>
    $(document).ready( function () {
        var tableRuang = $('#Ruang').DataTable({
            layout :{
                topStart: null,
                topEnd: null,
                bottomStart: 'pageLength',
                bottomEnd: 'paging'
            }
        });

        $('#searchRuang').keyup(function() {
            tableRuang.search($(this).val()).draw();
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/dkAjuanJadwal.blade.php ENDPATH**/ ?>