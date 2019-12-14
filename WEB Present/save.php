<?php
function save($id,$email){
    include("connection.php");
    $strSQL11 = "SELECT * FROM `student_id` WHERE `user` = '$id'";
	$objQuery11 = mysqli_query($con,$strSQL11);
    $objResult11 = mysqli_fetch_array($objQuery11);
// หาคอลลัมในSQL
    if(!$objResult11){//เช็คว่าไม่อยู่ในฐานข้อมูล

        $strSQL = "INSERT INTO `student_id` (`id_user`, `user`, `email`) VALUES (NULL, '$id', '$email');";
        $objQuery = mysqli_query($con,$strSQL);//เพิ่มฐานข้อมูล

        if($objQuery)//ถ้าอยู่ในฐานข้อมูล
        {
            ?><script type="text/javascript">
                Swal.fire(
                'บันทึกข้อมูลเรียบร้อยแล้ว!!',
                'success'
                ).then(function() {window.location = "";})//เเจ้งว่าทำงานเสร็จ
            </script><?php
        }
        else
        {
            echo "Error Save [".$strSQL."]";//เเจ้งerror
        }
        
    }else{//ถ้าคลอลัมไอดีอยู่ในฐานข้อมูลเเล้ว
        $id_user = $objResult11["id_user"];
        
        $strSQL = "UPDATE `student_id` SET `email` = '$email' WHERE `id_user` = $id_user";
        $objQuery = mysqli_query($con,$strSQL);
        //จะเปลี่ยนemailอย่างเดี่ยว
        if($objQuery)
        {
            ?><script type="text/javascript">
                Swal.fire(
                'ไอเวร',
                'บันทึกข้อมูลเรียบร้อยแล้ว!!',
                'success'
                ).then(function() {window.location = "";})//เเจ้วว่าเสร็จสิ้น
            </script><?php
        }
        else
        {
            echo "Error Save [".$strSQL."]";//เเจ้งerror
        }
        
    }
    mysqli_close($con);
}
?>