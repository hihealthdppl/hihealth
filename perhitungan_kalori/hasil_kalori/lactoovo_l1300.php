<?php
function pilih($pilihan)
{
    if ($pilihan == "pagi") {
        echo pagi();
    }
    if ($pilihan == "siang") {
        echo siang();
    }
    if ($pilihan == "malam") {
        echo malam();
    }
}
function pagi()
{
?>
    <table border=1 align="center">
        <tr>
            <td><b>Makanan</b></td>
            <td><b>Berat</b></td>
            <td><b>Kalori</b></td>
        </tr>
        <tr>
            <td>Oatmeal</td>
            <td>250 gram</td>
            <td>160</td>
        </tr>
        <tr>
            <td>Keju</td>
            <td>30 gram</td>
            <td>90</td>
        </tr>
        <tr>
            <td>Buah Apel</td>
            <td>160 gram</td>
            <td>92</td>
        </tr>
        <tr>
            <td>Susu</td>
            <td>250 ml</td>
            <td>185</td>
        </tr>
    </table>
<?php
}

function siang()
{
?>
    <table border=1>
        <tr>
            <th colspan="3">Makan Siang</th>
        </tr>
        <tr>
            <td>Makanan</td>
            <td>Berat</td>
            <td>Kalori</td>
        </tr>
        <tr>
            <td>Urap</td>
            <td>100 gram</td>
            <td>112</td>
        </tr>
        <tr>
            <td>Nasi Merah</td>
            <td>150 gram</td>
            <td>166.5</td>
        </tr>
        <tr>
            <td>Telur</td>
            <td>60 gram</td>
            <td>110</td>
        </tr>
        <tr>
            <td>Teh Hijau</td>
            <td>180 ml</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Buah Alpukat</td>
            <td>100 gram</td>
            <td>160.1</td>
        </tr>

    </table>
<?php
}
function malam()
{
?>
    <table border=1>
        <tr>
            <th colspan="3">Makan Malam</th>
        </tr>
        <tr>
            <td>Makanan</td>
            <td>Berat</td>
            <td>Kalori</td>
        </tr>
        <tr>
            <td>Soup Krim Jagung</td>
            <td>1 porsi</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Mayonaise</td>
            <td>2 sdm</td>
            <td>114</td>
        </tr>
        <tr>
            <td>Yogurt</td>
            <td>100 gram</td>
            <td>58.8</td>
        </tr>

    </table>
<?php
}

?>