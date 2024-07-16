@extends('layouts.app')
@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li>
                    <a href="/">
                        Accueil 
                    </a>
                </li>

                <li class="active">Mot de passe</li>
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
                <div class="address-list">
                    <h3>Change Password</h3>

                    <form class="submit-property-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <button type="submit" class="default-btn">
                                    Change Password
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