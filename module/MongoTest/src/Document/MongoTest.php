<?php
namespace MongoTest\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;




	/**
	 * @ODM\Document(collection="mongotest")
	 */
	class MongoTest
	{
		/**
		 * @ODM\Id
		 */
		protected $id;
	
		/**
		 * @ODM\Field(type="string")
		 */
		protected $text;
		
		
	
		public function getId()
		{
			return $this->id;
		}
	
		public function setId($id)
		{
			$this->id = $id;
		}
	
		public function getText()
		{
			return $this->text;
		}
	
		public function setText($text)
		{
			$this->text = $text;
		}
	}