<script>
function kirimWhatsapp() {

    let namaLoket = document.getElementById('nama_loket').value;
    let pemilik = document.getElementById('pemilik').value;
    let ktp = document.getElementById('ktp').value;
    let hp = document.getElementById('hp').value;
    let alamat = document.getElementById('alamat').value;
    let email = document.getElementById('email').value;
    let aplikasi = document.getElementById('aplikasi').value;
    let fee = document.getElementById('fee').value;
    let rekening = document.getElementById('rekening').value;
    let bank = document.getElementById('bank').value;
    let pemilikRekening = document.getElementById('pemilik_rekening').value;

    let pesan =
`Halo Admin Cult Mitra

Saya ingin mendaftar sebagai Agen PPOB.

Nama Loket : ${namaLoket}
Nama Pemilik : ${pemilik}
No KTP : ${ktp}
Alamat : ${alamat}
No HP : ${hp}
Email : ${email}
Aplikasi : ${aplikasi}
Fee Masuk Ke : ${fee}
No Rekening : ${rekening}
Nama Bank : ${bank}
Pemilik Rekening : ${pemilikRekening}

Mohon diproses.
Terima kasih.`;

    let url =
`https://wa.me/6285173231909?text=${encodeURIComponent(pesan)}`;

    window.open(url, '_blank');
}
</script>