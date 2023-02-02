<?php 
function insert_sanpham($tenloai){
    $sql = "INSERT INTO sanpham(name) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "DELETE FROM WHERE id=" .$id;
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC ";
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