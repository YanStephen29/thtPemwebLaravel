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
            <h2>Retreat</h2>
            <img src="{{ asset('images/retreat.png') }}" alt="Retreat" class="church-img"><br>
            <p><b>Retreat Naposo HKBP Srengseng Sawah</b> adalah kegiatan tahunan yang biasanya diadakan pada bulan Juli. Acara ini dirancang sebagai momen khusus untuk jemaat, terutama kaum muda, guna memperdalam spiritualitas, mempererat hubungan dengan sesama, dan menikmati suasana yang lebih tenang jauh dari rutinitas sehari-hari. Dalam retreat ini, peserta akan mengikuti rangkaian kegiatan seperti sesi ibadah, renungan, diskusi kelompok, dan refleksi diri yang dipandu oleh pembimbing rohani. Tidak hanya kegiatan rohani, retreat juga disertai dengan aktivitas rekreasi dan permainan yang menyenangkan, menciptakan suasana keakraban yang lebih erat di antara peserta. Melalui retreat ini, diharapkan para peserta dapat membawa pulang pengalaman yang menguatkan iman dan memperbaharui semangat pelayanan dalam kehidupan sehari-hari.</p>
        </section>  
    </main>
@endsection
