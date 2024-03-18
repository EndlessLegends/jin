<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ELISHA</title>
</head>
<body>
<!-- 인트로 시작 -->
<?php
// 이미지의 너비와 높이 정의
$width = 200;
$height = 200;

// 이미지 생성
$image = imagecreatetruecolor($width, $height);

// RGB 값으로 이미지를 채우기
for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        // 임의의 RGB 값 생성
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);

        // RGB 값을 이용하여 픽셀 색상 생성
        $color = imagecolorallocate($image, $red, $green, $blue);

        // 픽셀 색상 설정
        imagesetpixel($image, $x, $y, $color);
    }
}

// 헤더 설정 (이미지 출력을 위해 필요)
header('Content-Type: image/png');

// 이미지 출력
imagepng($image);

// 이미지 리소스 해제
imagedestroy($image);
?>

</body>
</html>
