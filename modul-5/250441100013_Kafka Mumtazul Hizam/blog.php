<?php
$judulHalaman = "Blog Developer";
$halamanAktif = "blog";

$artikel = array(
    array(
        "id" => 1,
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "10 Januari 2022",
        "isi" => "Awalnya saya tidak tahu sama sekali apa itu HTML. Waktu pertama kali buka file .html dan melihat tag-tag seperti h1, p, dan div, saya bingung. Tapi setelah belajar selama beberapa minggu saya mulai paham bahwa HTML itu ibarat kerangka sebuah bangunan. Tanpa HTML, tidak ada web. Tugas pertama saya waktu itu cuma halaman biodata sederhana dengan foto dan tabel. Pada saat itu saya merasa senang dengan hasil saya meskipun masih berantakan.",
        "gambar" => "img/blog_html.png"
    ),
    array(
        "id" => 2,
        "judul" => "Error Pertama: Undefined Variable",
        "tanggal" => "5 September 2024",
        "isi" => "Saya tidak akan lupa error pertama saya. Program tidak jalan, padahal tidak ada tulisan merah. Setelah dicek lama, ternyata hanya karena nama variabel berbeda, saya menulis $ nama, tapi memanggil $ nana. Sejak itu saya sadar, hal kecil seperti itu bisa bikin program gagal total, jadi saya selalu cek ulang kode sebelum dijalankan. dan menurut saya jangan lupa untuk melihat ke atas (melihat kode di atas)",
        "gambar" => "img/blog_error.png"
    ),
    array(
        "id" => 3,
        "judul" => "Proyek Pertama dengan PHP",
        "tanggal" => "20 Februari 2024",
        "isi" => "Proyek pertama saya adalah membuat website kasir sederhana pakai HTML, CSS, JavaScript dan PHP. Di sini saya belajar cara memisahkan header, footer, dan konten ke file terpisah. Pada proyek ini saya belajar mandiri karena menurut saya penjelasan dari guru masih kurang. Pada website kasir ini lumayan kompleks, bisa CRUD, search bar dan sebagainya.",
        "gambar" => "img/blog_proyek.png"
    )
);

$kutipan = array(
    '"Error itu guru terbaik. Dari error kita jadi lebih paham." - Pengalaman Pribadi',
    '“Jangan cuma copy–paste dari AI, pahami dulu kodenya.” - Andrej Karpathy',
    '“Debugging itu separuh dari ngoding—kadang malah lebih.” - Brian Kernighan',
    '“Kode yang bagus itu bukan yang rumit, tapi yang mudah dipahami dan dirawat.” - Robert C. Martin',
    '“Versi pertama tidak harus sempurna, yang penting jalan dulu.” - Reid Hoffman',
    '“Belajar coding itu maraton, bukan sprint.” - David Heinemeier Hansson'
);

$kutipanAcak = $kutipan[array_rand($kutipan)];

$idDipilih = isset($_GET['id']) ? intval($_GET['id']) : 0;

$artikelDipilih = null;
foreach ($artikel as $a) {
    if ($a['id'] == $idDipilih) {
        $artikelDipilih = $a;
        break;
    }
}

include "header.php";
?>

<h1 class="judul-halaman">Blog Reflektif Developer</h1>

<div class="kutipan">
    <?php echo $kutipanAcak; ?>
</div>

<div class="blog-wrapper">

    <div class="blog-sidebar">
        <div class="kartu ungu">
            <h3 style="margin-bottom: 15px; font-size: 16px;">Daftar Artikel</h3>
            <ul class="daftar-artikel">
                <?php
                foreach ($artikel as $a) {
                    $kelas = "";
                    if ($a['id'] == $idDipilih) {
                        $kelas = "aktif";
                    }
                    echo '<li><a href="blog.php?id=' . $a['id'] . '" class="' . $kelas . '">';
                    echo $a['judul'];
                    echo '</a></li>';
                }
                ?>
            </ul>
        </div>

        <div class="kartu referensi-tetap">
            <h3 style="margin-bottom: 10px; font-size: 16px;">Referensi Belajar</h3>
            <p style="margin-bottom: 12px; font-size: 13px;">Kumpulan sumber belajar pemrograman web yang berguna:</p>
            <a href="https://www.w3schools.com/" target="_blank" class="link-referensi">
                Referensi Tambahan &rarr;
            </a>
        </div>
    </div>

    <div class="blog-konten">
        <?php
        if ($artikelDipilih != null) {
            echo '<div class="artikel-detail">';
            echo '<h2>' . htmlspecialchars($artikelDipilih['judul']) . '</h2>';
            echo '<p class="tanggal">Diposting: ' . $artikelDipilih['tanggal'] . '</p>';
            echo '<p>' . $artikelDipilih['isi'] . '</p>';
            echo '<img src="' . htmlspecialchars($artikelDipilih['gambar']) . '" alt="Ilustrasi artikel">';
            echo '</div>';
        } else {
            echo '<div class="kartu kuning">';
            echo '<h3 style="margin-bottom: 10px;">Silakan Pilih Artikel</h3>';
            echo '<p>Klik salah satu judul artikel di samping untuk membaca cerita pengalaman coding saya.</p>';
            echo '</div>';
        }
        ?>
    </div>

    <div style="clear:both;"></div>

</div>

<div class="nav-bawah">
    <a href="timeline.php" class="btn-nav kuning">&larr; Kembali ke Timeline</a>
    <a href="index.php" class="btn-nav">Ke Profil &rarr;</a>
</div>

<?php
include "footer.php";
?>