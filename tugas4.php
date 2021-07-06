<?php
  $harga = 8000;
  $jual = 7500;
  $ekor = 300;
  $hasil = ($harga-$jual)/300;

  echo"
    Harga Beli = Rp. $harga  <br>
    Harga Jual = Rp. $jual <br>
    Keuntungan = Rp. $ekor <br>
    Berapa Jumlah kambing yang dibeli? <br>
    Jawaban : <b>$hasil</b> ekor
    <br>==========================<br>
  ";

  $air = 523;
  $pakai = 8891;
  $hasil2 = $pakai / $air;

  echo "
    Jumlah Saluran = $air <br>
    Jumlah Terpakai = $pakai <br>
    Rata-rata Pemakaian = ... ? <br>
    Jawaban : <b>$hasil2</b> liter/keluarga
  ";
?>
