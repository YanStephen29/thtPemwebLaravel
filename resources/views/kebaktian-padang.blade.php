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
            <h2>Kebaktian Padang</h2>
            <img src="{{ asset('images/kebaktian.png') }}" alt="Kebaktian Padang" class="church-img"><br>
            <p><b>Kebaktian Padang HKBP Srengseng Sawah</b> adalah sebuah kegiatan ibadah khusus yang dilaksanakan di alam terbuka, mengajak jemaat untuk merasakan kehadiran Tuhan lebih dekat melalui suasana yang natural dan segar. Ibadah ini diadakan di lokasi yang memiliki pemandangan alam yang indah dan damai, memberikan kesempatan bagi jemaat untuk memperbarui iman dan penghayatan spiritual mereka. Melalui Kebaktian Padang, jemaat dapat merasakan kebersamaan yang lebih akrab, sambil terlibat dalam aktivitas ibadah, nyanyian pujian, dan doa bersama. Kegiatan ini juga menjadi sarana untuk mempererat persaudaraan dan membangun relasi yang lebih erat antarjemaat dalam suasana kekeluargaan. Kebaktian Padang tidak hanya menawarkan pengalaman ibadah yang berbeda tetapi juga memberikan kesempatan untuk merefleksikan kebesaran Tuhan dalam ciptaan-Nya, menjadikan ibadah ini sebagai momen yang penuh makna dan berkah bagi seluruh jemaat.</p>
        </section>  
    </main>

@endsection
