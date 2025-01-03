@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">
                        @switch(Route::currentRouteName())
                            @case('showDokter') Detail Dokter @break
                            @case('editDokter') Edit Dokter @break
                        @endswitch
                    </h5>
                </div>
                <div class="card-body">
                <form action="{{ route('updateDokter', $dokter->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-user"></i
                        ></span>
                        <input
                            value="{{ $dokter->name }}"
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Doctor Name"
                            aria-label="Doctor Name"
                            aria-describedby="basic-icon-default-fullname2"
                            {{ Route::currentRouteName() === 'showDokter' ? 'disabled' : '' }}/>
                        </div>
                    </div>
                    </div>
                    <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input
                                value="{{ $dokter->email }}"
                                type="text"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="email"
                                aria-label="email"
                                aria-describedby="basic-icon-default-email2"
                                {{ Route::currentRouteName() === 'showDokter' ? 'disabled' : '' }}/>
                            <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Phone No</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                            ></span>
                            <input
                                value="{{ $dokter->phone_number ?? '' }}"
                                type="text"
                                id="phone_number"
                                name="phone_number"
                                class="form-control phone-mask"
                                placeholder="Phone Number"
                                aria-label="Phone Number"
                                aria-describedby="basic-icon-default-phone2"
                                {{ Route::currentRouteName() === 'showDokter' ? 'disabled' : '' }}/>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" id="id" value="{{ $dokter->id }}">
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="status" name="status" aria-label="Default select example" {{ Route::currentRouteName() === 'showDokter' ? 'disabled' : '' }}>
                                <option value="">Pilih Status</option>
                                <option value="Sudah Terverifikasi" {{ $dokter->status == 'Sudah Terverifikasi' ? 'selected' : '' }}>Sudah Terverifikasi</option>
                                <option value="Belum Terverifikasi" {{ $dokter->status == 'Belum Terverifikasi' ? 'selected' : '' }}>Belum Terverifikasi</option>
                                <option value="rejected" {{ $dokter->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="image">Certificate</label>
                        <div class="col-sm-10">
                            <div class="card position-relative text-bg-white mb-3" style="max-width: 18rem;">
                                <!-- Button untuk menghapus atau menutup -->
                                <a href="#" class="position-absolute text-decoration-none text-muted" style="top: 3%; right: 3%;" {{ Route::currentRouteName() === 'showDokter' ? 'hidden' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" >
                                        <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/>
                                    </svg>
                                </a>
                                <div class="card-body">
                                    @if ($dokter->certificate)
                                        <img 
                                            src="{{ asset('storage/' . $dokter->certificate) }}" 
                                            alt="Certificate" 
                                            class="img-fluid rounded" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#imageModal">
                                    @else
                                        <p class="text-center mb-0">No certificate uploaded</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel">Certificate Preview</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center">
                                    @if ($dokter->certificate)
                                        <img src="{{ asset('storage/' . $dokter->certificate) }}" alt="Certificate" class="img-fluid">
                                    @else
                                        <p>No certificate uploaded</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Artikel</label>
                        <div class="container col-sm-10">
                            <div class="row justify-content-evenly">
                                @forelse ($dokter->article as $artikel)
                                <div class="card text-bg-light mb-3 bg-white col col-12 col-sm-6" style="max-width: 20rem;">
                                    <h5 class="card-header">{{ $artikel->title }}</h5>
                                    <div class="card-body">
                                      <p class="card-text">publish : {{ $artikel->format_tanggal }}</p>
                                      <a href="{{ route('detailArtikel', $artikel->id) }}" class="card-text text-decoration-underline" style="color: #696CFF">Detail Artikel
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 17H7q-2.075 0-3.537-1.463T2 12t1.463-3.537T7 7h4v2H7q-1.25 0-2.125.875T4 12t.875 2.125T7 15h4zm-3-4v-2h8v2zm5 4v-2h4q1.25 0 2.125-.875T20 12t-.875-2.125T17 9h-4V7h4q2.075 0 3.538 1.463T22 12t-1.463 3.538T17 17z"/></svg>
                                      </a>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12">
                                    <p>Belum membuat Artikel</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <a href="{{ route('indexDokter') }}" class="btn btn-danger me-5">Kembali</a>
                        @if(Route::currentRouteName() == 'editDokter')
                        <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
                        @endif
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection