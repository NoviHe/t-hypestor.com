<?php
ob_start();
session_start();
if (!isset($_SESSION['sign-in'])) {
    header('location:main?pg=sign-in');
}
include "../config.php";

if (isset($_POST['id_barang'])) {
    $id_barang = $_POST['id_barang'];
    if ($id_barang !== "") {
        $query = mysqli_query($koneksi, "SELECT * FROM db_inventori WHERE id = '$id_barang'");
        $datas = array();
        while ($record = mysqli_fetch_array($query)) {
            array_push($datas, $record);
        }
        $data = [
            'id_barang' => $datas[0]['id'],
            'nama_barang' => $datas[0]['produk'],
            'stok' => $datas[0]['stok'],
        ];
    } else {
        $data = [
            'id_barang' => "",
            'nama_barang' => "",
            'stok' => ""
        ];
    }
    echo json_encode($data);
} elseif (isset($_POST['produk'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM db_inventori");
    $list = array();
    while ($record = mysqli_fetch_array($query)) {
        array_push($list, $record);
    }
    $data = array();
    $no = 0;
    foreach ($list as $li) {
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = '<a class="text-danger" href="#" onclick="selected(' . "'$li[id]'" . ')" style="text-decoration:none; font-weight:500;">
        ' . $li['id'] . ' </a>';
        $row[] = '<a class="text-black" href="#" onclick="selected(' . "'$li[id]'" . ')" style="text-decoration:none; font-weight:200;">
        ' . $li['produk'] . ' </a>';
        $row[] = $li['stok'];
        $data[] = $row;
    }
    $output = array("data" => $data);
    echo json_encode($output);
} else {
    echo '<script>
    document.location.href = "main?pg=monitoring"
</script>';
}
