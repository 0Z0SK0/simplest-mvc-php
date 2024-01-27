<?php
class exampleModel extends Model {
	public function testInsertQuery($testData) {
		$sql = "INSERT INTO `test` SET ";
		$sql .= "name = '" . $this->db->escape($testData) . "'";
		$this->db->query($sql);
		return $this->db->getLastId();
	}
	
	public function testQuery() {
		$sql = "SELECT * FROM `test` LIMIT 1";
		$query = $this->db->query($sql);
		return $query->row;
	}
}
?>
