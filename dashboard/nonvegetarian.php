<?php

    include 'perhitungan_kalori.php';
    echo"hi";

    if($TEE>=1600 && $TEE < 1800){
?>
        <table border=1>
            <tr>
            <th colspan="3"><?php echo "Makan Pagi"?></th>
            </tr>
            <tr>
                            <td><?php echo"Makanan"?></td>
                            <td><?php echo"Berat"?></td>
                            <td><?php echo"Kalori"?></td>
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
        }?>