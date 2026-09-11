@extends('layouts.app')

@section('title', 'Risk & Assurance Intelligence | THE MORGANS')

@section('content')
    <livewire:banner
        leading="M.04 INSTITUTIONAL"
        :entryTable="true"
        title="WGRCFP — Women in GRC & FinCrime Prevention"
        subtitle="The profession's next generation of leaders is already here. Our job is to make sure nothing stands between them and the top of it."
        brand-site="wgrcfp.org"
        brand-url="https://wgrcfp.org"
        category='Institutional'
        registerEntry='M.05'
    />

     <livewire:careers.wgrcfp />

    <livewire:footer />
@endsection
