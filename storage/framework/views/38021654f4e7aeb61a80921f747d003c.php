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

      <!-- Welcome Hero Screen -->
      <div class="flex-1 bg-white flex flex-row items-stretch rounded-[20px] shadow-lg mb-[40px]">
        <div class="flex flex-col flex-1 py-[64px] pl-[40px]">
          <span class="text-[40px] font-[300]">Hello,</span>
          <span class="text-[40px] font-[500] truncate text-wrap">
            <?php echo e($userName); ?>

          </span>
        </div>
        <div class="flex flex-col pl-[20px] relative flex-1">
          <img class="absolute bottom-0 right-0 w-[379px]" src="<?php echo e(asset('3d-image.png')); ?>" />
        </div>
      </div>
      <!-- End Welcome Hero Screen -->

      <!-- Task Board -->
       <div class="flex flex-row justify-start">
        <div class="bg-white px-[24px] py-[12px] pb-[30px] rounded-[20px] mb-[40px] shadow-lg flex flex-col">
          <div class="flex flex-row items-center gap-[16px] mb-[16px]">
            <img src="<?php echo e(asset('icons/PADashboard/TaskMenu.png')); ?>" alt="" class="w-[42px] h-[42px]">
            <span class="text-[24px] font-[500]">Task Board</span>
          </div>

          <a href="<?php echo e(route('perwalian.list')); ?>">
            <div class="min-w-[580px] p-[20px] shadow-md rounded-[20px] hover:shadow-inner">
              <div class="flex flex-row items-center gap-[8px] w-full">
                <div class="flex flex-row items-center flex-1">
                  <img src="<?php echo e(asset('icons/PADashboard/Book.png')); ?>" alt="" class="w-[70px] h-[50px]">
                  <span class="text-[24px] font-[500]">Perwalian</span>
                </div>
                <img src="<?php echo e(asset('icons/PADashboard/PlayCircle.png')); ?>" alt="" class="flex justify-self-end w-[40px] h-[40px]" />
              </div>
            </div>
          </a>

        </div>
       </div>
      <!-- End Task Board -->
    </div>
</div>

<script>
  window.onload = function() {
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

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dover\Downloads\SMRS-CLONE\SMRS-CLONE\resources\views/paDashboard.blade.php ENDPATH**/ ?>