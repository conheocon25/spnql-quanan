<?php
/** 
 * PHP version 5.3
 *
 * LICENSE: Lưu hành nội bộ
 *
 * @category   Database
 * @package    Mapper
 * @author     Bùi Thanh Tuấn <tuanbuithanh@gmail.com>
 * @author     Nguyễn Thanh Bảo <thanhbao2007vl@gmail.com>
 * @copyright  2010-2012 SPN Group
 * @license    Bản quyền nhóm
 * @version    SVN: ?
 * @link       mvc/mapper/Ticket.php
 * @see        Ticket
 * @note       Định danh các khoản chi tiết của một giao dịch
 */
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Ticket extends Mapper implements \MVC\Domain\UserFinder {

    function __construct() {
        parent::__construct();
		
		/*
        * Cac qui trình thực hiện tổng quát hóa CSDL
		* (1) Lấy về tiền tố của bảng dữ liệu từ App
        * (2) format định dạng các Stmt có sử dụng tiền tố
        * (3) prepare các Stmt 
        */		
		$tblTicket = "baduc_ticket";
						
		$selectAllStmt = sprintf("select * from %s", $tblTicket);
		$selectStmt = sprintf("select * from %s where id=?", $tblTicket);
		$updateStmt = sprintf("update %s set idtable=?, idcourse=?, count=?, note=? where id=? ", $tblTicket);
		$insertStmt = sprintf("insert into %s (idtable, idcourse, count, note) values(?, ?, ?, ?)", $tblTicket);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTicket);
		$deleteByStmt = sprintf("delete from %s where idtable=?", $tblTicket);
		
		$findByStmt = sprintf("select * from %s where idtable=?", $tblTicket);
		$checkStmt = sprintf("
			select distinct id 
			from %s 
			where idtable=? and idcourse=?
		", $tblTicket);
		/*
        * Gán chuỗi vừa được xử lí cho các Statement của PDO
		* luôn đảm bảo các tiền tố được truyền đi đúng
        */
        $this->selectAllStmt = self::$PDO->prepare( $selectAllStmt );
        $this->selectStmt = self::$PDO->prepare( $selectStmt );
        $this->updateStmt = self::$PDO->prepare( $updateStmt );
        $this->insertStmt = self::$PDO->prepare( $insertStmt );
		$this->deleteStmt = self::$PDO->prepare( $deleteStmt );
		$this->deleteByStmt = self::$PDO->prepare( $deleteByStmt );
        
		$this->findByStmt = self::$PDO->prepare($findByStmt);				
		$this->checkStmt = self::$PDO->prepare($checkStmt);
    } 
    function getCollection( array $raw ) {
        return new TicketCollection( $raw, $this );
    }
    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\Ticket( 
			$array['id'],
			$array['idtable'], 
			$array['idcourse'],
			$array['count'],
			$array['note']
		);
        return $obj;
    }
    protected function targetClass() {        
		return "Ticket";
    }
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdTable(),
			$object->getIdCourse(),
			$object->getCount(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdTable(),
			$object->getIdCourse(),
			$object->getCount(),
			$object->getNote(),
			$object->getId()
		);		
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }
    function selectStmt() {
        return $this->selectStmt;
    }
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function deleteBy( $values ) {	
        $this->deleteByStmt->execute( $values );
        //return new TicketCollection( $this->deleteByStmt->fetchAll(), $this );
		return true;
    }
	
	/*
    * Command	: findBy	
	* Input		: array($IdTable)
	* Output	: list of Ticket
	* Note		: Tìm về các chi tiết gọi món của bàn
    */
	function findBy( $values ) {	
        $this->findByStmt->execute( $values );
        return new TicketCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function check( $values ) {	
        $this->checkStmt->execute( $values );
		$result = $this->checkStmt->fetchAll();		
		if (!isset($result) || $result==null)
			return null;
        return $result[0][0];
    }
}
?>