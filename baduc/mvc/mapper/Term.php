<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class Term extends Mapper implements \MVC\Domain\TermFinder{

    function __construct() {
        parent::__construct();
				
		$tblTerm = "baduc_term";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblTerm);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTerm);
		$updateStmt = sprintf("update %s set name=?, type=? where id=?", $tblTerm);
		$insertStmt = sprintf("insert into %s ( name, type) values(?, ?)", $tblTerm);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTerm);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new TermCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Term( 
			$array['id'], 
			$array['name'],
			$array['type'] 
		);
        return $obj;
    }

    protected function targetClass() {        
		return "Term";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getType()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
			$object->getType(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
}
?>