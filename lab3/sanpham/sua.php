<!DOCTYPE html>
<?php
include '../../common/domain.php';
include '../../common/route-guard.php';
?>

<html>

<head>
     <title> Bài tập 1 - Buổi 3 </title>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
     <link rel="stylesheet" href="../../lab1/bai2.css">
     <style>
          #form-container {
               width: 40%;
          }
     </style>
</head>

<body>
     <div id="wrap">
          <?php
          include('../include_header.php')
          ?>

          <div id="content">
               <div id="form-container">
                    <form action="xl_chinhsua.php" method="post">
                         <?php
                         include '../../common/connection.php';
                         include '../../common/domain.php';

                         $idsp = $_GET['id'];
                         $sql = "SELECT * FROM sanpham WHERE idsp = '$idsp'";
                         $result = $con->query($sql);
                         $sanpham = $result->fetch_assoc();
                         $con->close();
                         ?>
                         <h3>Thêm sản phẩm</h3>
                         <input type="hidden" name="idsp" value="<?php echo $sanpham['idsp']; ?>">
                         <div>
                              <label for="name">Tên sản phẩm</label>
                              <?php echo "<input type='text' name='name' id='name' value='" . $sanpham['tensp'] . "' required>" ?>
                         </div>
                         <div>
                              <label for="detail" style="margin: auto 0;">Chi tiết sản phẩm</label>
                              <textarea name="detail" id="detail" cols="20" rows="10" style="width: 50%;
                            margin-left:auto; padding: 0.3rem;"><?php echo $sanpham['chitietsp']; ?></textarea>
                         </div>
                         <div>
                              <label for="price">Giá sản phẩm</label>
                              <input type="text" name="price" id="price" required style="width: 38%;" value="<?php echo $sanpham['giasp']; ?>">
                              <span style="margin:auto 0;">(VND)</span>
                         </div>
                         <div>
                              <label for="image">Hình đại diện</label>
                              <input type="file" name="image">
                         </div>
                         <div class="button">
                              <button type="submit">Lưu sản phẩm</button>
                              <!-- <button type="reset">Làm lại</button> -->
                         </div>
                    </form>
               </div>
          </div>

          <?php include '../../common/footer.php'; ?>
     </div>
     <!--end div wrap-->
</body>

</html>