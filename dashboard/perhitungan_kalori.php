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
        
        if($pemakan=="NonVegetarian"){
            if(1600<=$TEE<1800){
                ?>
                    <table>
                        <th>Makan Pagi</th>
                        <tr><?php echo"Makanan";?>
                            <td><?php echo"Nasi Putih";?></td>
                            <td><?php echo"Soto Ayam Kombinasi";?></td>
                            <td><?php echo"Udang Rebus";?></td>
                            <td><?php echo"Susu";?></td>
                        </tr>
                        <tr><?php echo"Berat";?>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"250 ml";?></td>
                            <td><?php echo"Jumlah";?></td>
                        </tr>
                        <tr><?php echo"Kalori";?>
                            <td><?php echo"175";?></td>
                            <td><?php echo"95";?></td>
                            <td><?php echo"91";?></td>
                            <td><?php echo"185";?></td>
                            <td><?php echo"546";?></td>
                        </tr>
                    </table>
                    <table>
                        <th>Makan Siang</th>
                        <tr><?php echo"Makanan";?>
                            <td><?php echo"Nasi Putih";?></td>
                            <td><?php echo"Tumis Buncis";?></td>
                            <td><?php echo"Tahu";?></td>
                            <td><?php echo"Telur Mata Sapi";?></td>
                            <td><?php echo"Daging Sapi";?></td>
                            <td><?php echo"Pisang";?></td>
                        </tr>
                        <tr><?php echo"Berat";?>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"60 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"125 gram";?></td>
                            <td><?php echo"Jumlah";?></td>
                        </tr>
                        <tr><?php echo"Kalori";?>
                            <td><?php echo"175";?></td>
                            <td><?php echo"52";?></td>
                            <td><?php echo"147";?></td>
                            <td><?php echo"110";?></td>
                            <td><?php echo"180";?></td>
                            <td><?php echo"120";?></td>
                            <td><?php echo"784";?></td>
                        </tr>
                    </table>
                    <table>
                        <th>Makan Malam</th>
                        <tr><?php echo"Makanan";?>
                            <td><?php echo"Sup Jagung Rebus";?></td>
                            <td><?php echo"Telur Rebus";?></td>
                            <td><?php echo"Teh";?></td>
                            <td><?php echo"Apel";?></td>
                        </tr>
                        <tr><?php echo"Berat";?>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"60 gram";?></td>
                            <td><?php echo"75 gram";?></td>
                            <td><?php echo"160 gram";?></td>
                            <td><?php echo"Jumlah";?></td>
                        </tr>
                        <tr><?php echo"Kalori";?>
                            <td><?php echo"113";?></td>
                            <td><?php echo"97";?></td>
                            <td><?php echo"30";?></td>
                            <td><?php echo"92";?></td>
                            <td><?php echo"332";?></td>
                            
                        </tr>
                    </table>
                <?php
            }
            if(1800<=$TEE<2000){
                ?>
                    <table>
                        <th>Makan Pagi</th>
                        <tr><?php echo"Makanan";?></tr>
                            <td><?php echo"Nasi Putih";?></td>
                            <td><?php echo"Soto Ayam Kombinasi";?></td>
                            <td><?php echo"Udang Rebus";?></td>
                            <td><?php echo"Susu";?></td>
                        </tr>
                        <tr><?php echo"Berat";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"100 gram";?></td>
                            <td><?php echo"250 ml";?></td>
                            <td><?php echo"Jumlah";?></td>
                        </tr>
                        <tr><?php echo"Kalori";?></td>
                            <td><?php echo"175";?></td>
                            <td><?php echo"95";?></td>
                            <td><?php echo"91";?></td>
                            <td><?php echo"185";?></td>
                            <td><?php echo"546";?></td>
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
    }
}

?>