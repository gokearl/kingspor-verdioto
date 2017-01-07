<?php 
// src/Musteri.php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity
* @Table(name="musteri")
*/

class Musteri
{
	
	/**
	* @Id
	* @Column(type="integer")
	* @GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @var string $ad
	* @Column(name="ad", type="text", nullable=false)
	*/

	protected $ad;

	/**
	* @var string $soyad
	* @Column(name="soyad", type="text", nullable=false)
	*/

	protected $soyad;

	/**
	* @var integer $telefon
	* @Column(name="telefon", type="text", nullable=false)
	*/

	protected $telefon;

	/**
	* @var integer $adres
	* @Column(name="adres", type="string", nullable=true)
	*/

	protected $adres;

	/**
	* @var integer $siparis
	* @Column(name="siparis", type="string", nullable=true)
	*/

	protected $siparis;

	/**
	* @var integer $notlar
	* @Column(name="notlar", type="string", nullable=true)
	*/

	protected $notlar;

	public function getName(){
		return $this->ad;
	}

	public function setName($ad){
		$this->ad = $ad;
	}

	public function getLastname(){
		return $this->soyad;
	}

	public function setLastname($soyad){
		$this->soyad = $soyad;
	}

	public function getTel(){
		return $this->telefon;
	}

	public function setTel($telefon){
		$this->telefon = $telefon;
	}

	public function getAdress(){
		return $this->adres;
	}

	public function setAdress($adres){
		$this->adres = $adres;
	}

	public function getSip(){
		return $this->siparis;
	}

	public function setSip($siparis){
		$this->siparis = $siparis;
	}

	public function getNot(){
		return $this->notlar;
	}

	public function setNot($notlar){
		$this->notlar = $notlar;
	}
	public function __toString()
	{
		return $this->ad . ' '. $this->soyad. ' '. $this->telefon. ' '. $this->adres. ' '. $this->siparis
		. ' '. $this->notlar;
	}
}





 ?>
