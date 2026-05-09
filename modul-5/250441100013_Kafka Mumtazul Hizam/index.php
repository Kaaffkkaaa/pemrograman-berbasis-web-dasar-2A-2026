<?php
$judulHalaman = "Profil Developer";
$halamanAktif = "profil";

function tampilkanProfil(array $data): void {
    echo '<div class="pesan-sukses">';
    echo '<h3>Data Berhasil Disimpan!</h3>';
    echo '</div>';

    $framework = explode(",", $data['framework']);
    $jumlahFramework = count($framework);
    echo '<div class="hasil-grid">';

    echo '<div class="hasil-item warna1">';
    echo '<label>Framework / Tools</label>';
    foreach ($framework as $tool) {
        $toolBersih = trim($tool);
        if ($toolBersih != "") {
            echo '<span class="tag">' . htmlspecialchars($toolBersih) . '</span> ';
        }
    }
    echo '</div>';

    if ($jumlahFramework > 2) {
        echo '<div class="hasil-item penuh warna2">';
        echo '<label>Pesan Sistem</label>';
        echo '<span>Skill Anda cukup luas di bidang development!</span>';
        echo '</div>';
    }

    $toolsDipilih = "";
    if (isset($data['tools'])) {
        foreach ($data['tools'] as $t) {
            $toolsDipilih .= htmlspecialchars($t) . " | ";
        }
    }
    if ($toolsDipilih != "") {
        echo '<div class="hasil-item warna3">';
        echo '<label>Tools Penunjang</label>';
        echo '<span>' . rtrim($toolsDipilih, " | ") . '</span>';
        echo '</div>';
    }

    echo '<div class="hasil-item warna4">';
    echo '<label>Minat Bidang</label>';
    echo '<span>' . htmlspecialchars($data['minat']) . '</span>';
    echo '</div>';

    echo '<div class="hasil-item warna5">';
    echo '<label>Level Skill</label>';
    echo '<span>' . htmlspecialchars($data['level']) . '</span>';
    echo '</div>';

    echo '</div>';

    echo '<div class="hasil-pengalaman">';
    echo '<h4>Cerita Pengalaman</h4>';
    echo '<p>' . nl2br(htmlspecialchars($data['pengalaman'])) . '</p>';
    echo '</div>';
}

function tampilkanError(string $pesan): void {
    echo '<div class="pesan-error">' . $pesan . '</div>';
}

$hasilForm = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $framework = isset($_POST['framework']) ? trim($_POST['framework']) : "";
    $pengalaman = isset($_POST['pengalaman']) ? trim($_POST['pengalaman']) : "";
    $minat = isset($_POST['minat']) ? trim($_POST['minat']) : "";
    $level = isset($_POST['level']) ? trim($_POST['level']) : "";

    if ($framework == "" || $pengalaman == "" || $minat == "" || $level == "") {
        $error = "Semua field wajib diisi!";
    } else {
        $dataProfil = array(
            "nama" => "Kafka Mumtazul Hizam",
            "id_dev" => "DEV-250-013",
            "kota" => "Sumenep, 25 Desember 2006",
            "tgl_lahir" => "Sumenep, 25 Desember 2006",
            "email" => "kafkaaa013@gmail.com",
            "wa" => "0812-xxxx-xxxx",
            "framework" => $framework,
            "pengalaman" => $pengalaman,
            "tools" => isset($_POST['tools']) ? $_POST['tools'] : array(),
            "minat" => $minat,
            "level" => $level
        );

        $hasilForm = $dataProfil;
    }
}

include "header.php";
?>

        <h1 class="judul-halaman">Profil Interaktif Developer Pemula</h1>

        <div class="kartu kuning">
            <h3 style="margin-bottom: 15px; font-size: 18px;">Profil Statis</h3>

            <div class="profil-header">
                <div class="profil-avatar">K</div>
                <div>
                    <div class="nama">Kafka Mumtazul Hizam</div>
                    <div class="badge">Future Data Scientist</div>
                </div>
            </div>

            <div class="profil-grid">
                <div class="info-item warna1">
                    <label>ID Developer</label>
                    <span>DEVID-25-013</span>
                </div>
                <div class="info-item warna2">
                    <label>Kota / Tgl Lahir</label>
                    <span>Sumenep, 2006 December 25</span>
                </div>
                <div class="info-item warna3">
                    <label>Email</label>
                    <span>kafkaaa013@gmail.com</span>
                </div>
                <div class="info-item warna4">
                    <label>No. WhatsApp</label>
                    <span>+62 821-3150-6390</span>
                </div>
            </div>
        </div>

        <div class="kartu">
            <h3 style="margin-bottom: 15px; font-size: 18px;">Form Data Developer</h3>

            <?php
            if ($error != "") {
                tampilkanError($error);
            }

            if ($hasilForm != "") {
                tampilkanProfil($hasilForm);
            }
            ?>

            <form method="POST" action="index.php">

                <div class="form-group">
                    <label>Framework / Tools yang Dikuasai (pisahkan dengan koma):</label>
                    <input type="text" name="framework" placeholder="Contoh: Laravel, Bootstrap, PHP, MySQL">
                </div>

                <div class="form-group">
                    <label>Cerita Singkat Pengalaman Coding:</label>
                    <textarea name="pengalaman" placeholder="Tulis pengalaman Anda belajar coding..."></textarea>
                </div>

                <div class="form-group">
                    <label>Tools Penunjang:</label>
                    <div class="form-group-checkbox">
                        <label><input type="checkbox" name="tools[]" value="IDE"> IDE</label>
                        <label><input type="checkbox" name="tools[]" value="GitHub"> GitHub</label>
                        <label><input type="checkbox" name="tools[]" value="DBeaver"> DBeaver</label>
                        <label><input type="checkbox" name="tools[]" value="Server"> Server</label>
                        <label><input type="checkbox" name="tools[]" value="XAMPP"> XAMPP</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Minat Bidang:</label>
                    <div class="form-group-radio">
                        <label><input type="radio" name="minat" value="Data Science"> Data Science</label>
                        <label><input type="radio" name="minat" value="Web Dev"> Web Dev</label>
                        <label><input type="radio" name="minat" value="Game Dev"> Game Dev</label>
                        <label><input type="radio" name="minat" value="Mobile App Dev"> Mobile App Dev</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Tingkat Skill Coding:</label>
                    <select name="level">
                        <option value="">-- Pilih Level Anda --</option>
                        <option value="New">New</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Simpan Profil</button>
            </form>
        </div>

        <div class="nav-bawah">
            <a href="timeline.php" class="btn-nav kuning">Lihat Timeline Belajar &rarr;</a>
        </div>

<?php
include "footer.php";
?>
