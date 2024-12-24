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
            <h2>Paduan Suara</h2>
            <img src="{{ asset('images/paduansuara.png') }}" alt="Paduan Suara" class="church-img"><br>
            <p>Latihan Paduan Suara Naposo HKBP Srengseng Sawah diadakan setiap hari Sabtu pukul 19.00 di aula gereja. Latihan ini merupakan kesempatan bagi anggota pemuda yang berminat dalam pelayanan musik untuk berlatih bersama, memperkuat teknik vokal, dan mempersiapkan lagu-lagu pujian yang akan ditampilkan. Paduan suara ini secara rutin menampilkan puji-pujian khusus pada ibadah Minggu pertama dan ketiga setiap bulannya, menghadirkan suasana ibadah yang lebih khusyuk dan menyentuh bagi jemaat. Kami mengundang semua para pemuda yang memiliki minat dan talenta dalam musik untuk bergabung, memperkaya pelayanan, dan mempererat kebersamaan melalui puji-pujian bagi Tuhan.</p>
        </section>  
    </main>

@endsection
