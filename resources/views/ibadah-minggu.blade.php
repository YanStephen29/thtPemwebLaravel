@extends('layouts.app')

@section('title')

@section('content')

    <main>
        <aside>
            <h2>Event Mingguan</h2>
            <ul>
                <li><a href="{{ url('ibadah-minggu') }}">Ibadah Minggu</a></li>
                <li><a href="{{ url('latihan-paduan-suara') }}">Paduan Suara</a></li>
                <li><a href="{{ url('badminton') }}">Badminton</a></li>
            </ul>
            <h2>Event Tahunan</h2>
            <ul>
                <li><a href="{{ url('retreat') }}">Retreat</a></li>
                <li><a href="{{ url('perayaan-natal') }}">Perayaan Natal</a></li>
                <li><a href="{{ url('kebaktian-padang') }}">Kebaktian Padang</a></li>
            </ul>
        
            <h2><a href="{{ url('commite') }}" class="commite-link">Commite</a></h2>
        </aside>
        
        <section class="content">
            <h2>Ibadah Minggu</h2>
            <img src="{{ asset('images/ibadah.png') }}" alt="Suasana Ibadah" class="church-img"><br>
            <p><b>Ibadah Minggu Pemuda</b>. HKBP Srengseng Sawah menyediakan satu ibadah khusus yang akan berisikan pemuda-pemuda yang akan menggunakan konsep yang berbeda, dikarenakan pada ibadah tersebut akan ada full music yang akan membuat ibadah lebih bersemangat dan dapat memaknnai ibadah tersebut secara intim. Ibadah Pemuda akan dilaksanakan setiap minggu pukul 18:00 di gereja HKBP Srengseng Sawah. Kami mengundang para pemuda baik yang berasal dari jemaat sendiri maupun jemaat yang berasal dari daerah lain untuk ibadah bersama.</p>
        </section>
    </main>

@endsection
