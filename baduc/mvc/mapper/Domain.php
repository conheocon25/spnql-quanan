<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Domain extends Mapper implements \MVC\Domain\DomainFinder {

    function __construct() {
        parent::__construct();
		
		$tblDomain = "r3d_domain";
						
		$selectAllStmt = sprintf("select * from %s", $tblDomain);
		$selectStmt = sprintf("select * from %s where id=?", $tblDomain);
		$updateStmt = sprintf("update %s set name=? where id=?", $tblDomain);
		$insertStmt = sprintf("insert into %s ( name) values(?)", $tblDomain);
		$deleteStmt = sprintf("delete from %s where id=?", $tblDomain);
						
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
									
    } 
    function getCollection( array $raw ) {
        return new DomainCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Domain( 
			$array['id'],
			$array['name']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "Domain";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getName(),
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