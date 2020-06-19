@extends('Layouts/MasterLayouts')

@section('Title')
    <Title>GadaMaxima - Inbox</Title>
@endsection

@section('layout')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Pesan
                </div>
                <div class="card-body" id="app" >
                    <chat-app :user="{{ auth()->user() }}"> </chat-app>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection