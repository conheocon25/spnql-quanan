<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class CourseLog extends Mapper implements \MVC\Domain\CourseLogFinder{

    function __construct() {
        parent::__construct();
		
		$tblCourse 		= "tbl_course";	
		$tblCourseLog 	= "tbl_course_log";		
		
		$selectAllStmt = sprintf("SELECT * FROM %s", $tblCourseLog);		
		$findByStmt = sprintf("
			SELECT *
			FROM %s CL
			WHERE
				MINUTE(TIMEDIFF(now(), date_time)) >= (SELECT `prepare` FROM %s WHERE id=CL.id_course)	
		", $tblCourseLog, $tblCourse);
		
		$selectStmt = sprintf("select * from %s where id=?", $tblCourseLog);
		$updateStmt = sprintf("update %s set id_table=?, id_course=?, date_time=?, count=? where id=?", $tblCourseLog);
		$insertStmt = sprintf("insert into %s (id_table, id_course, date_time, count) values(?, ?, ?, ?)", $tblCourseLog);
		$deleteStmt = sprintf("delete from %s where id=?", $tblCourseLog);
		
		$this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);				
		$this->findByStmt = self::$PDO->prepare($findByStmt);
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
	
	function findBy($values ) {	
        $this->findByStmt->execute( $values );
        return new CourseLogCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>