<!DOCTYPE html>

<html>

<head>
    <title> Bài tập 1 - Buổi 3 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../../indexstyle.css" media="screen" />
    <link rel="stylesheet" href="../../lab1/bai2.css">

    <script>
        var IMAGE_PATHS = [];
        IMAGE_PATHS[0] = "img/hp.jpg";
        IMAGE_PATHS[1] = "img/dell.jpg";
        IMAGE_PATHS[2] = "img/acer.jpg";
        IMAGE_PATHS[3] = "img/asus.jpg";
        var currentImage = 0;

        function changeSlide(pos) {
            // pos = 1: hien thi file anh tiep theo 
            // pos = -1: hien thi file anh truoc do
            const image = document.getElementById('laptopImg');
            if (pos === 1) {
                if (currentImage == 3) {
                    currentImage = 0;
                } else {
                    currentImage++;
                }
            } else if (pos === -1) {
                if (currentImage == 0) {
                    currentImage = 3;
                } else {
                    currentImage--;
                }
            }
            image.setAttribute('src', IMAGE_PATHS[currentImage]);
            mainform.laptopSel.value = currentImage;
        }

        function chooseSlide(pos) {
            const image = document.getElementById('laptopImg');
            currentImage = parseInt(pos)
            image.setAttribute('src', IMAGE_PATHS[currentImage]);
        }
    </script>
    <style>
        input[type="button"] {
            padding: 5px;
            margin: 10px;
        }
        .center {
            display: flex;
            margin: auto;
            justify-content: center;
        }        
        select {
            padding: 5px;
        }
        input:hover, select:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="wrap">
        <?php
        include '../common/title/title_lab4.php';
        include '../common/topnav.php';
        ?>

        <div id="content">
            <h1>Slide show</h1>

            <form name="mainform">
                <img id="laptopImg" src="img/hp.jpg" height="300" width="300" />
                <br />
                <div class="center">
                    <input type="button" name="previous" value="Previous" onclick="changeSlide(-1)">
                    <input type="button" name="next" value="Next" onclick="changeSlide(1)">
                </div>
                <br />
                <select class="center" name="laptopSel" onchange="chooseSlide(value)">
                    <option value="0">HP</option>
                    <option value="1">Dell</option>
                    <option value="2">Acer</option>
                    <option value="3">Asus</option>
                </select>
            </form>
        </div>

        <?php include '../common/footer.php'; ?>
    </div>
</body>

</html>