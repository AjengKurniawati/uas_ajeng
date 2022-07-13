<?php
$koneksi = mysqli_connect('localhost','root','');
$link = mysqli_select_db($koneksi,"uas_ajeng") or die(mysqli_error());
