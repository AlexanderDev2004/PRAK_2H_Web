<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
</head>
<body>

<form id="myForm">
    <label for="buah">Pilih Buah:</label>
    <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
    </select><br><br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br><br>

    <label>Pilih Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br><br>

    <input type="submit" value="Submit">
</form>

<div id="hasil">
    <!-- Hasil akan ditampilkan di sini -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault(); // Mencegah pengiriman form secara default

        // Mengumpulkan data form
        var formData = $(this).serialize();

        // Mengirim data ke server PHP
        $.ajax({
            url: 'proses_lanjut.php', // Ganti dengan nama file PHP yang sesuai
            type: 'POST',
            data: formData,
            success: function(response) {
                // Tampilkan hasil dari server di div "hasil"
                $('#hasil').html(response);
            }
        });
    });
});
</script>

</body>
</html>
