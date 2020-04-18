<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiHealth</title>
</head>
<body>
    <h1 align="center">Menghitung Kalori </h1>
    <form method="POST" action="perhitungan_kalori.php">
        <table align="center">
            <br><br>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                    <select name="kelamin">
                        <option value="Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Pemakan</td>
                <td> : </td>
                <td>
                    <select name="pemakan">
                        <option value="LactoVegetarian">Lacto Vegetarian (Tidak makan daging,ikan,unggas dan telur namun masih mengonsumsi produk yang dihasilkan dari susu)</option>
                        <option value="OvoVegetarian">Ovo Vegetarian (Tidak mengonsumsi daging,ikan,unggas dan produk susu, namun masih memperbolehkan konsumsi telur)</option>
                        <option value="NonVegetarian">Non Vegetarian</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kegiatan</td>
                <td> : </td>
                <td>
                    <select name="kegiatan">
                        <option value="TidakAktif">Tidak Aktif</option>
                        <option value="CukupAktif">Cukup Aktif (Olahraga 1-3 kali/minggu)</option>
                        <option value="Aktif">Aktif (Olahraga 3-5 kali/minggu)</option>
                        <option value="SangatAktif">Sangat Aktif (Olahraga 6-7 kali/minggu)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td> : </td>
                <td>
                    <input type="text" name="umur">
                </td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td> : </td>
                <td>
                    <input type="text" name="bb">
                </td>
            </tr>
            <tr>
                <td>Tinggi Badan ( cm )</td>
                <td> : </td>
                <td>
                    <input type="text" name="tb">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="hitung" value="Hitung Kalori">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
</style>
</head>
