@extends('header')

@section('title', 'Dashboard Pembimbing Akademik')

@section('page')

<div class="flex h-screen">
    {{-- Sidebar --}}
    <x-side-bar :active="request()->route()->getName()"></x-side-bar>
    {{-- End Sidebar --}}

    {{-- Main Content --}}
    <div id="main-content" class="flex-1 p-8 bg-red-300 min-h-screen ml-[360px]">

      <!-- Navbar -->
      <div class="flex-1 bg-white px-[24px] py-[12px] rounded-[20px] mb-[40px] shadow-lg">
        <div class="flex flex-1 gap-[16px] items-center flex-row">
          <div class="flex flex-1 gap-[16px] items-center flex-row">
            <img src="{{ asset('alip.jpg') }}" class="w-[52px] h-[52px] rounded-full" />
            <div class="flex-1 flex flex-col">
              <span class="text-[24px] text-[#101828]">test10</span>
              <span class="text-[18px] text-[#101828]">NIP : 123456789</span>
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
            test11
          </span>
        </div>
        <div class="flex flex-col pl-[20px] relative flex-1">
          <img class="absolute bottom-0 right-0 w-[320px]" src="{{ asset('3d-image.png') }}" />
        </div>
      </div>
      <!-- End Welcome Hero Screen -->

            <!-- News Section -->
            <!-- <div class="mt-8 bg-white p-6 rounded-2xl shadow-md border border-gray-300">
                <h2 class="text-2xl font-bold">NEWS</h2>
                <div class="mt-4 bg-gray-100 rounded-2xl p-4"> -->
                    <!-- Konten News bisa di sini -->
                <!-- </div>
            </div> -->

            <!-- Pengajuan Jadwal dan Ruangan -->
            <div class="mt-8 bg-white p-6 rounded-2xl shadow-md border border-gray-300">
                <h2 class="text-2xl font-bold">Pengajuan Jadwal dan Ruangan</h2>
                <div class="flex justify-center gap-10 mt-4">
                    <div onclick="location.href='{{ route('ajuanruang') }}'" class="bg-[#38A6D6] px-4 py-6 w-[40%] rounded-2xl text-right cursor-pointer">
                        <h1 class="text-2xl text-center font-bold">40</h1>
                        <h1 class="text-center">Pengajuan Ruangan</h1>
                    </div>
                    <div onclick="location.href='{{ route('ajuanjadwal') }}'" class="bg-[#2ACD7F] px-4 py-6 w-[40%] rounded-2xl text-right cursor-pointer">
                        <h1 class="text-2xl text-center font-bold">30</h1>
                        <h1 class="text-center">Pengajuan Jadwal</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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

@endsection