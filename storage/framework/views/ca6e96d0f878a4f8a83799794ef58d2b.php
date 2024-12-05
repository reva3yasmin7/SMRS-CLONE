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
  

  
  <div id="main-content" class="flex-1 p-8 bg-red-300 min-h-screen h-full overflow-auto ml-[360px]">

    <!-- Navbar -->
    <div class="flex-1 bg-white px-[24px] py-[12px] rounded-[20px] mb-[40px] shadow-lg">
      <div class="flex flex-1 gap-[16px] items-center flex-row">
        <div class="flex flex-1 gap-[16px] items-center flex-row">
          <img src="<?php echo e(asset('alip.jpg')); ?>" class="w-[52px] h-[52px] rounded-full" />
          <div class="flex-1 flex flex-col">
            <span class="text-[24px] text-[#101828]"><?php echo e($userName); ?></span>
            <span class="text-[18px] text-[#101828]">NIM : <?php echo e($mahasiswa->nim); ?></span>
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

    <!-- Welcome Hero Screen -->
    <div class="flex-1 bg-white flex flex-col rounded-[20px] shadow-lg mb-[40px] px-[24px] py-[12px] pb-[30px]">
      <div class="flex flex-row items-center gap-[16px] mb-[16px]">
        <img src="<?php echo e(asset('icons/MahasiswaDashboard/Bank.png')); ?>" alt="" class="w-[29px] h-[27.88px]">
        <span class="text-[24px] font-[500]">Status Akademik</span>
      </div>

      <div class="flex flex-col items-center justify-center mb-[40px]">
        <div class="flex flex-row items-center gap-[10px]">
          <img src="<?php echo e(asset('icons/MahasiswaDashboard/User.png')); ?>" alt="" class="w-[24px] h-[23.07px]">
          <span class="text-[24px] font-[500]">Dosen Wali : <?php echo e($dosenPA->nama); ?></span>
        </div>
        <span class="text-[24px] font-[500]">(NIP : <?php echo e($dosenPA->nip); ?>)</span>
      </div>

      <table class="table-fixed w-full">
        <tr>
          <td>
            <div class="flex flex-col items-center justify-center gap-[8px]">
              <span class="text-[14px] font-[500]">Semester Akademik Sekarang</span>
              <span class="text-[32px] font-[500]">2024/2025 Ganjil</span>
            </div>
          </td>
          <td>
            <div
              class="flex flex-col items-center justify-center gap-[8px] border-[2px] border-collapse border-t-0 border-b-0">
              <span class="text-[14px] font-[500]">Semester Studi</span>
              <span class="text-[32px] font-[500]"><?php echo e($mahasiswa->semester_berjalan); ?></span>
            </div>
          </td>
          <td>
            <div class="flex flex-col items-center justify-center gap-[8px]">
              <span class="text-[14px] font-[500]">Status Akademik</span>
              <div class="px-[12px] rounded-xl py-[4px] <?php echo e($mahasiswa->status === 'Aktif' ? 'bg-[#00FF66]' : 'bg-[#FF6161]'); ?>">
                <span class="text-[24px] font-[700] text-[#FFF] uppercase"><?php echo e($mahasiswa->status); ?></span>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <!-- End Welcome Hero Screen -->

    <!-- Task Board -->
    <div class="flex flex-row items-start gap-[20px]">
      <div class="bg-white px-[24px] py-[12px] pb-[30px] rounded-[20px] mb-[40px] shadow-lg flex flex-col flex-1">
        <div class="flex flex-row items-center gap-[16px] mb-[16px]">
          <img src="<?php echo e(asset('icons/PADashboard/TaskMenu.png')); ?>" alt="" class="w-[42px] h-[42px]">
          <span class="text-[24px] font-[500]">Task Board</span>
        </div>

        <div class="flex flex-col gap-[40px]">
          <a href="<?php echo e(route('mahasiswa.jadwal')); ?>">
            <div class="min-w-[580px] p-[20px] shadow-md rounded-[20px] hover:shadow-inner">
              <div class="flex flex-row items-center gap-[8px] w-full">
                <div class="flex flex-row items-center flex-1">
                  <img src="<?php echo e(asset('icons/PADashboard/Book.png')); ?>" alt="" class="w-[70px] h-[50px]">
                  <span class="text-[24px] font-[500]">Jadwal Kuliah</span>
                </div>
                <img src="<?php echo e(asset('icons/PADashboard/PlayCircle.png')); ?>" alt=""
                  class="flex justify-self-end w-[40px] h-[40px]" />
              </div>
            </div>
          </a>

          <a href="<?php echo e(route('mahasiswa.irs')); ?>">
            <div class="min-w-[580px] p-[20px] shadow-md rounded-[20px] hover:shadow-inner">
              <div class="flex flex-row items-center gap-[8px] w-full">
                <div class="flex flex-row items-center flex-1">
                  <img src="<?php echo e(asset('icons/PADashboard/Book.png')); ?>" alt="" class="w-[70px] h-[50px]">
                  <span class="text-[24px] font-[500]">IRS</span>
                </div>
                <img src="<?php echo e(asset('icons/PADashboard/PlayCircle.png')); ?>" alt=""
                  class="flex justify-self-end w-[40px] h-[40px]" />
              </div>
            </div>
          </a>

          <a href="<?php echo e(route('mahasiswa.khs')); ?>">
            <div class="min-w-[580px] p-[20px] shadow-md rounded-[20px] hover:shadow-inner">
              <div class="flex flex-row items-center gap-[8px] w-full">
                <div class="flex flex-row items-center flex-1">
                  <img src="<?php echo e(asset('icons/PADashboard/Book.png')); ?>" alt="" class="w-[70px] h-[50px]">
                  <span class="text-[24px] font-[500]">KHS</span>
                </div>
                <img src="<?php echo e(asset('icons/PADashboard/PlayCircle.png')); ?>" alt=""
                  class="flex justify-self-end w-[40px] h-[40px]" />
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="bg-white px-[24px] py-[12px] pb-[30px] rounded-[20px] mb-[40px] shadow-lg flex flex-col max-w-[30%]">
        <div class="flex flex-row items-center gap-[16px] mb-[16px]">
          <img src="<?php echo e(asset('icons/MahasiswaDashboard/Trophy.png')); ?>" alt="" class="w-[28px] h-[28px]">
          <span class="text-[24px] font-[500]">Prestasi Akademik</span>
        </div>

        <table class="table-fixed w-full">
          <td>
            <div class="flex flex-col items-center justify-center gap-[8px]">
              <span class="text-[14px] font-[500]">IPK</span>
              <span class="text-[32px] font-[500]"><?php echo e($ipk->ipk); ?></span>
            </div>
          </td>
          <td>
            <div
              class="flex flex-col items-center justify-center gap-[8px] border-[2px] border-collapse border-t-0 border-b-0 border-r-0">
              <span class="text-[14px] font-[500]">SKSk</span>
              <span class="text-[32px] font-[500]"><?php echo e($ipk->totalSksTelahDiambil); ?></span>
            </div>
          </td>
        </table>
      </div>
    </div>

  </div>
  <!-- End Task Board -->
</div>

<script>
  window.onload = function () {
    resizeSidebar();
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
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/mhsDashboard.blade.php ENDPATH**/ ?>