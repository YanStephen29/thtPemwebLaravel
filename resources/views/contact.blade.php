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
            <h2>Contact</h2>
            <p>Shallom Naps! Barangkali teman-teman sekalian ada yang ingin ditanyakan atau digumulkan, teman-teman dapat menghubungi tim kami melalui :</p>
            <div class="contact">
                <a href="https://wa.me/6282110887045"><img src="wa.png" alt="wa" style="width: 80px;height: fit-content; vertical-align:middle; margin-right:5px;"></a>
                <a href="https://www.instagram.com/nhkbpsrengsengsawah_?igsh=djJuc2Z1OGx6ZnJi"><img src="ig.png" alt="wa" style="width: 40px;height: fit-content; vertical-align:middle; margin-right:5px;"></a>
            </div>
        </section>
    </main>

@endsection
