// Tunggu sampai semua file ter-load. Dan web berhenti loading.
$(document).ready(function () {
    // Handle ketika form #form_balas_pertanyaan melakukan submit.
    var $form_balas_pertanyaan = $('#form_balas_pertanyaan');
    $form_balas_pertanyaan.on('submit', function (e) {
        // cegah agar website tidak me-load ulang saat mengirim pertanyaan.
        e.preventDefault();

        // Dapatkan variable - variable data untuk dikirimkan ke backend (php).
        var nama = $form_balas_pertanyaan.find('input[name="nama"]').val();
        var pertanyaan = $form_balas_pertanyaan.find('textarea[name="pertanyaan"]').val();
        var data = {
            nama: nama,
            pertanyaan: pertanyaan
        };

        // URL untuk menyimpan data.
        // TODO: Ganti jika mau diubah.
        var url = 'http://localhost/dian/faq/src/question/ajax_save_pertanyaan.php';

        // Kirim data melalui ajax dengan menggunakan library jQuery
        jQuery.ajax({
            method: 'POST',     // method yg digunakan untuk mengirimkan data,
            url:    url,        // url untuk mengirimkan data,
            data:   data        // data yang akan dikirimkan ke backend (php).
        }).done(function(resp) {
            // Fungsi yg akan dipanggil ketika sukses
            // Tambahkan data yg selesai ke list jawaban
            resp = JSON.parse(resp);
            var $daftar_jawaban = $('#daftar-jawaban');
            var newDiv = '<div class="jawaban">' +
                        '<li><b>' + resp.data.nama + '</b>' +
                        '&nbsp;' + resp.data.pertanyaan + '</li>' +
                        '</div>';
            $daftar_jawaban.append(newDiv);
        }).fail(function(resp) {
            // Fungsi yg akan dipanggil ketika gagal
            // Beri tahu pengguna ketika gagal.
        }).done(function() {
            // Fungsi yg selalu dipanggil di akhir pengiriman data ...
            // ... digunakan untuk membersihkan input komentar
        });
    });
});
