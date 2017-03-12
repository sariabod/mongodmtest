<?php
namespace MongoTest\Service;

use MongoTest\Document\MongoTest;
use Doctrine\ODM\MongoDB\DocumentManager;



class MongoService implements MongoServiceInterface
{
	private $documentManager;

	public function __construct(DocumentManager $dm)
	{
		$this->documentManager = $dm;

	}
	
	
	/**
	 * {@inheritDoc}
	 * @see \MongoTest\Service\MongoServiceInterface::insertData()
	 */
	public function insertData($data) {

		$mongoObj = new MongoTest();
		
		$mongoObj->setText($data);
		
		$this->documentManager->persist($mongoObj);
		$this->documentManager->flush();
		
		return $mongoObj;
		
		
		
	}

	/**
	 * {@inheritDoc}
	 * @see \MongoTest\Service\MongoServiceInterface::getData()
	 */
	public function getData($id) {

		$mongoObj = $this->documentManager->getRepository(MongoTest::class)->findBy(['id'=>$id]);
		
		
		print $mongoObj->getName();
	}

	
	
	
	
	
}