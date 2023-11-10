<?php
$listSV = array(
    array(
        'name' => 'Hieu',
        'masv' => 'ph001',
        'point' => 9
    ),
    array(
        'name' => 'Duong',
        'masv' => 'ph002',
        'point' => 4
    ),
    array(
        'name' => 'Cuong',
        'masv' => 'ph003',
        'point' => 2
    ),
    array(
        'name' => 'Hao',
        'masv' => 'ph004',
        'point' => 3
    ),

);
function getStatus($point){
    if($point >=5){
        return 'Pass';
    }
    else{
        return 'Fail';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table tr th {
        border-bottom: 3px solid red;
        padding: 10px 20px;
    }

    table tr td {
        border-bottom: 1px solid red;
        padding: 10px 20px;
    }
</style>

<body>
    <h1>Danh sach sinh vien</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Ma SV</th>
            <th>Point</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($listSV as $sv) {
 
        ?>
        <tr>
            <td>
                <?php echo $sv['name'] ?>
            </td>
            <td>
                <?php echo $sv['masv'] ?>
            </td>
            <td>
                <?php echo $sv['point'] ?>
            </td>
            <td>
                <?php echo getStatus($sv['point']) ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>