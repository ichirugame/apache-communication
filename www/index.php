<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>通信カウント</title>
</head>
<body>
    <?php
    $size = file_get_contents('gb.txt');
    ?>
    <p>現在の通信量</p>
    <?php
    echo byte_format($size, 2, true);
    function byte_format($size, $dec=-1, $separate=false){
        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
        $digits = ($size == 0) ? 0 : floor( log($size, 1024) );
        $over = false;
        $max_digit = count($units) -1 ;
        if($digits == 0){
            $num = $size;
        } else if(!isset($units[$digits])) {
            $num = $size / (pow(1024, $max_digit));
            $over = true;
        } else {
            $num = $size / (pow(1024, $digits));
        }

        if($dec > -1 && $digits > 0) $num = sprintf("%.{$dec}f", $num);
        if($separate && $digits > 0) $num = number_format($num, $dec);
        return ($over) ? $num . $units[$max_digit] : $num . $units[$digits];
    }
    ?>
</body>
</html>