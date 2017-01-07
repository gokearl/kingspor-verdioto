<?php
// src/Arac.php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity
* @Table(name="arac")
*/

class Arac
{

	/**
	* @Id
	* @Column(type="string")
	*/
	protected $id;

	/**
	* @var string $dosyaNo
	* @Column(name="dosya_no", type="string")
	*/

	protected $dosyaNo;

	/**
	* @var string $ad
	* @Column(name="ad", type="string")
	*/

	protected $ad;

	/**
	* @var string $soyad
	* @Column(name="soyad", type="string")
	*/

	protected $soyad;

	/**
	* @var integer $tcNo
	* @Column(name="tc_no", type="bigint")
	*/

	protected $tcNo;

	/**
	* @var string $adres
	* @Column(name="adres", type="string")
	*/

	protected $adres;

  /**
  * @var string $adres2
  * @Column(name="adres_2", type="string")
  */

  protected $adres2;

  /**
  * @var string $ilIlce
  * @Column(name="il_ilce", type="string")
  */

  protected $ilIlce;

	/**
	* @var string $marka
	* @Column(name="marka", type="string")
	*/

	protected $marka;

	/**
	* @var string $cins
	* @Column(name="cins", type="string")
	*/

	protected $cins;

  /**
  * @var integer $model
  * @Column(name="model", type="string")
  */

  protected $model;

  /**
  * @var string $telefon
  * @Column(name="telefon", type="string")
  */

  protected $telefon;

  /**
  * @var bigint $musteriNo
  * @Column(name="musteri_no", type="bigint")
  */

  protected $musteriNo;

  /**
  * @var string $imza
  * @Column(name="imza", type="string")
  */

  protected $imza;

  /**
  * @var string $hacizTarihi
  * @Column(name="haciz_tarihi", type="string")
  */

  protected $hacizTarihi;

  /**
  * @var string $statu
  * @Column(name="statu", type="string")
  */

  protected $statu;

  /**
  * @var string $plaka
  * @Column(name="plaka", type="string")
  */

  protected $plaka;

  /**
  * @var string $icraDairesi
  * @Column(name="icra_dairesi", type="string")
  */

  protected $icra_dairesi;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Dosya No
     *
     * @return string $dosyaNo
     */
    public function getDosyaNo()
    {
        return $this->dosyaNo;
    }

    /**
     * Set the value of Dosya No
     *
     * @param string $dosyaNo dosyaNo
     *
     * @return self
     */
    public function setDosyaNo($dosyaNo)
    {
        $this->dosyaNo = $dosyaNo;

        return $this;
    }

    /**
     * Get the value of Ad
     *
     * @return string $ad
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set the value of Ad
     *
     * @param string $ad ad
     *
     * @return self
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get the value of Soyad
     *
     * @return string $soyad
     */
    public function getSoyad()
    {
        return $this->soyad;
    }

    /**
     * Set the value of Soyad
     *
     * @param string $soyad soyad
     *
     * @return self
     */
    public function setSoyad($soyad)
    {
        $this->soyad = $soyad;

        return $this;
    }

    /**
     * Get the value of Tc No
     *
     * @return integer $tcNo
     */
    public function getTcNo()
    {
        return $this->tcNo;
    }

    /**
     * Set the value of Tc No
     *
     * @param integer $tcNo tcNo
     *
     * @return self
     */
    public function setTcNo($tcNo)
    {
        $this->tcNo = $tcNo;

        return $this;
    }

    /**
     * Get the value of Adres
     *
     * @return string $adres
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set the value of Adres
     *
     * @param string $adres adres
     *
     * @return self
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get the value of Adres
     *
     * @return string $adres2
     */
    public function getAdres2()
    {
        return $this->adres2;
    }

    /**
     * Set the value of Adres
     *
     * @param string $adres2 adres2
     *
     * @return self
     */
    public function setAdres2($adres2)
    {
        $this->adres2 = $adres2;

        return $this;
    }

    /**
     * Get the value of Il Ilce
     *
     * @return string $ilIlce
     */
    public function getIlIlce()
    {
        return $this->ilIlce;
    }

    /**
     * Set the value of Il Ilce
     *
     * @param string $ilIlce ilIlce
     *
     * @return self
     */
    public function setIlIlce($ilIlce)
    {
        $this->ilIlce = $ilIlce;

        return $this;
    }

    /**
     * Get the value of Marka
     *
     * @return string $marka
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * Set the value of Marka
     *
     * @param string $marka marka
     *
     * @return self
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;

        return $this;
    }

    /**
     * Get the value of Cins
     *
     * @return string $cins
     */
    public function getCins()
    {
        return $this->cins;
    }

    /**
     * Set the value of Cins
     *
     * @param string $cins cins
     *
     * @return self
     */
    public function setCins($cins)
    {
        $this->cins = $cins;

        return $this;
    }

    /**
     * Get the value of Model
     *
     * @return integer $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of Model
     *
     * @param integer $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of Telefon
     *
     * @return string $telefon
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set the value of Telefon
     *
     * @param string $telefon telefon
     *
     * @return self
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get the value of Musteri No
     *
     * @return bigint $musteriNo
     */
    public function getMusteriNo()
    {
        return $this->musteriNo;
    }

    /**
     * Set the value of Musteri No
     *
     * @param bigint $musteriNo musteriNo
     *
     * @return self
     */
    public function setMusteriNo($musteriNo)
    {
        $this->musteriNo = $musteriNo;

        return $this;
    }

    /**
     * Get the value of Imza
     *
     * @return string $imza
     */
    public function getImza()
    {
        return $this->imza;
    }

    /**
     * Set the value of Imza
     *
     * @param string $imza imza
     *
     * @return self
     */
    public function setImza($imza)
    {
        $this->imza = $imza;

        return $this;
    }

    /**
     * Get the value of Haciz Tarihi
     *
     * @return string $hacizTarihi
     */
    public function getHacizTarihi()
    {
        return $this->hacizTarihi;
    }

    /**
     * Set the value of Haciz Tarihi
     *
     * @param string $hacizTarihi hacizTarihi
     *
     * @return self
     */
    public function setHacizTarihi($hacizTarihi)
    {
        $this->hacizTarihi = $hacizTarihi;

        return $this;
    }

    /**
     * Get the value of Statu
     *
     * @return string $statu
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * Set the value of Statu
     *
     * @param string $statu statu
     *
     * @return self
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;

        return $this;
    }

    /**
     * Get the value of Plaka
     *
     * @return string $plaka
     */
    public function getPlaka()
    {
        return $this->plaka;
    }

    /**
     * Set the value of Plaka
     *
     * @param string $plaka plaka
     *
     * @return self
     */
    public function setPlaka($plaka)
    {
        $this->plaka = $plaka;

        return $this;
    }

    /**
     * Get the value of Icra Dairesi
     *
     * @return string $icraDairesi
     */
    public function getIcraDairesi()
    {
        return $this->icra_dairesi;
    }

    /**
     * Set the value of Icra Dairesi
     *
     * @param string $icraDairesi icra_dairesi
     *
     * @return self
     */
    public function setIcraDairesi($icra_dairesi)
    {
        $this->icra_dairesi = $icra_dairesi;

        return $this;
    }

	public function __toString()
  	{
  		return $this->ad . ' '. $this->soyad. ' '. $this->telefon. ' '. $this->adres. ' '. $this->siparis
  		. ' '. $this->notlar;
  	}
}
 ?>
