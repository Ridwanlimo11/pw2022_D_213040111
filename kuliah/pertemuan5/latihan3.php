<?php 
/// Representasi Data Mahasiswa

$mahasiswa = [
    ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ad.id", "Teknik Informatika"],
    ["Doddy Ferdiansyah", "103040001", "doddy@gmail.com", "Teknik Mesin"],
    ["Reza Dwi Pranata Iskandar", "213040139" ,"rdp@gmail.com", "Teknik Informatika"],
    ["Wildan Nasrulloh Reliyanto", "213040140", "wildannasrulloh321@gmail.com", "Teknik Informatika"]
    
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
	<ul>
        <li>Nama : <?php echo $mhs[0];?></li>
        <li>NPM : <?php echo $mhs[1]; ?></li>
        <li>Email : <?php echo $mhs[2]; ?></li>
        <li>Jurusan : <?php echo $mhs[3];?></li>
    </ul>

<?php } ?>