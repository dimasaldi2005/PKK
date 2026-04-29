@extends('backend/utama')

@section('content1')

<div class="pagetitle">
    <h1>Input Berita</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-md-12">

            {{-- SUCCESS --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success">{{ $message }}</div>
            @endif

            {{-- ERROR --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            {{-- FORM --}}
            <div class="card">
                <div class="card-body mt-3">

                    <form action="{{ route('admin.input_berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Gambar</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>File (Opsional)</label>
                            <input type="file" name="file" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim</button>

                    </form>

                </div>
            </div>

            {{-- TABLE --}}
            <div class="card mt-3">
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $berita)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $berita->image) }}" width="120">
                                    </td>
                                    <td>{{ Str::limit($berita->judul, 25) }}</td>
                                    <td>{{ Str::limit($berita->deskripsi, 25) }}</td>
                                    <td>{{ $berita->file }}</td>
                                    <td>
                                        <a href="{{ route('admin.input_berita.edit', $berita->id) }}"
                                           class="btn btn-warning btn-sm">Edit</a>

                                        <form action="{{ route('admin.input_berita.destroy', $berita->id) }}"
                                              method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
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