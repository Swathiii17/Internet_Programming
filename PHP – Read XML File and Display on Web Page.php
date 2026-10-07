<?php

$xmlData = '
<students>

    <student>
        <name>Esther</name>
        <course>Computer Science</course>
    </student>

    <student>
        <name>John</name>
        <course>Information Technology</course>
    </student>

</students>
';

$xml = simplexml_load_string($xmlData);

?>

<!DOCTYPE html>
<html>

<head>
    <title>XML Data</title>

    <style>
        table {
            border-collapse: collapse;
            width: 500px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background: lightgray;
        }
    </style>
</head>

<body>

<h2>Student Details from XML</h2>

<table>

<tr>
    <th>Name</th>
    <th>Course</th>
</tr>

<?php

foreach($xml->student as $student) {

?>

<tr>

<td>
<?php echo $student->name; ?>
</td>

<td>
<?php echo $student->course; ?>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>
