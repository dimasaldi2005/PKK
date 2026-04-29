@extends('backend.utama')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-md-12 mx-auto mt-2">

            {{-- TITLE --}}
            <div class="pagetitle">
                <h1>Input Tanda Tangan Ketua</h1>
            </div>

            {{-- FORM --}}
            <div class="card">
                <div class="card-body mt-4">
                    <form action="{{ route('admin.ttd.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Keterangan</label>
                            <input type="text" name="nama_terang" class="form-control"
                                placeholder="Masukkan nama keterangan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <select name="jabatan" class="form-control select2" required>
                                <option value="">Pilih</option>
                                <option value="Ketua">Ketua</option>
                                <option value="Wakil Ketua">Wakil Ketua</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Bendahara">Bendahara</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pokja</label>
                            <select name="pokja" class="form-control select2" required>
                                <option value="">Pilih Pokja</option>
                                <option value="Bidang Umum">Bidang Umum</option>
                                <option value="Kelompok Kerja I">Pokja I</option>
                                <option value="Kelompok Kerja II">Pokja II</option>
                                <option value="Kelompok Kerja III">Pokja III</option>
                                <option value="Kelompok Kerja IV">Pokja IV</option>
                            </select>
                        </div>

                        <div class="text-end mt-4">
                            <button class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>

            {{-- TITLE --}}
            <div class="pagetitle mt-4">
                <h1>Daftar Tanda Tangan</h1>
            </div>

            {{-- ALERT --}}
            @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ $message }}',
                    icon: 'success',
                    confirmButtonColor: '#016AA3',
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
            @endif

            {{-- TABLE --}}
            <div class="card">
                <div class="card-body mt-3">

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Pokja</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($data as $ttd)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ttd->nama_terang }}</td>
                                <td>{{ $ttd->jabatan }}</td>
                                <td>{{ $ttd->pokja }}</td>
                                <td>
                                    <a href="{{ route('admin.ttd.edit', $ttd->id_ttds) }}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.ttd.destroy', $ttd->id_ttds) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="confirmDelete(this)">
                                            <script>
                                                function confirmDelete(button) {
                                                    Swal.fire({
                                                        title: 'Yakin?',
                                                        text: "Data akan dihapus!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#016AA3',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, hapus!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            button.closest('form').submit();
                                                        }
                                                    });
                                                }
                                            </script>
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-danger">
                                    Tidak ada data tanda tangan
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection