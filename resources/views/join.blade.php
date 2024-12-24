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
            <h2>Join</h2>
            <p>Penasaran dengan kegiatan-kegiatan kami kedepannya? Rindu dengar firman Tuhan? Ingin bertemu dan berkenalan dengan saudara seiman? Yuk segera join Naposo HKBP Srengseng Sawah</p>
            <div class="join-form-section">
                <h2>Form Pendaftaran</h2>
                <form id="komen_form">
                    <label for="full-name">Nama Lengkap:</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Masukkan Nama Lengkap">
    
                    <label>Jenis Kelamin:</label>
                    <div class="gender-options">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Laki-laki</label>
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Perempuan</label>
                    </div>
    
                    <label for="birth-date">Tanggal Lahir:</label>
                    <input type="date" id="birth-date" name="birth-date" required>
    
                    <label for="church-origin">Asal Gereja:</label>
                    <input type="text" id="church-origin" name="church-origin" required placeholder="Masukkan Nama Gereja">
    
                    <label for="phone-number">Nomor Telepon:</label>
                    <input type="tel" id="phone-number" name="phone-number" required placeholder="Masukkan Nomor Telepon">
    
                    <input type="submit" value="Daftar">
                </form>
            </div>
        </section>
    </main>

@endsection
