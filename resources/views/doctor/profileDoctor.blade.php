@extends('layouts.doctor')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Detail Profile Dokter</h5>
                </div>
                @if (session('status') === 'profile-updated')
                <span class="alert alert-success">{{ __('Saved.') }}</span>
               @endif
                <div class="card-body">
                <form>
                    <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-user"></i
                        ></span>
                        <input
                            type="text"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            placeholder="John Doe"
                            aria-label="John Doe"
                            aria-describedby="basic-icon-default-fullname2"
                            name="name"
                            value="{{$user->name}}" 
                            />
                        </div>
                    </div>
                    </div>
                    <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="john.doe"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                                name="email"
                                value="{{$user->email}}"
                                />
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
                                type="text"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2" 
                                name="phone_number"
                                value="{{$user->phone_number}}"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Status</label>
                        <div class="col-sm-10">
                            <span class="d-flex align-items-center">
                                @if ($user->status == "Sudah Terverifikasi")
                                    <span class="fw-bold">Terverifikasi</span>
                                    <svg class="ms-2" style="background-color: #6200EE;color:white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg>
                                @elseif ($user->status == "Belum Terverifikasi")
                                    <span class="fw-bold">Belum Terverifikasi</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g class="alert-outline"><g fill="#000" class="Vector"><path fill-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10m-10 8a8 8 0 1 0 0-16a8 8 0 0 0 0 16" clip-rule="evenodd"/><path fill-rule="evenodd" d="M12 14a1 1 0 0 1-1-1V8a1 1 0 1 1 2 0v5a1 1 0 0 1-1 1" clip-rule="evenodd"/><path d="M11 16a1 1 0 1 1 2 0a1 1 0 0 1-2 0"/></g></g></svg>
                                @else
                                    <span class="fw-bold">Rejected</span>
                                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#000" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/></svg>
                                @endif
                                
                            </span>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Status</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFileMultiple" multiple="">
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-phone">Certficate</label>
                        <div class="col-sm-10">
                            <div class="card position-relative text-bg-white mb-3" style="max-width: 18rem;">
                                <a href="" class="position-absolute" style="top: 3%; right: 3%; wid
                                th: 24px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/></svg>
                                </a>
                                <div class="card-body">
                                  <img src="{{asset('admin/assets/img/sertifikat.jpg')}}" width="100%" alt="">
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection