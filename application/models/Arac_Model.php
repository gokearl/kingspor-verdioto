<?php
/**
 *
 */
class Arac_Model extends CI_Model
{

    public function __construct()
    {
       $this->em = $this->doctrine->em;
    }

    protected $em;

    public function find($id)
    {
        $result = $this->em->getRepository('Entity\Arac')->find($id);
        return $result;
    }

    public function findByCritOrderByDate($criterion, $value)
    {
        $smtm = $this->em->getConnection()
                       ->prepare('SELECT a.id AS id, a.marka AS marka, a.plaka AS plaka, a.il_ilce AS ilce, a.musteri_no AS musterino FROM arac a WHERE CAST(a.'.$criterion.' AS TEXT) LIKE \'%'.$value.'%\'');
       $smtm->execute();
       return $smtm->fetchAll();
    }

    public function deleteAll($value='')
    {
        $query = $this->em->createQuery("DELETE FROM Entity\Arac a");
        $result = $query->getResult();
        $this->em->flush();
        return $result;
    }

    public function saveAll($rows)
    {
        foreach ($rows as $row)
        {
            $arac = new Entity\Arac();
            $arac->setId(uniqid());
            foreach ($row as $key => $value) {
                if ($key == 'Esas No') {
                    $arac->setDosyaNo($value);
                } elseif ($key == 'Ad') {
                    $arac->setAd($value);
                } elseif ($key == 'T.C. No') {
                    $arac->setTcNo($value);
                } elseif ($key == 'Araç Markasý') {
                    $arac->setMarka($value);
                } elseif ($key == 'Araç Cinsi') {
                    $arac->setCins($value);
                } elseif ($key == 'Araç Medeli') {
                    $arac->setModel($value);
                } elseif ($key == 'Mernis Adresi') {
                    $arac->setAdres($value);
                } elseif ($key == 'Mernis ilçe/Ýl') {
                    $arac->setIlIlce($value);
                } elseif ($key == 'telefon') {
                    $arac->setTelefon($value);
                } elseif ($key == 'Müþteri No') {
                    $arac->setMusteriNo($value);
                } elseif ($key == 'e-imza') {
                    $arac->setImza($value);
                } elseif ($key == 'Haciz Tarihi') {
                    $arac->setHacizTarihi($value);
                } elseif ($key == 'Statü') {
                    $arac->setStatu($value);
                } elseif ($key == 'Soyad') {
                    $arac->setSoyad($value);
                } elseif ($key == 'Araç Plaka No') {
                    $arac->setPlaka($value);
                } elseif ($key == 'Ýcra Dairesi') {
                    $arac->setIcraDairesi($value);
                }
            }
            $this->em->persist($arac);
        }
        return $this->em->flush()?TRUE:FALSE;
    }

}

 ?>
