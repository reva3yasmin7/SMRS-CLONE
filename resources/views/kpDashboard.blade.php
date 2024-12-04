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
              <span class="text-[24px] text-[#101828]">test11</span>
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

        <!-- Informasi Mahasiswa -->
        <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-300">
            <h2 class="text-2xl font-bold mb-4">Informasi Mahasiswa</h2>
            <div class="flex justify-between mb-8 px-4">
                <div class="bg-[#38A6D6] p-6 rounded-2xl text-center w-[30%]">
                    <h1 class="text-2xl font-bold">632</h1>
                    <p>Total Mahasiswa</p>
                </div>
                <div class="bg-[#2ACD7F] p-6 rounded-2xl text-center w-[30%]">
                    <h1 class="text-2xl font-bold">610</h1>
                    <p>Mahasiswa Aktif</p>
                </div>
                <div class="bg-[#C34444] p-6 rounded-2xl text-center w-[30%]">
                    <h1 class="text-2xl font-bold">22</h1>
                    <p>Mahasiswa Cuti</p>
                </div>
            </div>

            <!-- Tabel Informasi Mahasiswa -->
            <div class="overflow-x-auto">
                <table class="w-full text-center bg-white rounded-2xl shadow-md border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 font-semibold text-gray-700">No</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Angkatan</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Jumlah Mahasiswa</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Aktif</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Cuti</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Rata-rata IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4">1</td>
                            <td class="py-3 px-4">2024</td>
                            <td class="py-3 px-4">215</td>
                            <td class="py-3 px-4">215</td>
                            <td class="py-3 px-4">0</td>
                            <td class="py-3 px-4">3.9</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">2</td>
                            <td class="py-3 px-4">2023</td>
                            <td class="py-3 px-4">198</td>
                            <td class="py-3 px-4">195</td>
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4">3.1</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">3</td>
                            <td class="py-3 px-4">2022</td>
                            <td class="py-3 px-4">165</td>
                            <td class="py-3 px-4">150</td>
                            <td class="py-3 px-4">15</td>
                            <td class="py-3 px-4">3.3</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">4</td>
                            <td class="py-3 px-4">2021</td>
                            <td class="py-3 px-4">40</td>
                            <td class="py-3 px-4">36</td>
                            <td class="py-3 px-4">4</td>
                            <td class="py-3 px-4">3.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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

@endsection