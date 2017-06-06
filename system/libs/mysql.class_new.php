<?php
/**
 * $Author: DOIT $
 * ============================================================================
 * mysqli数据库连接类
 * 
 * 
 * ============================================================================
*/

//数据库连接类
class mysql
{
	var $ConnStr;
	
	function __construct(){
		$this->connect();
		//$this->selectdb();
	}
	
	//连接
	function connect(){
		$this->ConnStr=mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME);
		if(!$this->ConnStr){
			  printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
                          exit();
		}
                 mysqli_set_charset($this->ConnStr, "utf8");
//                $charset=mysqli_character_set_name($this->ConnStr); 
//                echo "默认字符集为: " . $charset; 
            
	}
	
        
	//连接数据库
	function selectdb(){
		if(!@mysqli_select_db(DB_NAME,$this->ConnStr)){
			echo '数据库'.DB_NAME.'不存在';
		}
                mysqli_set_charset($this->ConnStr, "utf8");
//                mysqli_query($this->ConnStr,"set names ".DB_CHARSET);
//                  $charset=mysqli_character_set_name($this->ConnStr); 
//                echo "默认字符集为: " . $charset; 
                //mysqli_set_charset($this->ConnStr, "utf8");
		//@mysql_unbuffered_query("set names ".DB_CHARSET);
	}
	
	//执行查询
	function query($sql){
             //echo $sql;
		if(!$res=@mysqli_query($this->ConnStr, $sql)){
			echo '操作数据库失败'.mysqli_connect_error()."<br>sql:{$sql}";
		}
                
		return $res;
	}
	
	//sql报错信息
	function get_error(){
		$err=mysqli_error($this->ConnStr);
		return $err;
	}
	
	//取出数字作为数组索引的数据集合
	function fetch_array($sql){
            echo 'aaaa';
		$result=$this->query($sql);
		while($rows=mysqli_fetch_array($result)){
			$array[]=$rows;
		}
		mysqli_free_result($result);
		return $array;
	}
	
	function fetch_rows($query){
              echo 'bbbbb';
        return mysqli_fetch_array($query);
    }
	
	function get_one($sql){
              echo 'ccc';
		$result=$this->query($sql);
		return mysqli_fetch_assoc($result);
	}
	
	//取出字段作为数组索引的数据集合
	function fetch_asc($sql){
              echo 'dddd';
		$result=$this->query($sql);
		$arr=array();
		while($rows=mysqli_fetch_assoc($result)){
			$arr[]=$rows;
		}
		mysqli_free_result($result);
		return $arr;
	}
	
	//最后一次插入的id
	function insert_id(){
		return mysqli_insert_id($this->ConnStr);
	}
	
	//返回数据数目
	function num_rows($sql){
		$result=$this->query($sql);
		$num=@mysqli_num_rows($result);
		mysqli_free_result($result);
		return $num;
	}
	
	//取得结果集中字段的数目
	function num_fields($query){
        return mysqli_num_fields($query);
       }
	
	//返回字段名数组
	function fetch_field($sql){
		$result=$this->query($sql);
		$num=$this->num_fields($result);
		for($i=0;$i<$num;$i++){
			$arr[]=mysqli_field_name($result,$i);
		}
		return $arr;
	}
	
	//获得版本信息
	function server_info(){
		return mysqli_get_server_info($this->ConnStr);
	}
	
	//查询数据条数
	function db_num($table,$where){
		$num=$this->num_rows("select * from ".DB_PRE.$table." where $where");
		return $num;
	}
	
	//添加信息进数据表
	function db_insert($table, $field) {
		$SQL = "INSERT INTO `".DB_PRE.$table."` SET $field";
		$this->query($SQL);
		return $this->insert_id();
	}
	
	//更新数据表信息
	function db_update($table,$field,$where){
		$SQL = "UPDATE `".DB_PRE.$table."` SET $field WHERE $where";
		return $this->query($SQL);
	}
	
	//删除数据信息
	function db_delete($table, $where) {
		$SQL = "DELETE FROM `".DB_PRE.$table."` WHERE $where";
		return $this->query($SQL);
	}
	
	
	/*
	*
	*数据库操作
	*创建、修改、删除数据表
	*添加、修改、删除字段
	*
	*/
	
	//创建数据表
	function create_table($table,$field){
		$sql="create table ".DB_PRE.$table." (".$field.") ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci";
		return $this->query($sql);
	}
	
	//添加字段
	function add_field($table,$field){
		$sql="alter table ".DB_PRE.$table." add ".$field." CHARACTER SET utf8 COLLATE utf8_general_ci NULL";
		return $this->query($sql);
	}
	
	//修改字段
	function edit_field($table,$field){
		$sql="alter table ".DB_PRE.$table." CHANGE ".$field." CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL";
		return $this->query($sql);
	}
	
	//删除字段
	function del_field($table,$field){
		$sql="alter table ".DB_PRE.$table." drop column ".$field;
		return $this->query($sql);
	}
	
	//显示数据表
	function show_table(){
		$rel=$this->fetch_array('show tables');
		foreach($rel as $key=>$value){
			$arr[]=$value[0];
		}
		return $arr;
	}
	
	//修改数据表名,$table-改前表名  $table_now-改后表名
	function rename_table($table,$table_now){
		$sql="RENAME TABLE ".DB_PRE.$table." TO ".DB_PRE.$table_now;
		return $this->query($sql);
	}
	
	//删除数据表
	function del_table($table){
		$sql="drop table ".DB_PRE.$table;
		return $this->query($sql);
	}
}
?>