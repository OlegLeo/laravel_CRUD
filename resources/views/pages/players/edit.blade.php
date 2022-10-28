<?php use App\Country ?>
@extends('master.main')

@section('content')

    @component('components.players.player-form-edit', ['player' => $player, 'countries' => Country::with('player')->get()]);
    @endcomponent

@endsection
