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
            <h2>Natal</h2>
            <img src="{{ asset('images/natal.png') }}" alt="Natal" class="church-img"><br>
            <p><b>Natal</b> di NHKBP Srengseng Sawah adalah perayaan tahunan yang sangat dinantikan oleh seluruh jemaat dan diadakan dengan penuh sukacita pada bulan Desember. Acara ini mencakup ibadah khusus yang diiringi dengan nyanyian paduan suara dan pujian, menciptakan suasana yang khidmat dan penuh syukur. Selain ibadah, biasanya ada rangkaian acara tambahan seperti drama Natal, persembahan lagu oleh anak-anak sekolah minggu, dan pesan Natal yang disampaikan untuk menguatkan iman serta mempererat kebersamaan antarjemaat. Perayaan Natal di NHKBP Srengseng Sawah tidak hanya menjadi momen untuk mengenang kelahiran Yesus Kristus tetapi juga sebagai kesempatan untuk saling berbagi, mempererat hubungan jemaat, dan berbagi kasih dengan lingkungan sekitar.</p>
        </section>  
    </main>

@endsection
