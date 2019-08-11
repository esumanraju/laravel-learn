@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/jpg/siri-profile.jpg" class="rounded-circle" width="150" height="150">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between aligh-items-baseline">
                <h1>{{ ( Auth::user()->username ) }}</h1>
                <a href="#">Add New Post</a>
            </div>
             <div class="d-flex">
                 <div class="pr-5"><strong>153</strong>psots</div>
                 <div class="pr-5"><strong>23k</strong>followers</div>
                 <div class="pr-5"><strong>212</strong>following</div>
             </div>
             <div class="pt-4 font-weight-bold">{{ ('ProfileNameHere') }}</div>
             <div> {{ ('ProfileDescriptionHere') }}</div>
             <div><a href="#">{{ ('ProileUrlHere') }}</a></div>

        </div>
        <div class="row pt-5">
            <div class="col-4"><img src="https://instagram.fhyd11-1.fna.fbcdn.net/vp/635a3b20601ae941d955b79efcc33af2/5D6660F4/t51.2885-15/sh0.08/e35/c0.107.924.924a/s640x640/57251409_126311265211024_8203617265278055615_n.jpg?_nc_ht=instagram.fhyd11-1.fna.fbcdn.net" class="w-100"></div>
            <div class="col-4"><img src="https://instagram.fhyd11-1.fna.fbcdn.net/vp/09063aff4b9b3ec3841c02de32a303ed/5D656768/t51.2885-15/sh0.08/e35/c1.0.737.737a/s640x640/54425007_166047401053561_6189529997600999584_n.jpg?_nc_ht=instagram.fhyd11-1.fna.fbcdn.net" class="w-100"></div>
            <div class="col-4"><img src="https://instagram.fhyd11-1.fna.fbcdn.net/vp/5a85d5739c430ce3affba40f3e713a57/5D59AE8E/t51.2885-15/e35/c71.0.604.604a/29090507_358967727938098_3873193196771082240_n.jpg?_nc_ht=instagram.fhyd11-1.fna.fbcdn.net" class="w-100"></div>

        </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
