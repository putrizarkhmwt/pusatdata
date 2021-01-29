<?php
class BaseModel extends CI_Model{
	private $table, $primaryKey, $schema, $data;
	private static $childClass;
	
	public function __construct($childClass){
		parent::__construct();
		$this->childClass = $childClass;
		self::init($childClass);
	}
	
	protected function init($child){
		$this->table 		= $child->tableName();
		$this->primaryKey 	= $child->primaryKey();
		$this->schema 		= $child->schema();
		
		foreach($this->schema as $key){
			$this->{$key} 		= null;
			$this->data[$key] 	= null;
		}
	}
	
	private function initData(){
		$schema = $this->schema;
		foreach($schema as $key){
			$this->data[$key] = $this->$key;
		}
	}
	
	private function allowSave(){
		self::initData();
		$data = $this->data;
		
		$n_fill = 0;
		$n_field = count($data);
		foreach($data as $key => $value){
			if(!is_null($value)) $n_fill++;
		}
		
		if($n_fill == 0) return false;
		else return true;
	}
	
	private function printValue(){
		$data = $this->data;
		
		$result = '';
		foreach($data as $key => $value){
			echo "$key => ";
			var_dump($value);
			echo "<br>";
		}
	}
	
	public function save(){
		if(!self::allowSave()) return false;
		else $data = $this->data;
		
		$primaryKey = $data[$this->primaryKey];
		if(is_null($primaryKey)) return self::insert();
		else return self::update();
	}
	
	private function insert(){
		$primaryKey = $this->primaryKey;
		unset($this->data[$primaryKey]);
		
		$save = $this->db->insert($this->table, $this->data);
		if($save){
			$query = $this->db->select('LAST_INSERT_ID()')->get();
			foreach ($query->result() as $row){
				$row = (array) $row;
				$last_insert_id = $row['LAST_INSERT_ID()'];
			}
			
			$primaryKey = $this->primaryKey;
			$this->$primaryKey = isset($last_insert_id) ? $last_insert_id : NULL;
			
			return true;
		}
		else return false;
	}
	
	private function update($condition=[]){
		$primaryKey = $this->primaryKey;
		
		$condition[$primaryKey] = $this->data[$primaryKey];
		
		$save = $this->db
				->where($condition)
				->update($this->table, $this->data);
		
		return $save;
	}
	
	/* static function */
	
	public static function findAll(){
		return self::find();
	}
	
	public static function find($condition=[]){
		$childClass  = get_called_class();
		$childObject = new $childClass();
		
		$query = $childObject->db
				->where($condition)
				->get($childObject->tableName());
				
		$result = [];
		foreach ($query->result() as $row){
			$result[] = (array)$row;
		}
		
		return $result;
	}
	
	public static function findOne($primaryKey=null){
		if(is_null($primaryKey)) return NULL;
		else{
			$childClass  = get_called_class();
			$childObject = new $childClass();
			
			$query = $childObject->db
					->where($childObject->primaryKey(), $primaryKey)
					->get($childObject->tableName());
			
			$result = [];
			foreach ($query->result() as $row){
				$result = (array)$row;
			}
			
			foreach($result as $key => $value){
				$childObject->$key = $value;
			}
			
			$childObject->data = $result;
			return $childObject;
		}
	}
	
	public static function remove($primaryKey=null){
		if(is_null($primaryKey)) return false;
		else{
			$childClass  = get_called_class();
			$childObject = new $childClass();
			
			$delete = $childObject->db
					->where($childObject->primaryKey(), $primaryKey)
					->delete($childObject->tableName());
			
			return  $delete;
		}
	}
	
	public static function removeAll($condition=[]){
		$childClass  = get_called_class();
		$childObject = new $childClass();
		
		$delete = $childObject->db
				->where($condition)
				->delete($childObject->tableName());
		
		return  $delete;
	}
	
	public static function findBySql($sql){
		$childClass  = get_called_class();
		$childObject = new $childClass();
		
		$query = $childObject->db->query($sql);
		if($query === false) return [];
		
		$result = [];
		foreach ($query->result() as $row){
			$result[] = (array)$row;
		}
		
		return $result;
	}
	
	public static function executeSql($sql){
		$childClass  = get_called_class();
		$childObject = new $childClass();
		
		return $childObject->db->query($sql);
	}
	
	/* /static function */
}
?>
