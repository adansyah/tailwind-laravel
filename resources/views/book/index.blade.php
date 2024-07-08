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
                <div class="d-inline">
                    <a href="book/tambah" class="btn btn-primary"><i data-feather="file-plus"></i></a>
                    <a href="" class="btn btn-success"><i data-feather="printer">Print</i></a>
                </div>
                <br><br>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published_date</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($book as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->published_date }}</td>
                        <td>{{ $item->publisher }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <a href="book/{{ $item->id }}/hapus" class="text-green-400 hover:text-green-900 mx-2">
                                <i data-feather="eye" class="d-inline mb-3">delete_outline</i>
                            </a>
                            <a href="book/{{ $item->id }}/edit" class="text-yellow-400 hover:text-yellow-900 mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="book/{{ $item->id }}/hapus" class="text-red-400 hover:text-red-900 mx-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
