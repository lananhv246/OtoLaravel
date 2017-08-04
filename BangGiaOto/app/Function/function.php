<?php
    function hangxe($data,$select=0) {
        foreach ($data  as $key => $val) {
            $id =$val["id"];
            $name = $val["name"];
            if($select != 0 && $id  == $select) {
                echo "<option value='$id' selected='selected'>$name</option>";
            }
            else {
                echo "<option value='$id'>$name</option>";
            }
        }
}

function loaixe($data) {
    foreach ($data as $key => $val) {
        $id =$val["id"];
        $ten_loai = $val["name"];
        echo "<option value='$id'>$name</option>";
    }
}
?>