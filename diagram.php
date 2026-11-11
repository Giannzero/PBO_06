<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Diagram Mahasiswa</title>

<style>
    body {
        background: #0b0c0c;
        color: #c5c5ce;
        font-family: "Times New Roman", serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    svg {
        width: 100%;
        max-width: 1000px;
        height: auto;
    }

    .box {
        fill: #101010;
        stroke: #bfc0c8;
        stroke-width: 2.0;
    }

    .line {
        stroke: #d70f0f;
        stroke-width: 1.5;
        fill: none;
    }

    .text {
        fill: #c5c5ce;
        font-size: 18px;
        text-anchor: middle;
    }

    .title {
        font-size: 21px;
        font-weight: bold;
    }

    .separator {
        stroke: #4651a7;
        stroke-width: 1;
    }
</style>
</head>

<body>

<svg viewBox="0 0 1000 750" xmlns="http://www.w3.org/2000/svg">

    <!-- KELAS INDUK -->
    <rect class="box" x="270" y="25" width="460" height="340"/>

    <text class="text title" x="500" y="55">
        Mahasiswa (abstract)
    </text>

    <line class="separator" x1="270" y1="70" x2="730" y2="70"/>

    <text class="text" x="500" y="100">- nim : string</text>
    <text class="text" x="500" y="125">- nama : string</text>
    <text class="text" x="500" y="150">- prodi : string</text>
    <text class="text" x="500" y="175">- semester : int</text>

    <line class="separator" x1="270" y1="190" x2="730" y2="190"/>

    <text class="text" x="500" y="215">+ getNim() : string</text>
    <text class="text" x="500" y="240">+ getNama() : string</text>
    <text class="text" x="500" y="265">+ getProdi() : string</text>
    <text class="text" x="500" y="290">+ getSemester() : int</text>
    <text class="text" x="500" y="315">+ hitungBiaya() : int (abstract)</text>
    <text class="text" x="500" y="340">+ getJenis() : string (abstract)</text>

    <!-- SEGITIGA GENERALISASI -->
    <path d="M500 365 L490 385 L510 385 Z" 
          fill="#dbe1ee" stroke="#bfc0c8" stroke-width="1.5"/>

    <!-- GARIS PEWARISAN -->
    <path class="line" d="M500 385 V415 H250 V450"/>
    <path class="line" d="M500 415 H750 V450"/>

    <!-- KELAS MAHASISWA REGULER -->
    <rect class="box" x="60" y="450" width="380" height="250"/>

    <text class="text title" x="250" y="480">MahasiswaReguler</text>
    <text class="text" x="250" y="505">extends Mahasiswa</text>

    <line class="separator" x1="60" y1="520" x2="440" y2="520"/>

    <text class="text" x="250" y="550">- ukt : int</text>

    <line class="separator" x1="60" y1="580" x2="440" y2="580"/>

    <text class="text" x="250" y="610">+ constructor(...)</text>
    <text class="text" x="250" y="635">+ getUkt() : int</text>
    <text class="text" x="250" y="660">+ hitungBiaya() : int</text>

    <!-- KELAS MAHASISWA BEASISWA -->
    <rect class="box" x="560" y="450" width="380" height="250"/>

    <text class="text title" x="750" y="480">MahasiswaBeasiswa</text>
    <text class="text" x="750" y="505">extends Mahasiswa</text>

    <line class="separator" x1="560" y1="520" x2="940" y2="520"/>

    <text class="text" x="750" y="545">- ukt : int</text>
    <text class="text" x="750" y="570">- potonganPersen : int (0-100)</text>

    <line class="separator" x1="560" y1="580" x2="940" y2="580"/>

    <text class="text" x="750" y="610">+ constructor(...)</text>
    <text class="text" x="750" y="635">+ getUkt() : int</text>
    <text class="text" x="750" y="660">+ getPotonganPersen() : int</text>
    <text class="text" x="750" y="685">+ hitungBiaya() : int</text>

</svg>

</body>
</html>