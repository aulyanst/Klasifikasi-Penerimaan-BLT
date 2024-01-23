<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- app/Views/dashboard/index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Include your CSS stylesheet here -->
    <link rel="stylesheet" href="/css/dashboard.css">

    <!-- Include any additional scripts or external script tags here -->
</head>

<body>
    <h3><strong>Klasifikasi Kelayakan Penerimaan BLT di Dadimulyo</strong></h3>
    <h5>Metode Naive-Bayes</h5>
    <img src="<?= base_url('assets/img/blt.png') ?>" alt="Gambar 1" style="display: block; margin: 0 auto; width: 200px; height: 200px;">
    <small> Penerapan Naïve Bayes dalam mengklasifikasi calon penerima Bantuan Langsung Tunai (BLT) di Desa Dadimulyo.
        dibuat untuk memecahkan masalah pada proses penyaluran program bantuan langsung tunai, Belum berjalan secara optimal dan tepat sasaran.
        Adapun tujuan dari pembuatan website ini adalah untuk mengetahui bagaimana penerapan Algoritma Naïve Bayes dalam mengklasifikasi Penerima Bantuan Langsung Tunai di Desa Dadimulyo sehingga memperoleh hasil yang optimal.
        Metode yang digunakan dalam penelitian ini adalah metode klasifikasi Naïve Bayes. Tahapan analisa data dilakukan berdasarkan metode CRISP-DM sedangkan pengujian algoritma dilakukan pada perangkat lunak pyton sebagai perbanding antara hitungan manual dan hitungan perangkat lunak.
        Keuntungan penggunaan Naive Bayes adalah bahwa metode ini hanya membutuhkan jumlah data pelatihan (Training Data) yang kecil untuk menentukan estimasi paremeter yang diperlukan dalam proses pengklasifikasian.
        Naive Bayes sering bekerja jauh lebih baik dalam kebanyakan situasi dunia nyata yang kompleks dari pada yang diharapkan.
    </small>
    <small>
        Dalam teorema bayes, probabilitas atau peluang bersyarat dinyatakan sebagai: 𝐏(𝐇|𝐗) =𝐏"𝐗#𝐇$ . 𝐏(𝐇) 𝐏(𝐗)
        Kemudian dapat disederhanakan menjadi rumus sebagai berikut:

        P(H|X) = P(X|H) P(X)

        Dimana: X : Data dengan class yang belum diketahui H : Hipotesis data X merupakan suatu class spesifik. P(H|X) :Probabilitas hipotesis H berdasar kondisi X (posteriori probability) P(H) : Probabilitas hipotesis H (prior probability) P(X|H) : Probabilitas X berdasar kondisi pada hipotesis H P(X) : Probabilitas dari X

    </s>
</body>

</html>


<?= $this->endSection() ?>