<?php
function save($id,$email){
    include("connection.php");
    $strSQL11 = "SELECT * FROM `student_id` WHERE `user` = '$id'";
	$objQuery11 = mysqli_query($con,$strSQL11);
    $objResult11 = mysqli_fetch_array($objQuery11);

    if(!$objResult11){
        
        $strSQL = "INSERT INTO `student_id` (`id_user`, `user`, `email`) VALUES (NULL, '$id', '$email');";
        $objQuery = mysqli_query($con,$strSQL);

        if($objQuery)
        {
            ?><script type="text/javascript">
                Swal.fire(
                'ไอเวร',
                'บันทึกข้อมูลเรียบร้อยแล้ว!!',
                'success'
                ).then(function() {window.location = "";})
            </script><?php
        }
        else
        {
            echo "Error Save [".$strSQL."]";
        }
        
    }else{
        $id_user = $objResult11["id_user"];
        
        $strSQL = "UPDATE `student_id` SET `email` = '$email' WHERE `id_user` = $id_user";
        $objQuery = mysqli_query($con,$strSQL);

        if($objQuery)
        {
            ?><script type="text/javascript">
                Swal.fire(
                'ไอเวร',
                'บันทึกข้อมูลเรียบร้อยแล้ว!!',
                'success'
                ).then(function() {window.location = "";})
            </script><?php
        }
        else
        {
            echo "Error Save [".$strSQL."]";
        }
        
    }
    mysqli_close($con);
}
?>