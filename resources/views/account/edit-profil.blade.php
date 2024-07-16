@extends('layouts.app')
@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li>
                    <a href="/">
                        Acccueil 
                    </a>
                </li>

                <li class="active">Mon Profil</li>
            </ul>
        </div>
    </div>
</div>


<section class="dashboard-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @include('account.layouts.navbar')

            </div>

            <div class="col-lg-8">
                <div class="edit-profile">
                    <h3>Mon Profil</h3>
                    
                    <form class="submit-property-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Gallery</label>
                                    <div class="file-upload">
                                        <input type="file" name="file" id="file" class="inputfile">
                                        <label class="upload" for="file">
                                            <i class="ri-image-2-fill"></i>
                                            Upload Photo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn">
                                    Save Change
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()