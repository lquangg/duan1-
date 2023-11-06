<?php
include "header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch($act){
        case "themdanhmuc":
            include "danhmuc/themmoi.php";
            break;
        case "dsdanhmuc":
            include "danhmuc/danhsach.php";
            break;
        case "capnhatdanhmuc":
            include "danhmuc/capnhat.php";
            break;
        case "themsanpham":
            include "sanpham/themmoi.php";
            break;
        case "dssanpham":
            include "sanpham/danhsach.php";
            break;
        case "capnhatsanpham":
            include "sanpham/capnhat.php";
            break;    
            case "danhsachtk":
                include "taikhoan/danhsachtk.php";
                break; 
                case "themtk":
                    include "taikhoan/themtk.php";
                    break; 
                    case "thongtindonhang":
                        include "donhang/danhsachdh.php";
                        break;      

    default:
        include 'home.php' ;
        break;
    }
}else{
    include 'home.php' ;
}
include "footer.php";
?>