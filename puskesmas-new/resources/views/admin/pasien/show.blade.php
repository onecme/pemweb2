<x-layout>
    <x-slot name="page_name">Halaman Pasien / Show</x-slot>
    <x-slot name="page_title">Berikut adalah tampilan Detail Pasien yang dipilih :</x-slot>
        <x-slot name="page_content">
                <table class="table table-bordered ">
                    <tr class="table-info">
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Pasien</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Faskes Kelurahan</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                    <tr>
                        <td>{{ $pasien->id}}</td>
                        <td>{{ $pasien->kode }}</td>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->tmp_lahir }}</td>
                        <td>{{ $pasien->tgl_lahir }}</td>
                        <td>{{ $pasien->gender }}</td>
                        <td>{{ $pasien-> email}}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->kelurahan ? $pasien->kelurahan->nama : 'Kelurahan tidak ditemukan' }}</td>
                        <td>{{ $pasien->created_at }}</td>
                        <td>{{ $pasien->updated_at }}</td>
                        
                    </tr>
                </table>
        </x-slot>
</x-layout>