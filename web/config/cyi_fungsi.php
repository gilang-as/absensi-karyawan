<?php
function lebokno($table, $data){
    global $connect;
    //print_r($data);
    $fields = array_keys( $data );  
    $values = array_map( array($connect, 'real_escape_string'), array_values( $data ) );
   //echo "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');";
   //exit;  
    return mysqli_query($connect, "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');") or die( mysqli_error($connect) );
}
function ganti($table_name, $form_data, $where_clause=''){   
    global $connect;
    $whereSQL = '';
    if(!empty($where_clause)){
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE'){
            $whereSQL = " WHERE ".$where_clause;
        }else{
            $whereSQL = " ".trim($where_clause);
        }
    }
    $sql = "UPDATE ".$table_name." SET ";
    $sets = array();
    foreach($form_data as $column => $value){
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);
    $sql .= $whereSQL;
    return mysqli_query($connect,$sql);
}
function guwak($table_name, $where_clause=''){   
    global $connect;
    $whereSQL = '';
    if(!empty($where_clause)){
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE'){
            $whereSQL = " WHERE ".$where_clause;
        }else{
            $whereSQL = " ".trim($where_clause);
        }
    }
    $sql = "DELETE FROM ".$table_name.$whereSQL;
    return mysqli_query($connect,$sql);
}  
?>