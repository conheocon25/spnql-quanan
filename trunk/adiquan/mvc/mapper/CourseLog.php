<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class CourseLog extends Mapper implements \MVC\Domain\CourseLogFinder{

    function __construct() {
        parent::__construct();
		$tblCourseLog = "tbl_course_log";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_time DESC", $tblCourseLog);
		$selectStmt = sprintf("select * from %s where id=?", $tblCourseLog);
		$updateStmt = sprintf("update %s set id_table=?, id_course=?, date_time=?, count=? where id=?", $tblCourseLog);
		$insertStmt = sprintf("insert into %s (id_table, id_course, date_time, count) values(?, ?, ?, ?)", $tblCourseLog);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCourseLog);
		
		$this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);				
    } 
    function getCollection( array $raw ) {return new CourseLogCollection( $raw, $this );}
    protected function doCreateObject( array $array ){
        $obj = new \MVC\Domain\CourseLog( 
			$array['id'],
			$array['id_course'],
			$array['id_table'],			
			$array['date_time'],
			$array['count']			
		);
        return $obj;
    }
    protected function targetClass() { return "CourseLog";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getIdCourse(),
			$object->getIdTable(),			
			$object->getDateTime(),			
			$object->getCount()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
	    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCourse(),
			$object->getIdTable(),			
			$object->getDateTime(),			
			$object->getCount(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
	function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
}
?>