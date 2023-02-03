<?php 
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) VALUES ('$tensp' , '$giasp' , '$hinh', '$mota' , '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "DELETE FROM WHERE id=" .$id;
    pdo_execute($sql);
}
function loadall_sanpham( $kyw,$iddm){
    $sql = "SELECT * FROM sanpham WHERE 1 " ; 
    if($kyw != "" ){
        $sql .= "  and name like ' % ".$kyw." % ' "; 
    }
    if($iddm > 0 ){
        $sql .= "  and iddm = ' ".$iddm." ' "; 
    }
    $sql .="  ORDER BY id DESC "; //nối chuỗi .= cachkhoangdoi  "
    $listsanpham =  pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id,$tenloai){
    $sql = "UPDATE sanpham SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
?>