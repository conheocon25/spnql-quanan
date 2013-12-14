<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php");

class CourseLog extends Object{
    private $Id;	
	private $IdCourse;
	private $IdTable;
	private $DateTime;
	private $Count;
		
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null, 
		$IdCourse	= null, 
		$IdTable	= null, 
		$DateTime	= null, 		
		$Count		= null) 
	{
        $this->Id 		= $Id;
		$this->IdCourse = $IdCourse;
		$this->IdTable 	= $IdTable;
		$this->DateTime = $DateTime;		
		$this->Count 	= $Count;
		
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
	
	function setIdTable( $IdTable ) {$this->IdTable = $IdTable;$this->markDirty();}
	function getIdTable( ) {return $this->IdTable;}
	function getTable( ){$mTable = new \MVC\Mapper\Table(); $Table = $mTable->find($this->IdTable);return $Table;}
	
	function setIdCourse( $IdCourse ) {$this->IdCourse = $IdCourse;$this->markDirty();}
	function getIdCourse( ) {return $this->IdCourse;}
	function getCourse( ){$mCourse = new \MVC\Mapper\Course();$Course = $mCourse->find($this->IdCourse);return $Course;}
	
    function setDateTime( $DateTime ) {$this->DateTime = $DateTime;$this->markDirty();}
	function getDateTime( ) {return $this->DateTime;}
	function getDateTimePrint( ){
		$D = date('H:i d/m', strtotime($this->getDateTime()) );
		return $D;
	}
	
	function getRemainWaiting(){
		$Value = (int)(strtotime(\date("Y-m-d H:i:s")) - strtotime($this->getDateTime()));
		return round($Value/60,0);
	}
	
	function setCount( $Count ) {$this->Count = $Count; $this->markDirty();}
	function getCount( ) {return $this->Count;}
	function getCountPrint( ){$num = new Number($this->Count);return $num->formatCurrency();}
				
	public function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdTable'		=> $this->getIdTable(),
			'IdCourse'		=> $this->getIdCourse(),
		 	'DateTime'		=> $this->getDateTime(),
		 	'Count'			=> $this->getCount()
		);
		return json_encode($json);
	}
	function setArray( $Data ){
        $this->Id 			= $Data[0];		
		$this->IdCourse 	= $Data[1];
		$this->IdTable 		= $Data[2];
		$this->DateTime 	= $Data[3];		
		$this->Count 		= $Data[4];
    }
		
	//----------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ){$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>