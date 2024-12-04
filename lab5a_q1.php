<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nurfarisha binti Kamarrudin";
        $matric_number = "AI220232";
        $course = "Computer Science (Information Security)";
        $year_of_study = "3";
        $address = "1492 Jalan 2/11, Taman Tuanku Jaafar, 
        71450 Sungai Gadut, Negeri Sembilan";
    ?>

    <table border="1" cellpadding="10">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
