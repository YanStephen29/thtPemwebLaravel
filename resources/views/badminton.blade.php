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
            <h2>Badminton</h2>
            <img src="{{ asset('images/badminton.jpg') }}" alt="Badminton" class="church-img"><br>
            <p>Latihan badminton HKBP Srengseng Sawah diadakan setiap hari Minggu pukul 14.00 hingga 16.00. Kegiatan ini terbuka untuk semua jemaat yang ingin berolahraga sambil mempererat kebersamaan. Latihan badminton tidak hanya menjadi ajang untuk meningkatkan kebugaran fisik, tetapi juga untuk memperkuat ikatan antarjemaat dalam suasana yang santai dan menyenangkan. Dengan diadakannya latihan rutin ini, kami berharap semakin banyak jemaat yang dapat bergabung, menikmati olahraga, dan menjalin relasi yang lebih akrab di antara sesama.</p>
            
            <table class="maplapangan">
                <tr>
                    <th>Nama Lapangan</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                </tr>

                    <tr>
                        <td>Lapangan Badminton A</td>
                        <td><a href="https://maps.app.goo.gl/rVUUcgXj4Hc7Xwt68" target="_blank">Lokasi</a></td>
                        <td>Rp 40.000/jam</td>
                    </tr>
                    <tr>
                        <td>Lapangan Badminton B</td>
                        <td><a href="https://maps.app.goo.gl/wyisYTv1y3nf2P5V9" target="_blank">Lokasi</a></td>
                        <td>Rp 45.000/jam</td>
                    </tr>
                    <tr>
                        <td>Lapangan Badminton C</td>
                        <td><a href="https://maps.app.goo.gl/iQbayUUFX96VSQ3d6" target="_blank">Lokasi</a></td>
                        <td>Rp 55.000/jam</td>
                    </tr>
            </table>
        </section>  
    </main>
@endsection
