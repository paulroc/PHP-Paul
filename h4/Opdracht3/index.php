<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=width">
    <title>PHP opdracht</title>
    <style>

    </style>
</head>
<body>

<ul>

    <?php


    echo reverseString("PAUL");

    function reverseString($originalString)
    {
        $stringLength = strlen($originalString);
        $reverseString = " ";
        for ($i = $stringLength - 1; $i >= 0; $i--) {
            $reverseString .= substr($originalString, $i, 1);

        }
        return $reverseString;
    }


    ?>

</ul>

</body>
</html>

