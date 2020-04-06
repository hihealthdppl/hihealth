<?php

// Action Form

if(isset($_POST['hitung'])){
    
    //Input Form
    
    $bb       = $_POST['bb'];
    $tb       = $_POST['tb'];
    $kelamin  = $_POST['kelamin'];
    $umur     = $_POST['umur'];
    $kegiatan = $_POST['kegiatan'];
    $pemakan  = $_POST['pemakan'];

    /* RUMUS BMR 

    BMR Pria = 88.362 + (13.397 x berat badan [kg]) + (4.799 x tinggi badan [cm]) – (5.677 x umur)
    BMR Wanita = 447.593 + (9.247 x berat badan [kg]) + (3.098 x tinggi badan [cm]) – (4.33 x umur)
    
    Level Aktivitas Fisik
    
    Tidak aktif: TEE = BMR x 1.2
    Cukup aktif, berolahraga 1-3 kali/minggu: TEE = BMR x 1.375
    Aktif, berolahraga 3-5 kali/minggu: TEE = BMR x 1.55
    Sangat aktif, berolahraga 6-7 kali/minggu: TEE = BMR x 1.725

    */

    if($kelamin=="Perempuan"){
        $BMR = 447.593+(9.247*$bb)+(3.098*$tb)-(4.33*$umur);
        if($kegiatan=="TidakAktif"){
            $TEE=$BMR*1.2;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="CukupAktif"){
            $TEE=$BMR*1.375;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="Aktif"){
            $TEE=$BMR*1.55;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="SangatAktif"){
            $TEE=$BMR*1.725;
            $TEEc=$TEE*1000;
        }
        echo"Dengan Berat Badan Sebesar $bb Tinggi Badan Sebesar $tb <br>";
        echo"BMR Anda sebesar $BMR <br>";
        echo"Kebutuhan Kalori Harian Anda Adalah : $TEE kcals atau $TEEc cals <br>";
        echo"<br>";
        echo"Makanan Yang Disarankan Setiap Harinya Untuk Memenuhi Kebutuhan Kalori Anda Adalah : ";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        if($pemakan=="NonVegetarian"){
            if($TEE>=1600 && $TEE < 1800){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Sop Ayam Kombinasi</td>
                            <td>100 gram</td>
                            <td>95</td>
                        </tr>
                        <tr>
                            <td>Udang Rebus</td>
                            <td>100 gram</td>
                            <td>91</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Tumis Buncis</td>
                            <td>100 gram</td>
                            <td>52</td>
                        </tr>
                        <tr>
                            <td>Tahu</td>
                            <td>100 gram</td>
                            <td>147</td>
                        </tr>
                        <tr>
                            <td>Telur Mata Sapi</td>
                            <td>60 gram</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Daging Sapi</td>
                            <td>100 gram</td>
                            <td>180</td>
                        </tr>
                        <tr>
                            <td>Pisang</td>
                            <td>125 gram</td>
                            <td>120</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Sup Jagung Rebus</td>
                            <td>100 gram</td>
                            <td>113</td>
                        </tr>
                        <tr>
                            <td>Telur Rebus</td>
                            <td>60 gram</td>
                            <td>97</td>
                        </tr>
                        <tr>
                            <td>Teh</td>
                            <td>75 gram</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Apel</td>
                            <td>160 gram</td>
                            <td>92</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=1800 && $TEE < 2000){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Soto Ayam</td>
                            <td>100 gram</td>
                            <td>101</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Telur Mata Sapi</td>
                            <td>60 gram</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>150 gram</td>
                            <td>262</td>
                        </tr>
                        <tr>
                            <td>Ikan Tuna</td>
                            <td>120 gram</td>
                            <td>220</td>
                        </tr>
                        <tr>
                            <td>Sop Bayam</td>
                            <td>100 gram</td>
                            <td>156</td>
                        </tr>
                        <tr>
                            <td>Tempe</td>
                            <td>50 gram</td>
                            <td>118</td>
                        </tr>
                        <tr>
                            <td>Melon</td>
                            <td>120 gram</td>
                            <td>46</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Daging Ayam</td>
                            <td>100 gram</td>
                            <td>245.9</td>
                        </tr>
                        <tr>
                            <td>Semangka</td>
                            <td>100 gram</td>
                            <td>30.4</td>
                        </tr>
                        <tr>
                            <td>Lemon Tea</td>
                            <td>200 ml</td>
                            <td>90</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2000 && $TEE < 2200){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Roti Gandum</td>
                            <td>100 gram</td>
                            <td>264.6</td>
                        </tr>
                        <tr>
                            <td>Mentega</td>
                            <td>20 gram</td>
                            <td>143.36</td>
                        </tr>
                        <tr>
                            <td>Telur Mata Sapi</td>
                            <td>60 gram</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Ayam Bakar</td>
                            <td>100 gram</td>
                            <td>129.4</td>
                        </tr>
                        <tr>
                            <td>Sambal Goreng Tempe</td>
                            <td>100 gram</td>
                            <td>232</td>
                        </tr>
                        <tr>
                            <td>Telur Dadar</td>
                            <td>70 gram</td>
                            <td>153.7</td>
                        </tr>
                        <tr>
                            <td>Buah Pir</td>
                            <td>100 gram</td>
                            <td>57.1</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Ikan Lele Goreng</td>
                            <td>90 gram</td>
                            <td>122</td>
                        </tr>
                        <tr>
                            <td>Alpukat</td>
                            <td>100 gram</td>
                            <td>160.1</td>
                        </tr>
                        <tr>
                            <td>Teh</td>
                            <td>75 gram</td>
                            <td>30</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2200 && $TEE < 2600){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>150 gram</td>
                            <td>262</td>
                        </tr>
                        <tr>
                            <td>Daging Ayam</td>
                            <td>100 gram</td>
                            <td>245.9</td>
                        </tr>
                        <tr>
                            <td>Sayur Bening Bayam</td>
                            <td>100 gram</td>
                            <td>36</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Ikan Salmon</td>
                            <td>200 gram</td>
                            <td>416.4</td>
                        </tr>
                        <tr>
                            <td>Tempe Oreg</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Telur Rebus</td>
                            <td>100 gram</td>
                            <td>155.1</td>
                        </tr>
                        <tr>
                            <td>Buah Alpukat</td>
                            <td>100 gram</td>
                            <td>160.1</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Perkedel Kentang</td>
                            <td>50 gram</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>Ati Ayam</td>
                            <td>50 gram</td>
                            <td>98</td>
                        </tr>
                        <tr>
                            <td>Salak</td>
                            <td>150 gram</td>
                            <td>63.6</td>
                        </tr>
                        <tr>
                            <td>Teh / Kopi</td>
                            <td>75 gram</td>
                            <td>30-58</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2600 && $TEE < 3000){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Roti Cokelat</td>
                            <td>100 gram</td>
                            <td>293</td>
                        </tr>
                        <tr>
                            <td>Mentega</td>
                            <td>20 gram</td>
                            <td>143.36</td>
                        </tr>
                        <tr>
                            <td>Omlet</td>
                            <td>100 gram</td>
                            <td>153.7</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Rendang Daging</td>
                            <td>200 gram</td>
                            <td>571</td>
                        </tr>
                        <tr>
                            <td>Tumis Kangkung</td>
                            <td>100 gram</td>
                            <td>98</td>
                        </tr>
                        <tr>
                            <td>Kentang Goreng</td>
                            <td>100 gram</td>
                            <td>311.9</td>
                        </tr>
                        <tr>
                            <td>Jus Jambu Biji</td>
                            <td>250 gram</td>
                            <td>130</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Sayur Lodeh</td>
                            <td>200 gram</td>
                            <td>136</td>
                        </tr>
                        <tr>
                            <td>Tahu</td>
                            <td>100 gram</td>
                            <td>147</td>
                        </tr>
                        <tr>
                            <td>Telur Mata Sapi</td>
                            <td>60 gram</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Teh / Kopi</td>
                            <td>75 gram</td>
                            <td>30-58</td>
                        </tr>
                    </table>
                <?php
            }
        }
    }

    else if($kelamin=="Laki"){
        $BMR = 88.362+(13.397*$bb)+(4.799*$tb)-(5.677*$umur);
        if($kegiatan=="TidakAktif"){
            $TEE=$BMR*1.2;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="CukupAktif"){
            $TEE=$BMR*1.375;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="Aktif"){
            $TEE=$BMR*1.55;
            $TEEc=$TEE*1000;
        }
        if($kegiatan=="SangatAktif"){
            $TEE=$BMR*1.725;
            $TEEc=$TEE*1000;
        }
        echo"Dengan Berat Badan Sebesar $bb Tinggi Badan Sebesar $tb <br>";
        echo"BMR Anda sebesar $BMR <br>";
        echo"Kebutuhan Kalori Harian Anda Adalah : $TEE kcals atau $TEEc cals <br>";
        echo"<br>";
        echo"Makanan Yang Disarankan Setiap Harinya Untuk Memenuhi Kebutuhan Kalori Anda Adalah : ";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        if($pemakan=="NonVegetarian"){
            if($TEE>=1600 && $TEE < 1800){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Telur Rebus</td>
                            <td>60 gram</td>
                            <td>97</td>
                        </tr>
                        <tr>
                            <td>Sayur Bayam</td>
                            <td>100 gram</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Ayam Panggang</td>
                            <td>100 gram</td>
                            <td>164.3</td>
                        </tr>
                        <tr>
                            <td>Tahu</td>
                            <td>100 gram</td>
                            <td>147</td>
                        </tr>
                        <tr>
                            <td>Perkedel Jagung</td>
                            <td>50 gram</td>
                            <td>108</td>
                        </tr>
                        <tr>
                            <td>Sup Telur Puyuh</td>
                            <td>100 gram</td>
                            <td>116</td>
                        </tr>
                        <tr>
                            <td>Pisang</td>
                            <td>125 gram</td>
                            <td>120</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Jagung Rebus</td>
                            <td>100 gram</td>
                            <td>85.6</td>
                        </tr>
                        <tr>
                            <td>Kacang Hijau</td>
                            <td>100 gram</td>
                            <td>102</td>
                        </tr>
                        <tr>
                            <td>Teh</td>
                            <td>75 gram</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Apel</td>
                            <td>160 gram</td>
                            <td>92</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=1800 && $TEE < 2000){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Ikan Kembung</td>
                            <td>80 gram</td>
                            <td>87.65</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Telur Mata Sapi</td>
                            <td>60 gram</td>
                            <td>110</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>150 gram</td>
                            <td>262</td>
                        </tr>
                        <tr>
                            <td>Ayam Pop</td>
                            <td>120 gram</td>
                            <td>265</td>
                        </tr>
                        <tr>
                            <td>Sayur Lodeh</td>
                            <td>100 gram</td>
                            <td>61</td>
                        </tr>
                        <tr>
                            <td>Tempe</td>
                            <td>50 gram</td>
                            <td>118</td>
                        </tr>
                        <tr>
                            <td>Semangka</td>
                            <td>100 gram</td>
                            <td>30</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Merah</td>
                            <td>200 gram</td>
                            <td>222</td>
                        </tr>
                        <tr>
                            <td>Telur Dadar</td>
                            <td>75 gram</td>
                            <td>188</td>
                        </tr>
                        <tr>
                            <td>Alpukat</td>
                            <td>100 gram</td>
                            <td>160.1</td>
                        </tr>
                        <tr>
                            <td>Teh</td>
                            <td>75 gram</td>
                            <td>30</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2000 && $TEE < 2400){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Roti Gandum</td>
                            <td>100 gram</td>
                            <td>264.6</td>
                        </tr>
                        <tr>
                            <td>Mentega</td>
                            <td>20 gram</td>
                            <td>143.36</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Ayam Bakar</td>
                            <td>100 gram</td>
                            <td>194.1</td>
                        </tr>
                        <tr>
                            <td>Tumis Daun Singkong</td>
                            <td>120 gram</td>
                            <td>151</td>
                        </tr>
                        <tr>
                            <td>Daging Empal</td>
                            <td>70 gram</td>
                            <td>147</td>
                        </tr>
                        <tr>
                            <td>Buah Pir</td>
                            <td>100 gram</td>
                            <td>57.1</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Ikan Lele Goreng</td>
                            <td>90 gram</td>
                            <td>122</td>
                        </tr>
                        <tr>
                            <td>Alpukat</td>
                            <td>100 gram</td>
                            <td>160.1</td>
                        </tr>
                        <tr>
                            <td>Teh + 1 sdm Madu</td>
                            <td>75 gram</td>
                            <td>92</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2400 && $TEE < 2700){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Roti Bakar</td>
                            <td>100 gram</td>
                            <td>313.3</td>
                        </tr>
                        <tr>
                            <td>Selai Kacang</td>
                            <td>20 gram</td>
                            <td>117.68</td>
                        </tr>
                        <tr>
                            <td>Mentega</td>
                            <td>20 gram</td>
                            <td>243.36</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Rendang Daging</td>
                            <td>150 gram</td>
                            <td>571</td>
                        </tr>
                        <tr>
                            <td>Sambal Kentang</td>
                            <td>100 gram</td>
                            <td>102</td>
                        </tr>
                        <tr>
                            <td>Telur Rebus</td>
                            <td>100 gram</td>
                            <td>155.1</td>
                        </tr>
                        <tr>
                            <td>Jeruk</td>
                            <td>150 gram</td>
                            <td>47</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Merah</td>
                            <td>100 gram</td>
                            <td>111</td>
                        </tr>
                        <tr>
                            <td>Perkedel Kentang</td>
                            <td>50 gram</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>Ati Ayam</td>
                            <td>50 gram</td>
                            <td>98</td>
                        </tr>
                        <tr>
                            <td>Salak</td>
                            <td>150 gram</td>
                            <td>63.6</td>
                        </tr>
                        <tr>
                            <td>Teh + 1 sdm Madu</td>
                            <td>75 gram</td>
                            <td>92</td>
                        </tr>
                    </table>
                <?php
            }
            if($TEE >=2700 && $TEE < 3100){
                ?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Pagi</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Sop Sapi</td>
                            <td>260 gram</td>
                            <td>227</td>
                        </tr>
                        <tr>
                            <td>Apel</td>
                            <td>160 gram</td>
                            <td>92</td>
                        </tr>
                        <tr>
                            <td>Susu</td>
                            <td>250 ml</td>
                            <td>185</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
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
                            <td>Nasi Putih</td>
                            <td>200 gram</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>Gulai Tunjang</td>
                            <td>160 gram</td>
                            <td>502</td>
                        </tr>
                        <tr>
                            <td>Sambal Goreng Ati Sapi</td>
                            <td>100 gram</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Kentang Goreng</td>
                            <td>100 gram</td>
                            <td>311.9</td>
                        </tr>
                        <tr>
                            <td>Jus Jambu Biji</td>
                            <td>250 gram</td>
                            <td>130</td>
                        </tr>
                    </table>
                    <?php echo"<br>";echo"<br>";?>
                    <table border=1>
                        <tr>
                            <th colspan="3">Makan Sore</th>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Berat</td>
                            <td>Kalori</td>
                        </tr>
                        <tr>
                            <td>Nasi Putih</td>
                            <td>100 gram</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>Ayam Goreng Kecap</td>
                            <td>75 gram</td>
                            <td>358.8</td>
                        </tr>
                        <tr>
                            <td>Tahu Goreng</td>
                            <td>100 gram</td>
                            <td>111</td>
                        </tr>
                        <tr>
                            <td>Teh + 2 sdm Madu</td>
                            <td>75 gram</td>
                            <td>154</td>
                        </tr>
                    </table>
                <?php
            }
        }
    }
}
?>