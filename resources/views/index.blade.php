@extends('layouts.app')

@section('title')

@section('content')

<div>   
    <section class="body-content">
        <div class="tampilanAwal">
            <div class="box">
                <h1>Welcome to NHKBP Srengseng Sawah</h1>
                <p>Want to know more about us?</p>
                <a href="{{ route('about') }}" class="explore-btn">Explore</a>
            </div>
        </div>
    </section>

<section>
    <div class="aboutNHKBP">
        <h2>About</h2>
        <p>NHKBP (Naposo HKBP) adalah sebuah organisasi yang terdiri dari pemuda-pemuda Kristiani Batak yang berasal dari berbagai jemaat, baik yang berada di dalam negeri maupun di rantau. Organisasi ini bertujuan untuk memperkuat ikatan spiritual dan sosial di antara generasi muda, serta membangun komunitas yang saling mendukung dalam iman dan kehidupan sehari-hari. NHKBP berfokus pada pengembangan karakter, keterampilan, dan kepemimpinan pemuda melalui berbagai kegiatan, seperti seminar, pelatihan, dan ibadah bersama. Dengan semangat kebersamaan dan pengabdian, NHKBP berkomitmen untuk menjadi wadah yang memberdayakan pemuda Batak dalam menghadapi tantangan zaman, sekaligus memperkuat warisan budaya dan nilai-nilai kekristenan di kalangan generasi muda.</p>
        <div class="visi">
            <h2>Visi</h2>
            <p>Mewujudkan satu keluarga Naposobulung yang penuh sukacita, berakar, dan bertumbuh didalam Kristus, serta menjadi berkat untuk sekitar</p>
            <h2>Misi</h2>
            <ul class="misi">
                <li>Menyediakan komunitas yang ramah dan suportif bagi orang-orang dari semua latar belakang.</li>
                <li>Ikut dalam kegiatan penjangkauan yang memberikan dampak positif bagi masyarakat sekitar.</li>
                <li>Memberikan kesempatan bagi para pemuda untuk bertumbuh dalam spiritual.</li>
                <li>Menghidupi ajaran Kristus dalam kehidupan sehari-hari.</li>
            </ul>
        </div>
    </div>
</section>
</div>
@endsection
