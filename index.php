<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางกำลังสองของตัวเลข</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>ตารางกำลังสองของตัวเลข 1-10</h1>
        
        <?php
        echo "<table class='styled-table'>";
        echo "<tr>";
        echo "<th>ตัวเลข</th>";
        echo "<th>กำลังสอง</th>";
        echo "<th>สมการ</th>";
        echo "</tr>";
        
        $i = 1;
        while ($i <= 10) {
            echo "<tr>";
            $ans = $i**2;
            echo "<td>$i</td>";
            echo "<td class='result'>$ans</td>";
            echo "<td>$i<sup>2</sup> = $ans</td>";
            $i++;
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>