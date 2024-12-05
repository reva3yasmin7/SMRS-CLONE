<?php $__env->startSection('title','Buat Mata Kuliah'); ?>

<?php $__env->startSection('page'); ?>


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
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->route()->getName())]); ?> <?php echo $__env->renderComponent(); ?>
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
        <div class="flex flex-col items-start space-y-8">
            <!-- Header Buat Mata Kuliah -->
            <h1 class="text-3xl font-bold text-black mb-4">Buat Mata Kuliah</h1>

            <!-- Kontainer Form dan Tabel -->
            <div class="w-full max-w-6xl bg-white p-6 rounded-2xl shadow-md border border-gray-300">
                <!-- Input dan Tombol -->
                <div class="flex justify-between items-center mb-6">
                    <input id="searchMk" type="text" placeholder="Cari Mata Kuliah" class="bg-gray-100 rounded-lg px-4 py-2 w-1/2">
                    <button id="selectAll" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white bg-red-400 hover:bg-red-500 shadow-lg font-medium rounded-lg text-sm px-5 py-2.5">
                        Buat Mata Kuliah +
                    </button>
                </div>

                <!-- Tabel Mata Kuliah -->
                <div class="overflow-x-auto">
                    <table id="Matakuliah" class="w-full bg-white rounded-lg shadow-md border-collapse">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">No</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">Kode MK</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">Nama</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">Semester</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">SKS</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">Sifat</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold border">Jumlah Kelas</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-gray-100 border-b">
                                    <td class="py-3 px-4 text-center border"><?php echo e($loop->iteration); ?></td>
                                    <td class="py-3 px-4 border"><?php echo e($matakuliah->kodemk); ?></td>
                                    <td class="py-3 px-4 border"><?php echo e($matakuliah->nama); ?></td>
                                    <td class="py-3 px-4 text-center border"><?php echo e($matakuliah->plotsemester); ?></td>
                                    <td class="py-3 px-4 text-center border"><?php echo e($matakuliah->sks); ?></td>
                                    <td class="py-3 px-4 text-center border"><?php echo e($matakuliah->sifat == 'W' ? 'Wajib' : 'Pilihan'); ?></td>
                                    <td class="py-3 px-4 text-center border"><?php echo e($matakuliah->jumlah_kelas); ?></td>
                                    <td class="py-3 px-4 flex space-x-2 justify-center border">
                                        <button type="button" data-modal-target="updateModal-<?php echo e($matakuliah->id); ?>" data-modal-toggle="updateModal-<?php echo e($matakuliah->id); ?>" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-3 py-1.5">Edit</button>
                                        <button type="button" data-modal-target="deleteModal-<?php echo e($matakuliah->id); ?>" data-modal-toggle="deleteModal-<?php echo e($matakuliah->id); ?>" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm px-3 py-1.5">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

                
                <div id="crud-modal" tabindex="-1" class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Buat Mata Kuliah</h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <form class="p-4" action="<?php echo e(route('matakuliah.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-1">
                                        <label for="kodemk" class="block text-sm font-medium text-gray-900 dark:text-white">Kode MK</label>
                                        <input type="text" name="kodemk" id="kodemk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-white">Nama MK</label>
                                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="plotsemester" class="block text-sm font-medium text-gray-900 dark:text-white">Plot Semester</label>
                                        <select id="plotsemester" name="plotsemester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-span-1">
                                        <label for="sks" class="block text-sm font-medium text-gray-900 dark:text-white">SKS</label>
                                        <input type="number" name="sks" id="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="sifat" class="block text-sm font-medium text-gray-900 dark:text-white">Sifat</label>
                                        <select id="sifat" name="sifat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                            <option value="W">Wajib</option>
                                            <option value="P">Pilihan</option>
                                        </select>
                                    </div>
                                    <div class="col-span-1">
                                        <label for="jumlah_kelas" class="block text-sm font-medium text-gray-900 dark:text-white">Jumlah Kelas</label>
                                        <input type="number" name="jumlah_kelas" id="jumlah_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                </div>
                                <button type="submit" class="text-white bg-red-300 hover:bg-red-400 font-medium rounded-lg text-sm px-5 py-2.5">Tambah Mata Kuliah</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div id="updateModal-<?php echo e($matakuliah->id); ?>" tabindex="-1" class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Mata Kuliah</h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateModal-<?php echo e($matakuliah->id); ?>">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                    </button>
                                </div>
                                <form class="p-4" action="<?php echo e(route('matakuliah.update', $matakuliah->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-1">
                                            <label for="kodemk" class="block text-sm font-medium text-gray-900 dark:text-white">Kode MK</label>
                                            <input type="text" name="kodemk" id="kodemk" value="<?php echo e($matakuliah->kodemk); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        </div>
                                        <div class="col-span-1">
                                            <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-white">Nama MK</label>
                                            <input type="text" name="nama" id="nama" value="<?php echo e($matakuliah->nama); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        </div>
                                        <div class="col-span-1">
                                            <label for="plotsemester" class="block text-sm font-medium text-gray-900 dark:text-white">Plot Semester</label>
                                            <select id="plotsemester" name="plotsemester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option value="1" <?php echo e($matakuliah->plotsemester == 1 ? 'selected' : ''); ?>>1</option>
                                                <option value="2" <?php echo e($matakuliah->plotsemester == 2 ? 'selected' : ''); ?>>2</option>
                                                <option value="3" <?php echo e($matakuliah->plotsemester == 3 ? 'selected' : ''); ?>>3</option>
                                                <option value="4" <?php echo e($matakuliah->plotsemester == 4 ? 'selected' : ''); ?>>4</option>
                                                <option value="5" <?php echo e($matakuliah->plotsemester == 5 ? 'selected' : ''); ?>>5</option>
                                                <option value="6" <?php echo e($matakuliah->plotsemester == 6 ? 'selected' : ''); ?>>6</option>
                                            </select>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="sks" class="block text-sm font-medium text-gray-900 dark:text-white">SKS</label>
                                            <input type="number" name="sks" id="sks" value="<?php echo e($matakuliah->sks); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        </div>
                                        <div class="col-span-1">
                                            <label for="sifat" class="block text-sm font-medium text-gray-900 dark:text-white">Sifat</label>
                                            <select id="sifat" name="sifat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                <option value="W" <?php echo e($matakuliah->sifat == 'W' ? 'selected' : ''); ?>>Wajib</option>
                                                <option value="P" <?php echo e($matakuliah->sifat == 'P' ? 'selected' : ''); ?>>Pilihan</option>
                                            </select>
                                        </div>
                                        <div class="col-span-1">
                                            <label for="jumlah_kelas" class="block text-sm font-medium text-gray-900 dark:text-white">Jumlah Kelas</label>
                                            <input type="number" name="jumlah_kelas" id="jumlah_kelas" value="<?php echo e($matakuliah->jumlah_kelas); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        </div>
                                    </div>
                                    <button type="submit" class="text-white bg-red-400 hover:bg-red-500 font-medium rounded-lg text-sm px-5 py-2.5">Ubah Mata Kuliah</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    
                    <div id="deleteModal-<?php echo e($matakuliah->id); ?>" tabindex="-1" class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Hapus Mata Kuliah</h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal-<?php echo e($matakuliah->id); ?>">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                    </button>
                                </div>
                                <p class="p-4">Apakah Anda yakin ingin menghapus mata kuliah ini?</p>
                                <div class="flex justify-center items-center space-x-4">
                                    <button type="button" data-modal-toggle="deleteModal-<?php echo e($matakuliah->id); ?>" class="py-2 px-4 bg-gray-300 hover:bg-gray-400 rounded-lg">Batal</button>
                                    <form action="<?php echo e(route('matakuliah.destroy', $matakuliah->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="py-2 px-4 bg-red-600 hover:bg-red-700 text-white rounded-lg">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    
        <script>
            $(document).ready( function () {
                var tableMk = $('#Matakuliah').DataTable({
                    pageLength : [10,25,50,100],
                    pageLength: -1, 
                    layout :{
                        topStart: null,
                        topEnd: null,
                        bottomStart: 'pageLength',
                        bottomEnd: 'paging'
                    },
                    "columnDefs": [
                        {className: "dt-head-center", "targets": [0,1,2,3,4,5,6,7] },
                        {className: "dt-body-center", "targets": [0,1,2,3,4,5,6,7] },
                    ],
                });

                setTimeout(() => {
                    tableMk.page.len(10).draw();
                }, 10);



                $('#searchMk').keyup(function() {
                    tableMk.search($(this).val()).draw();
                });
            } );
        </script>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/kpBuatMk.blade.php ENDPATH**/ ?>