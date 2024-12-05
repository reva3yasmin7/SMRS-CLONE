<?php $__env->startSection('title', 'Dashboard Pembimbing Akademik'); ?>

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
    

    
    <div id="main-content" class="flex-1 p-8 bg-red-300 min-h-screen ml-[360px]">

      <!-- Navbar -->
      <div class="flex-1 bg-white px-[24px] py-[12px] rounded-[20px] mb-[40px] shadow-lg">
        <div class="flex flex-1 gap-[16px] items-center flex-row">
          <div class="flex flex-1 gap-[16px] items-center flex-row">
            <img src="<?php echo e(asset('alip.jpg')); ?>" class="w-[52px] h-[52px] rounded-full" />
            <div class="flex-1 flex flex-col">
              <span class="text-[24px] text-[#101828]"><?php echo e($userName); ?></span>
              <span class="text-[18px] text-[#101828]">NIP : <?php echo e($dosen->nip); ?></span>
            </div>
          </div>

          <a href="/logout">
            <button class="rounded-pill bg-red-300 rounded-full px-5 py-2">
              Logout
            </button>
          </a>
        </div>
      </div>
      <!-- End Navbar -->

      <div class="flex flex-1 flex-row justify-between items-center mb-[30px]">
        <div class="flex flex-row items-center gap-[20px]">
          <img class="w-[46px] h-[38px]" src="<?php echo e(asset('icons/PADashboard/Desktop.png')); ?>" alt="">
          <span class="text-[24px]">Perwalian</span>
        </div>
        <a href="/dashboard">
          <img class="w-[51px] h-[51px]" src="<?php echo e(asset('icons/PADashboard/BackSquare.png')); ?>" alt="">
        </a>
      </div>

      <div class="rounded-[20px] p-[25px] pb-[38px] bg-white shadow-lg">
        <span class="text-[30px]">Mahasiswa Perwalian</span>

        <table id="Perwalian" class="table-auto min-w-full bg-white shadow-md mt-[20px] rounded-none border-collapse border-[2px] border-[#000]">
          <thead class="bg-red-300">
            <tr>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">No.</th>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">Nama</th>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">NIM</th>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">Semester</th>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">Status</th>
              <th class="py-3 px-4 text-center text-sm font-semibold border-collapse border-[2px] border-[#000]">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php ($i = 0); ?>
            <?php $__currentLoopData = $mahasiswaPerwalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]"><?php echo e(++$i); ?>.</td>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]"><?php echo e($mahasiswa->nama); ?></td>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]"><?php echo e($mahasiswa->nim); ?></td>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]"><?php echo e($mahasiswa->semester_berjalan); ?></td>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]">
                  <div class="d-flex items-center justify-center flex w-full">
                    <div class="px-[24px] py-[2px] font-[500] rounded-[20px] bg-[<?php echo e($mahasiswa->status_pengajuan !== 'Approved' ? '#FFAAAA' : '#AAFFCC'); ?>] text-center w-min">
                      <span class="text-[18px] text-[<?php echo e($mahasiswa->status_pengajuan !== 'Approved' ? '#922929' : '#299233'); ?>]"><?php echo e($mahasiswa->status_pengajuan ? $mahasiswa->status_pengajuan : 'Belum ada pengajuan'); ?></span>
                    </div>
                  </div>
                </td>
                <td class="py-3 px-4 text-center border-collapse border-[2px] border-[#000]">
                  <a href="<?php echo e(route('perwalian.detail', ['nim' => $mahasiswa->nim])); ?>">Lihat Detail</a>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
</div>

<script>
  window.onload = function() {
    resizeSidebar();

    const tableRuang = $('#Perwalian').DataTable({
        layout: {
            topStart: null,
            topEnd: null,
            bottomStart: 'pageLength',
            bottomEnd: 'paging',
        }
    });

    $('#searchRuang').keyup(function() {
        tableRuang.search($(this).val()).draw();
    });
  };

  window.onresize = function () {
    resizeSidebar();
  };

  const resizeSidebar = function () {
    const sidebarWidth = document.querySelector('aside')?.clientWidth;
    document.querySelector('#main-content').style.marginLeft = `${(sidebarWidth)}px`;
  };
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/paIrsListDashboard.blade.php ENDPATH**/ ?>