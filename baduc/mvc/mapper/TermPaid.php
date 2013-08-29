<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class TermPaid extends Mapper implements \MVC\Domain\TermPaidFinder{

    function __construct() {
        parent::__construct();
				
		$tblTermPaid = "r3d_term_paid";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY name", $tblTermPaid);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTermPaid);
		$updateStmt = sprintf("update %s set name=?, type=? where id=?", $tblTermPaid);
		$insertStmt = sprintf("insert into %s ( name, type) values(?, ?)", $tblTermPaid);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTermPaid);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		
    } 
    function getCollection( array $raw ) {
        return new TermPaidCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\TermPaid( 
			$array['id'], 
			$array['name'],
			$array['type'] 
		);
        return $obj;
    }

    protected function targetClass() {        
		return "TermPaid";
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