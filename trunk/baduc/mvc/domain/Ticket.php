<?php
Namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Ticket extends Object{

    private $Id;	
	private $IdTable;
	private $IdCourse;
	private $Count;	
	private $Note;	
		
    function __construct( $Id=null, $IdTable=null, $IdCourse=null, $Count=null, $Note=null) {
        $this->Id = $Id;
		$this->IdTable = $IdTable;
		$this->IdCourse = $IdCourse;
		$this->Count = $Count;
		$this->Note = $Note;
	
        parent::__construct( $Id );
    }
	function setId( $Id) {
        $this->Id = $Id;
    }
    function getId( ) {
        return $this->Id;
    }
	function getIdPrint( ) {
        return "ticket".$this->Id;
    }
		
	function setIdTable( $IdTable ) {
        $this->IdTable = $IdTable;
        $this->markDirty();
    }
	function getIdTable( ) {
        return $this->IdTable;
    }
	function getTable( ) {
		$mTable = new \MVC\Mapper\Table();
		$Table = $mTable->find($this->getIdTable());
        return $Table;
    }
			
	function setIdCourse( $IdCourse ) {
        $this->IdCourse = $IdCourse;
        $this->markDirty();
    }
	function getIdCourse( ) {
        return $this->IdCourse;
    }		
	function getCourse( ) {		
		$mCourse = new \MVC\Mapper\Course();
		$Course = $mCourse->find($this->IdCourse);		
        return $Course;
    }
    function setCount( $Count ) {
        $this->Count = $Count;
        $this->markDirty();
    }   
	function getCount( ) {
        return $this->Count;
    }
	function getCountPrint( ) {
        $num = new Number($this->Count);
		return $num->formatCurrency();
    }
	
	function setPrice( $Price) {
        $this->Price = $Price;
    }
	function getPrice( ) {
        return $this->Price;
    }
	function getPricePrint( ) {
        $num = new Number($this->Price);
		return $num->formatCurrency();
    }
	
	function setNote( $Note){
        $this->Note = $Note;
    }
	function getNote( ){
        return $this->Note;
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLUpdLoad(){			
		$Table = $this->getTable();
		$Domain = $Table->getDomain();		
		return "/selling/".$Domain->getId()."/".$Table->getId()."/ticket/".$this->getId()."/upd/load";
    }
	function getURLUpdExe(){				
		$Table = $this->getTable();
		$Domain = $Table->getDomain();		
		return "/selling/".$Domain->getId()."/".$Table->getId()."/ticket/".$this->getId()."/upd/exe";
    }
	
	function getURLDelLoad(){					
		$Table = $this->getTable();
		$Domain = $Table->getDomain();
		return "/selling/".$Domain->getId()."/".$Table->getId()."/ticket/".$this->getId()."/del/load";
    }
	function getURLDelExe(){				
		$Table = $this->getTable();
		$Domain = $Table->getDomain();
		return "/selling/".$Domain->getId()."/".$Table->getId()."/ticket/".$this->getId()."/del/exe";
    }
		
	//---------------------------------------------------------------------------------	
	//CÁC HÀM XỬ LÍ DANH SÁCH
	//---------------------------------------------------------------------------------			
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
