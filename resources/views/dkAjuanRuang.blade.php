@extends('header')

@section('title','Buat Ruang')

@section('page')


<style>
    /* Hilangkan outline pada elemen teks dan cegah pemilihan teks */
    p, span, h1, h2, h3, h4, h5, h6, a {
        outline: none;
        user-select: none;
    }
    .no-outline {
        outline: none;
        pointer-events: none;
    }
</style>

<div class="flex h-screen">
            {{-- sidebar --}}
  
            <x-side-bar :active="request()->route()->getName()">
              
            </x-side-bar>
          {{-- end sidebar --}}

    {{-- Main Content --}}
    <div id="main-content" class="w-4/5 bg-red-300 p-8 overflow-y-auto h-screen ml-[20%]">
        <div class="bg-white border border-gray-300 rounded-3xl shadow-md p-6">
            <h1 class="text-3xl font-bold mb-6 text-red-300">Pengajuan Ruang</h1>
            
            <!-- Input Search dan Button Setujui Semua -->
            <div class="flex justify-between mb-6">
                <input id="searchRuang" type="text" placeholder="Cari Ruang" class="bg-gray-100 rounded-lg px-4 py-2 w-2/3">
                <button id="selectAll" type="button" onclick="updateStatus('all', 'Disetujui')" class="text-white bg-red-400 hover:bg-red-500 shadow-lg font-medium rounded-lg text-sm px-5 py-2.5">
                    Setujui Semua
                </button>
            </div>
            
            <!-- Table Ruang -->
            <table id="Ruang" class="min-w-full bg-white rounded-lg shadow-md">
                <thead class="bg-red-300">
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
                <tbody>
                    @foreach ($data as $ruang)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $ruang->noruang }}</td>
                        <td class="py-3 px-4">{{ $ruang->blokgedung }}</td>
                        <td class="py-3 px-4">{{ $ruang->lantai }}</td>
                        <td class="py-3 px-4">{{ $ruang->fungsi }}</td>
                        <td class="py-3 px-4">{{ $ruang->kapasitas }}</td>
                        <td id="statusNow-{{ $ruang->id }}" class="py-3 px-4">
                            <span class="{{ 
                                $ruang->status == 'Pending' ? 'bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full' : 
                                ($ruang->status == 'Disetujui' ? 'bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full' : 'bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full') 
                                }}">
                                {{ $ruang->status }}
                            </span>
                        </td>
                        <td class="py-3 px-4">
                            <button type="button" data-modal-target="detailModal-{{ $ruang->id }}" data-modal-toggle="detailModal-{{ $ruang->id }}" class="text-white bg-red-300 hover:bg-red-400 shadow-lg px-3 py-2 text-xs font-medium rounded-lg">Detail</button>
                            @if ($ruang->status == 'Pending')
                            <button id="approve-btn-{{ $ruang->id }}" type="button" onclick="approve({{ $ruang->id }})" class="text-white bg-[#2ACD7F] px-3 py-2 text-xs font-medium rounded-lg ml-2">Setuju</button>
                            <button id="reject-btn-{{ $ruang->id }}" type="button" onclick="reject({{ $ruang->id }})" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg px-3 py-2 text-xs font-medium rounded-lg ml-2">Tolak</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
  
            
                @foreach ($data as $ruang)
                {{-- editmodal --}}
                    <div id="detailModal-{{ $ruang->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Detail Ruang
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="detailModal-{{ $ruang->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal Edit Ruang -->
                                <form class="p-4 md:p-5" action = "ruang/{{ $ruang->id }}" method = "GET">
                                    @csrf
                                    @method('GET')
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-1">
                                            <label for="noruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Ruang</label>
                                            <h1>{{ $ruang->noruang }}</h1>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="blokgedung" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blok Gedung</label>
                                            <h1>{{ $ruang->blokgedung }}</h1>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fungsi</label>
                                            <h1>{{ $ruang->fungsi }}</h1>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas</label>
                                            <h1>{{ $ruang->kapasitas }}</h1>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                {{-- endedilmodal  --}}

            
                    
                @endforeach

  
            </div>
        </div>



        {{-- datatable  --}}
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
                } );
            </script>
        {{-- datatble_end --}}
        <script>

        
        // Update status untuk semua ID yang terpilih
        function approve(id) {
            updateStatus(id, 'Disetujui');
        }
        
        function reject(id) {
            updateStatus(id, 'Ditolak');
        }
        
        function updateStatus(id, status) {
            $.ajax({
                url: `/ruang/${id}/update-status`, // Route untuk update status
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                if (id === 'all') {
                    console.log(response);
                    // Jika mengupdate semua, update status di table untuk semua
                    response.data.forEach(function(ruang) {
                        $('#statusNow-' + ruang.id).text(status);
                        $('#approve-btn-' + ruang.id).hide();
                        $('#reject-btn-' + ruang.id).hide();
                    });
                } 
                else {
                    $('#statusNow-' + id + ' span').text(status);

                    $('#statusNow-' + id + ' span').removeClass();
                    if (status == 'Disetujui') {
                        $('#statusNow-' + id + ' span').attr('class', 'bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300');
                    } else {
                        $('#statusNow-' + id + ' span').attr('class', 'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300');
                    }
                    $('#approve-btn-' + id).hide();
                    $('#reject-btn-' + id).hide();
                }
                },
                error: function(xhr) {
                    alert('Gagal memperbarui status.');
                }
            });
        }

        </script>
        
        
        
@endsection
