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
            <h2>Pengurus NHKBP Srengseng Sawah</h2>
            <section class="committee-section">
                <div class="member">
                    <img src="{{ asset('images/ketua.png') }}" alt="Ketua" class="profile-pic">
                    <h3>Ketua</h3>
                    <p>Lukas Hutagalung</p>
                </div>
            
                <div class="member">
                    <img src="{{ asset('images/sekretaris.png') }}" alt="Sekretaris" class="profile-pic">
                    <h3>Sekretaris</h3>
                    <p>Naomi Aritonang</p>
                </div>

                <div class="member">
                    <img src="{{ asset('images/bendahara.png') }}" alt="Bendahara" class="profile-pic">
                    <h3>Bendahara</h3>
                    <p>Chyntia Sibagariang</p>
                </div>
            
                <div class="member">
                    <img src="{{ asset('images/acara-ketua.png') }}" alt="Ketua Divisi Acara dan Ibadah" class="profile-pic">
                    <h3>Ketua Divisi Acara dan Ibadah</h3>
                    <p>Naika Nainggolan</p>
                </div>
                <div class="member">
                    <img src="{{ asset('images/acara_anggota.png') }}" alt="Anggota Divisi Acara dan Ibadah" class="profile-pic">
                    <h3>Anggota Divisi Acara dan Ibadah</h3>
                    <p>Cecilia</p>
                </div>
            
                <div class="member">
                    <img src="{{ asset('images/koor-ketua.png') }}" alt="Ketua Divisi Koor" class="profile-pic">
                    <h3>Ketua Divisi Koor</h3>
                    <p>Siska Manurung</p>
                </div>
                <div class="member">
                    <img src="{{ asset('images/koor-anggota1.png') }}" alt="Anggota Divisi Koor" class="profile-pic">
                    <h3>Anggota Divisi Koor</h3>
                    <p>Angelica Sialagan</p>
                </div>
                <div class="member">
                    <img src="{{ asset('images/koor-anggota2.png') }}" alt="Anggota Divisi Koor" class="profile-pic">
                    <h3>Anggota Divisi Koor</h3>
                    <p>Irene Nababan</p>
                </div>

                <div class="member">
                    <img src="{{ asset('images/hpd-ketua.png') }}" alt="Ketua HPD" class="profile-pic">
                    <h3>Ketua Divisi HPD</h3>
                    <p>Fani Sialagan</p>
                </div>
                <div class="member">
                    <img src="{{ asset('images/hpd-anggota.png') }}" alt="Anggota Divisi HPD" class="profile-pic">
                    <h3>Anggota Divisi HPD</h3>
                    <p>Ariel Manulang</p>
                </div>
            
                <div class="member">
                    <img src="{{ asset('images/olahraga-ketua.png') }}" alt="Ketua Divisi Olahraga" class="profile-pic">
                    <h3>Ketua Divisi Olahraga</h3>
                    <p>Audy Roland Nababan</p>
                </div>
                <div class="member">
                    <img src="{{ asset('images/olahraga-anggota.png') }}" alt="Anggota Divisi Olahraga" class="profile-pic">
                    <h3>Anggota Divisi Olahraga</h3>
                    <p>Immanuel Hutagalung</p>
                </div>
            </section>
    </main>
@endsection
