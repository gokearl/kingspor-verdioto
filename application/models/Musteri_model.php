<?php 
include_once (APPPATH.'models/Entity/Musteri.php');
require_once(APPPATH.'models/Entity/Musteri.php');


use \Musteri;
$em = $this->doctrine->getEntityManager();
/**
* 
*/
class Musteri_model extends CI_Model
{
	
	/**     
     	* @var \Doctrine\ORM\EntityManager $em 
     	*/
    	public $em;
	
	function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
	}

	function musteri_ekle()
	{

		$client = new \Musteri();
		$client->setName($this->input->post("ad"));
		$client->setLastname($this->input->post("soyad"));
		$client->setTel($this->input->post("telefon"));
		$client->setAdress($this->input->post("adres"));
		$client->setSip($this->input->post("siparis"));
		$client->setNot($this->input->post("notlar"));
		try 
		{
			$this->em->persist($client);
			$this->em->flush();
			
		} 
		catch (Exception $err) {
			die($err->getMessage());
		}
		return true;
		
	}

}

 ?>
