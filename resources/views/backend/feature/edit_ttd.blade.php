@extends('backend.utama')

@section('content1')

<section class="section">
    <div class="row">
        <div class="col-md-12 mx-auto mt-2">

            <div class="pagetitle">
                <h1>Edit Tanda Tangan</h1>
            </div>

            <div class="card">
                <div class="card-body mt-4">

                    <form action="{{ route('admin.ttd.update', $data->id_ttds) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="form-outline mb-4">
                            <label for="nama_terang" class="form-label">Nama Terang</label>
                            <input type="text" name="nama_terang" id="nama_terang" class="form-control" required
                                oninvalid="this.setCustomValidity('Harap lengkapi nama terang')"
                                oninput="this.setCustomValidity('')"
                                placeholder="Masukkan Nama Terang"
                                value="{{ $data->nama_terang }}">
                        </div>

                        {{-- Jabatan --}}
                        <div class="form-outline mb-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select name="jabatan" class="datepicker-trigger form-control hasDatepicker">
                                <option value="Ketua" {{ $data->jabatan == 'Ketua' ? 'selected' : '' }}>Ketua</option>
                                <option value="Wakil Ketua" {{ $data->jabatan == 'Wakil Ketua' ? 'selected' : '' }}>Wakil Ketua</option>
                                <option value="Sekretaris" {{ $data->jabatan == 'Sekretaris' ? 'selected' : '' }}>Sekretaris</option>
                                <option value="Bendahara" {{ $data->jabatan == 'Bendahara' ? 'selected' : '' }}>Bendahara</option>
                            </select>
                        </div>

                        {{-- Pokja --}}
                        <div class="form-outline mb-4">
                            <label for="pokja" class="form-label">Pokja</label>
                            <select name="pokja" class="datepicker-trigger form-control hasDatepicker">
                                <option value="Bidang Umum" {{ $data->pokja == 'Bidang Umum' ? 'selected' : '' }}>Bidang Umum</option>
                                <option value="Kelompok Kerja I" {{ $data->pokja == 'Kelompok Kerja I' ? 'selected' : '' }}>Kelompok Kerja I</option>
                                <option value="Kelompok Kerja II" {{ $data->pokja == 'Kelompok Kerja II' ? 'selected' : '' }}>Kelompok Kerja II</option>
                                <option value="Kelompok Kerja III" {{ $data->pokja == 'Kelompok Kerja III' ? 'selected' : '' }}>Kelompok Kerja III</option>
                                <option value="Kelompok Kerja IV" {{ $data->pokja == 'Kelompok Kerja IV' ? 'selected' : '' }}>Kelompok Kerja IV</option>
                            </select>
                        </div>

                        {{-- BUTTON --}}
                        <div class="text-end pt-1 pb-1 mt-4">
                            <button class="btn btn-primary ps-xxl-5 pe-xxl-5 mr-auto background-blue-1 mb-2 fw-semibold fs-5"
                                type="submit">
                                Edit
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection