<?php
    $id = $_POST['idsp'];
    include '../common/connection.php';
    $sql = "SELECT * FROM sanpham WHERE idsp = $id";
    $result = $con->query($sql)->fetch_assoc();
    
    echo '<hr>
        <div id="detail-container">
            <div id="detail-image">
                <img src="'. $result['hinhanhsp'] .'" alt="'.$result['tensp'] .'">
            </div>
            <div id="detail-info">
                <ul>
                    <li><p>Ten: '.$result['tensp'] .'</p></li>
                    <li><p>Gia: '.$result['giasp'] .'</p></li>
                    <li><p>Chi tiet: '.$result['chitietsp'] .'</p></li>
                </ul>
            </div>
        </div>';
    $con->close();
?>