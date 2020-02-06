@extends('layouts.app')
@section('content')
    @include('home.inc.page_bg')
    @include('home.inc.page_border')
    <header class="nk-header nk-header-opaque">
        @include('inc.topNav')
        @include('inc.nav')
    </header>
    @include('inc.rightNav')
    @include('inc.mobileNav')
    <div class="nk-main">
        @include('home.inc.mainHeader')
        @include('home.inc.revSlider')
        @include('home.inc.mainFeatures')
        @include('home.inc.countDown')
        @include('inc.signForms')
    </div>
@endsection
<?php
    echo '<pre>';
        var_dump($data);
        echo 'Visitor IP: '.$data["Browser"]->IP.'<br>';
    echo '</pre>';
?>