<!DOCTYPE html>

<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">
    <script>
        const imageObject = {
            0: {
                IMAGE_PATHS: "img/hp.jpg",
                LINK: "http://www.hp.com"
            },
            1: {
                IMAGE_PATHS: "img/dell.jpg",
                LINK: "http://www.dell.com"
            },
            2: {
                IMAGE_PATHS: "img/acer.jpg",
                LINK: "http://www.acer.com.vn"
            },
            3: {
                IMAGE_PATHS: "img/asus.jpg",
                LINK: "http://www.vn.asus.com"
            }
        }
        var currentImage = 0;

        function changeImage() {
            const image = document.getElementById('laptopImg');
            const link = document.getElementById('link');
            if (currentImage === 3) {
                currentImage = 0;
            } else {
                currentImage++;
            }
            image.setAttribute('src', imageObject[currentImage].IMAGE_PATHS);
            link.setAttribute('href', imageObject[currentImage].LINK);
        }
        var timer = setInterval(changeImage, 2000);

        function pauseTimer() {
            clearInterval(timer);
        }

        function activateTimer() {
            timer = setInterval(changeImage, 2000);
        }
    </script>
</head>

<body>
    <div id="wrap">
        <?php
        include '../common/title/title_lab4.php';
        include '../common/topnav.php';
        ?>

        <div id="content">
            <h1>Quảng cáo</h1>
            <a href="http://www.hp.com" target="_blank" id="link">
                <img id="laptopImg" name="laptopImg" src="img/hp.jpg" height="300" width="300" 
                onmouseover="pauseTimer()" onmouseout="activateTimer()" />
            </a>
        </div>

        <?php include '../common/footer.php'; ?>
    </div>
</body>

</html>