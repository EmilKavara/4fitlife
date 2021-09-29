<?php
include "config.php";
?>

<!doctype html>
<html>
<head>
    <title>Distributori</title>
    <link href='index2.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='script.js' type='text/javascript'></script>
</head>
<body>

<h2>Unesi distributera</h2>
<form name="form1" action="new.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="form_group">
            <label>Ime i Prezime:</label>
            <input type="text" name="txtName" value="" required />
        </div>
        <div class="form_group">
            <label>Email</label>
            <input type="text" name="txtEmail" value="" required />
        </div>
        <div class="form_group">
            <label>Telefon:</label>
            <input type="number" name="txtPhoneNum" value="" required />
        </div>
        <div class="form_group">
            <label>Kod člana:</label>
            <input type="text" name="txtCode" value="" required />
        </div>
    </div>
    <button type="submit" class="btn">Submit</button>
</form>

<div class='container'>

    <table width='70%' border='0'>
        <tr>
            <th width='10%'>User Id</th>
            <th width='40%'>Name</th>
            <th width='40%'>Email</th>
            <th width='40%'>Phone Number</th>
            <th width='40%'>Code</th>
        </tr>
        <?php
        $query = "select * from tabela";
        $result = mysqli_query($con,$query);
        $count = 1;
        while($row = mysqli_fetch_array($result) ){
            $id = $row['userId'];
            $name = $row['name'];
            $email = $row['email'];
            $code = $row['code'];
            $phoneNum = $row['phoneNum'];
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td>
                    <div class='edit' > <?php echo $name; ?></div>
                    <input type='text' class='txtedit' value='<?php echo $name; ?>' id='name_<?php echo $id; ?>' >
                </td>
                <td>
                    <div class='edit' ><?php echo $email; ?> </div>
                    <input type='text' class='txtedit' value='<?php echo $email; ?>' id='email_<?php echo $id; ?>' >
                </td>
                <td>
                    <div class='edit' > <?php echo $phoneNum; ?></div>
                    <input type='text' class='txtedit' value='<?php echo $phoneNum; ?>' id='phoneNum_<?php echo $id; ?>' >
                </td>
                <td>
                    <div class='edit' > <?php echo $code; ?></div>
                    <input type='text' class='txtedit' value='<?php echo $code; ?>' id='code_<?php echo $id; ?>' >
                </td>
                <td>
                    <button class="delButton" id=<?php echo $id;?>>Delete</button>
                </td>
            </tr>

            <?php
            $count ++;
        }
        ?>
    </table>

</div>

<script>
    $('.delButton').click(function(){
        var tr = $(this).closest('tr'),
            del_id = $(this).attr('id');

        $.ajax({
            url: "delete.php?id="+ del_id,
            cache: false,
            success:function(result){
                tr.fadeOut(1000, function(){
                    $(this).remove();
                });
            }
        });
    });
</script>
</body>
</html>