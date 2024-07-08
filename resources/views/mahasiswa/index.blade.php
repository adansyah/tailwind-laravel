<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl"></h3> --}}
    <div data-aos="fade-up">
        <table class="table table-striped">
            <thead class="text-center">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <a href="mahasiswa/tambah" class="btn btn-primary"><i data-feather="file-plus"></i></a>
                <br><br>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($mahasiswa as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telp }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>

                            <a href="mahasiswa/{{ $item->id }}/edit"
                                class="text-yellow-400 hover:text-yellow-900 mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="mahasiswa/{{ $item->id }}/hapus" class="text-red-400 hover:text-red-900 mx-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                            {{-- <a href="" class="btn btn-success"><i class="fas fa-print">Print</i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
