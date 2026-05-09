<?php
$judulHalaman = "Timeline Belajar";
$halamanAktif = "timeline";

function cetakTahun(int $tahun): string {
    if ($tahun == 2026) {
        return '<span style="font-weight:900; color:#ff6b6b; font-size:18px;">' . $tahun . ' (SEKARANG)</span>';
    }
    return '<span>' . $tahun . '</span>';
}

$timeline = array(
    array(
        "tahun" => 2022,
        "judul" => "Masuk SMK Jurusan RPL - Belajar Teori Dari Variabel Sampai Tipe Data",
        "deskripsi" => "Pada awal ini saya masuk SMK dengan jurusan Rekayasa Perangkat Lunak karena saya dari SD sudah menyukai game, komputer, dan juga perangkat lunak, pada tahun ini saya hanya belajar teori teori saja tanpa ada praktik."
    ),
    array(
        "tahun" => 2023,
        "judul" => "SMK kelas 2 - Mulai Belajar HTML, CSS, dan Java",
        "deskripsi" => "Di tahun kedua SMK mulai belajar cara menggunakan HTML, CSS, dan juga Java. disini saya mulai tertarik mendesain website, dan juga pada tahun ini saya pertama kali membuat website walau hanya dari HTML dan CSS."
    ),
    array(
        "tahun" => 2024,
        "judul" => "SMK kelas 3 - Awal Mula Belajar PHP, Database dan Project Akhir (UKK)",
        "deskripsi" => "Pada tahun ketiga ini saya diajari cara menggunakan PHP dan juga database, pada tahun inilah saya mulai tertarik dengan data. Pada akhir kelas 3 SMK ini saya mendapat projek membuat website kasir yang menurut saya lumayan kompleks dan deadline nya selama sebulan, pada awal-awal saya strugle dikarenakan waktu belajarnya masih kurang menurut saya dan sudah di berikan projek yang lumayan kompleks, disini saya melanjutkan belajar secara otodidak bermodal Youtube, AI, dan juga beberapa website dokumentasi tentang web seperti w3schools dan sebagainya."
    ),
    array(
        "tahun" => 2025,
        "judul" => "Kuliah Semester 1 - Memulai Ulang Dari Python",
        "deskripsi" => "Pada tahun ini saya memutuskan untuk lanjut kuliah pada program studi Sistem Informasi, disini saya belajar bahasa pemrograman baru seperti Python pada mata kuliah Algoritma Pemrograman."
    ),
    array(
        "tahun" => 2026,
        "judul" => "Kuliah Semester 2 - Belajar Lebih Dalam Mengenai Pemrograman Berbasis Web",
        "deskripsi" => "Sekarang pada smester 2 saya belajar ulang tentang pemrograman berbasis web, disini saya tidak hanya belajar ulang, ada juga beberapa yang saya tidak ketahui/belum di ajarkan saat SMK."
    ),
    array(
        "tahun" => 2026,
        "Judul" => "Kuliah smester 3",
        "deskripsi" => "sdfghjkl;cvbnm,.wertyuiopvbnm,.wertyuiopkjhgfdsdfghjklbvcvbnm,hgfdf"
    )
);

include "header.php";
?>

        <h1 class="judul-halaman">Timeline Perjalanan Belajar Coding</h1>

        <div class="kartu hijau">
            <p style="font-weight:700; margin-bottom: 5px;">Perjalanan ini menunjukkan:</p>
            <p>Saya yang terjun ke dalam dunia pemrograman dan dimulai dari langkah awal saya sampai sekarang.</p>
            <p style="margin-top: 8px; font-weight:700;">Total ada <?php echo count($timeline); ?> momen penting dalam perjalanan coding saya.</p>
        </div>

        <div class="kartu">
            <h3 style="margin-bottom: 20px; font-size: 18px;">Riwayat Belajar</h3>

            <div class="timeline">
                <?php
                foreach ($timeline as $item) {
                    echo '<div class="timeline-item">';
                    echo '<div class="tahun">' . cetakTahun($item['tahun']) . '</div>';
                    echo '<div class="kartu" style="margin-top: 10px; padding: 15px;">';
                    echo '<h4 style="font-size: 16px; margin-bottom: 5px;">' . $item['judul'] . '</h4>';
                    echo '<p class="deskripsi">' . $item['deskripsi'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="nav-bawah">
            <a href="index.php" class="btn-nav kuning">&larr; Kembali ke Profil</a>
            <a href="blog.php" class="btn-nav">Menuju Blog Developer &rarr;</a>
        </div>

<?php
include "footer.php";
?>
