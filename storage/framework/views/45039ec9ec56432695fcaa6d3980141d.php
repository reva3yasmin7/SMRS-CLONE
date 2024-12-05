<?php $__env->startSection('title', 'Plot Ruang'); ?>

<?php $__env->startSection('page'); ?>

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
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
        <div class="px-8 py-8">
            <div class="bg-white border border-gray-200 rounded-3xl shadow-sm sm:p-6">
                <div class="flex justify-between mb-4">
                    
                    
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownProdi" class="text-white bg-red-400 hover:bg-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                        <?php echo e($prodi!=''?$prodi:'Pilih Prodi'); ?>

                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    
                    
                    <div id="dropdownProdi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Informatika">Informatika</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Matematika">Matematika</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Statistika">Statistika</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Biologi">Biologi</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Kimia">Kimia</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" data-prodi="Fisika">Fisika</a></li>
                        </ul>
                    </div>
                </div>

                
                <table id="plotRuang" class="min-w-full bg-white rounded-lg shadow-md overflow-hidden">
                    <thead class="bg-red-400 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left text-sm font-semibold">No</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">No Ruang</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Blok Gedung</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Lantai</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Fungsi</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Kapasitas</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Status</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 divide-y divide-gray-200">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                            <td class="py-3 px-4"><?php echo e($loop->iteration); ?></td>
                            <td class="py-3 px-4"><?php echo e($ruang->noruang); ?></td>
                            <td class="py-3 px-4"><?php echo e($ruang->blokgedung); ?></td>
                            <td class="py-3 px-4"><?php echo e($ruang->lantai); ?></td>
                            <td class="py-3 px-4"><?php echo e($ruang->fungsi); ?></td>
                            <td class="py-3 px-4"><?php echo e($ruang->kapasitas); ?></td>
                            <td class="py-3 px-4">
                                <span class="<?php echo e($ruang->status == 'Pending' ? 'bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full' : 
                                    ($ruang->status == 'Disetujui' ? 'bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full' : 'bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full')); ?>">
                                    <?php echo e($ruang->status); ?>

                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg px-3 py-2 text-xs font-medium text-center rounded-lg delete-btn" data-id="<?php echo e($ruang->id); ?>">
                                    Delete
                                </button>
                                <form id="delete-form-<?php echo e($ruang->id); ?>" action="plotruang/<?php echo e($ruang->id); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <script>
        $(document).ready( function () {
            var tableRuang = $('#plotRuang').DataTable({
                pageLength: 10,
                "columnDefs": [
                    { className: "dt-head-center", "targets": [0, 1, 2, 3, 4, 5, 6, 7] },
                    { className: "dt-body-center", "targets": [0, 1, 2, 3, 4, 5, 6, 7] }
                ],
            });

            $('#searchRuang').on('keyup', function() {
                tableRuang.search($(this).val()).draw();
            });

            // Dropdown menu
            $('#dropdownProdi a').click(function (e) {
                e.preventDefault();
                var prodi = $(this).data('prodi'); 

                $('#dropdownDefaultButton').text(prodi);
                $('#dropdownDefaultButton').append(`
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                `);

                const dropdownButton = document.getElementById('dropdownDefaultButton');
                dropdownButton.click();

                // Send AJAX request to controller
                $.ajax({
                    url: '/prodi',
                    method: 'GET',
                    data: { prodi: prodi },
                    success: function (response) {
                        tableRuang.clear().draw();

                        response.data.forEach(function (ruang, index) {
                            tableRuang.row.add([
                                index + 1, 
                                ruang.noruang,
                                ruang.blokgedung,
                                ruang.lantai,
                                ruang.fungsi,
                                ruang.kapasitas,
                                `<span class="${
                                    ruang.status == 'Pending' ? 'bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full' :
                                    ruang.status == 'Disetujui' ? 'bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full' : 'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full'
                                }">${ruang.status}</span>`,
                                `<button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg px-3 py-2 text-xs font-medium text-center rounded-lg delete-btn" data-id="${ruang.id}">
                                    Delete
                                </button>
                                <form id="delete-form-${ruang.id}" action="plotruang/${ruang.id}" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>`
                            ]).draw(false);
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            });

            // Event delegation for delete confirmation
            $(document).on('click', '.delete-btn', function() {
                var ruangId = $(this).data('id');
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data ini tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form-' + ruangId).submit();
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/baPlotRuang.blade.php ENDPATH**/ ?>