<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Data Pasien</h3>
        <a href="{{url('dashboard/pasien/create')}}" class="btn btn-primary">+ Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Kelurahan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{$pasien->id}}</td>
                    <td>{{$pasien->kode}}</td>
                    <td>{{$pasien->nama}}</td>
                    <td>{{$pasien->gender}}</td>
                    <td>{{$pasien->Kelurahan->nama ?? 'N/A'}}</td>
                    <td>
                        <a href="{{url('dashboard/pasien/show', $pasien->id)}}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{url('dashboard/pasien/edit', $pasien->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{url('dashboard/pasien/destroy', $pasien->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
    </x-layout>