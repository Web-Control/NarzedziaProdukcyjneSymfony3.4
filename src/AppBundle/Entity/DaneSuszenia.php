<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DaneSuszenia
 *
 * @ORM\Table(name="dane_suszenia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DaneSuszeniaRepository")
 */
class DaneSuszenia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AsortymentSuszu")
     */
    private $Asortyment;

    /**
     * @var int
     *
     * @ORM\Column(name="NrSuszarni", type="integer")
     */
    private $nrSuszarni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="datetime")
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Godzina", type="time")
     */
    private $godzina;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscBlanszownika", type="integer")
     */
    private $predkoscBlanszownika;

    /**
     * @var int
     *
     * @ORM\Column(name="TemperaturaBlanszownika", type="integer")
     */
    private $temperaturaBlanszownika;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr7", type="integer")
     */
    private $predkoscSiatkiNr7;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr6", type="integer")
     */
    private $predkoscSiatkiNr6;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr5", type="integer")
     */
    private $predkoscSiatkiNr5;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr4", type="integer")
     */
    private $predkoscSiatkiNr4;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr3", type="integer")
     */
    private $predkoscSiatkiNr3;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr2", type="integer")
     */
    private $predkoscSiatkiNr2;

    /**
     * @var int
     *
     * @ORM\Column(name="PredkoscSiatkiNr1", type="integer")
     */
    private $predkoscSiatkiNr1;

    /**
     * @var int
     *
     * @ORM\Column(name="TemperaturaGora", type="integer")
     */
    private $temperaturaGora;

    /**
     * @var int
     *
     * @ORM\Column(name="TemperaturaDol", type="integer")
     */
    private $temperaturaDol;

    /**
     * @var string
     *
     * @ORM\Column(name="CzasSuszenia", type="decimal", precision=5, scale=2)
     */
    private $czasSuszenia;

    /**
     * @var string
     *
     * @ORM\Column(name="Wilgotnosc", type="decimal", precision=5, scale=2)
     */
    private $wilgotnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="WykonawcaPomiaru", type="string", length=255)
     */
    private $wykonawcaPomiaru;

    /**
     * @var string
     *
     * @ORM\Column(name="OcenaTowaruZmiany1", type="string", length=255)
     */
    private $ocenaTowaruZmiany1;

    /**
     * @var string
     *
     * @ORM\Column(name="OcenaTowaruZmiany2", type="string", length=255)
     */
    private $ocenaTowaruZmiany2;

    /**
     * @var string
     *
     * @ORM\Column(name="OcenaTowaruZmiany3", type="string", length=255)
     */
    private $ocenaTowaruZmiany3;

    /**
     * @var int
     *
     * @ORM\Column(name="IloscSuszuZmiana1", type="integer")
     */
    private $iloscSuszuZmiana1;

    /**
     * @var int
     *
     * @ORM\Column(name="IloscSuszuZmiana2", type="integer")
     */
    private $iloscSuszuZmiana2;

    /**
     * @var int
     *
     * @ORM\Column(name="IloscSuszuZmiana3", type="integer")
     */
    private $iloscSuszuZmiana3;

    /**
     * @var int
     *
     * @ORM\Column(name="CalkowitaIloscSuszu", type="integer")
     */
    private $calkowitaIloscSuszu;

    /**
     * @var string
     *
     * @ORM\Column(name="Dostawca", type="string", length=255)
     */
    private $dostawca;

    /**
     * @var string
     *
     * @ORM\Column(name="Uwagi", type="string", length=255)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="Zdjecia", type="string", length=255)
     */
    private $zdjecia;

    /**
     * @var string
     *
     * @ORM\Column(name="OpisZdjecia", type="string", length=255)
     */
    private $opisZdjecia;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idAsortymentu
     *
     * @param integer $idAsortymentu
     *
     * @return DaneSuszenia
     */
    public function setIdAsortymentu($idAsortymentu)
    {
        $this->idAsortymentu = $idAsortymentu;

        return $this;
    }

    /**
     * Get idAsortymentu
     *
     * @return int
     */
    public function getIdAsortymentu()
    {
        return $this->idAsortymentu;
    }

    /**
     * Set nrSuszarni
     *
     * @param integer $nrSuszarni
     *
     * @return DaneSuszenia
     */
    public function setNrSuszarni($nrSuszarni)
    {
        $this->nrSuszarni = $nrSuszarni;

        return $this;
    }

    /**
     * Get nrSuszarni
     *
     * @return int
     */
    public function getNrSuszarni()
    {
        return $this->nrSuszarni;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return DaneSuszenia
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set godzina
     *
     * @param \DateTime $godzina
     *
     * @return DaneSuszenia
     */
    public function setGodzina($godzina)
    {
        $this->godzina = $godzina;

        return $this;
    }

    /**
     * Get godzina
     *
     * @return \DateTime
     */
    public function getGodzina()
    {
        return $this->godzina;
    }

    /**
     * Set predkoscBlanszownika
     *
     * @param integer $predkoscBlanszownika
     *
     * @return DaneSuszenia
     */
    public function setPredkoscBlanszownika($predkoscBlanszownika)
    {
        $this->predkoscBlanszownika = $predkoscBlanszownika;

        return $this;
    }

    /**
     * Get predkoscBlanszownika
     *
     * @return int
     */
    public function getPredkoscBlanszownika()
    {
        return $this->predkoscBlanszownika;
    }

    /**
     * Set temperaturaBlanszownika
     *
     * @param integer $temperaturaBlanszownika
     *
     * @return DaneSuszenia
     */
    public function setTemperaturaBlanszownika($temperaturaBlanszownika)
    {
        $this->temperaturaBlanszownika = $temperaturaBlanszownika;

        return $this;
    }

    /**
     * Get temperaturaBlanszownika
     *
     * @return int
     */
    public function getTemperaturaBlanszownika()
    {
        return $this->temperaturaBlanszownika;
    }

    /**
     * Set predkoscSiatkiNr7
     *
     * @param integer $predkoscSiatkiNr7
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr7($predkoscSiatkiNr7)
    {
        $this->predkoscSiatkiNr7 = $predkoscSiatkiNr7;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr7
     *
     * @return int
     */
    public function getPredkoscSiatkiNr7()
    {
        return $this->predkoscSiatkiNr7;
    }

    /**
     * Set predkoscSiatkiNr6
     *
     * @param integer $predkoscSiatkiNr6
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr6($predkoscSiatkiNr6)
    {
        $this->predkoscSiatkiNr6 = $predkoscSiatkiNr6;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr6
     *
     * @return int
     */
    public function getPredkoscSiatkiNr6()
    {
        return $this->predkoscSiatkiNr6;
    }

    /**
     * Set predkoscSiatkiNr5
     *
     * @param integer $predkoscSiatkiNr5
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr5($predkoscSiatkiNr5)
    {
        $this->predkoscSiatkiNr5 = $predkoscSiatkiNr5;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr5
     *
     * @return int
     */
    public function getPredkoscSiatkiNr5()
    {
        return $this->predkoscSiatkiNr5;
    }

    /**
     * Set predkoscSiatkiNr4
     *
     * @param integer $predkoscSiatkiNr4
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr4($predkoscSiatkiNr4)
    {
        $this->predkoscSiatkiNr4 = $predkoscSiatkiNr4;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr4
     *
     * @return int
     */
    public function getPredkoscSiatkiNr4()
    {
        return $this->predkoscSiatkiNr4;
    }

    /**
     * Set predkoscSiatkiNr3
     *
     * @param integer $predkoscSiatkiNr3
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr3($predkoscSiatkiNr3)
    {
        $this->predkoscSiatkiNr3 = $predkoscSiatkiNr3;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr3
     *
     * @return int
     */
    public function getPredkoscSiatkiNr3()
    {
        return $this->predkoscSiatkiNr3;
    }

    /**
     * Set predkoscSiatkiNr2
     *
     * @param integer $predkoscSiatkiNr2
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr2($predkoscSiatkiNr2)
    {
        $this->predkoscSiatkiNr2 = $predkoscSiatkiNr2;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr2
     *
     * @return int
     */
    public function getPredkoscSiatkiNr2()
    {
        return $this->predkoscSiatkiNr2;
    }

    /**
     * Set predkoscSiatkiNr1
     *
     * @param integer $predkoscSiatkiNr1
     *
     * @return DaneSuszenia
     */
    public function setPredkoscSiatkiNr1($predkoscSiatkiNr1)
    {
        $this->predkoscSiatkiNr1 = $predkoscSiatkiNr1;

        return $this;
    }

    /**
     * Get predkoscSiatkiNr1
     *
     * @return int
     */
    public function getPredkoscSiatkiNr1()
    {
        return $this->predkoscSiatkiNr1;
    }

    /**
     * Set temperaturaGora
     *
     * @param integer $temperaturaGora
     *
     * @return DaneSuszenia
     */
    public function setTemperaturaGora($temperaturaGora)
    {
        $this->temperaturaGora = $temperaturaGora;

        return $this;
    }

    /**
     * Get temperaturaGora
     *
     * @return int
     */
    public function getTemperaturaGora()
    {
        return $this->temperaturaGora;
    }

    /**
     * Set temperaturaDol
     *
     * @param integer $temperaturaDol
     *
     * @return DaneSuszenia
     */
    public function setTemperaturaDol($temperaturaDol)
    {
        $this->temperaturaDol = $temperaturaDol;

        return $this;
    }

    /**
     * Get temperaturaDol
     *
     * @return int
     */
    public function getTemperaturaDol()
    {
        return $this->temperaturaDol;
    }

    /**
     * Set czasSuszenia
     *
     * @param string $czasSuszenia
     *
     * @return DaneSuszenia
     */
    public function setCzasSuszenia($czasSuszenia)
    {
        $this->czasSuszenia = $czasSuszenia;

        return $this;
    }

    /**
     * Get czasSuszenia
     *
     * @return string
     */
    public function getCzasSuszenia()
    {
        return $this->czasSuszenia;
    }

    /**
     * Set wilgotnosc
     *
     * @param string $wilgotnosc
     *
     * @return DaneSuszenia
     */
    public function setWilgotnosc($wilgotnosc)
    {
        $this->wilgotnosc = $wilgotnosc;

        return $this;
    }

    /**
     * Get wilgotnosc
     *
     * @return string
     */
    public function getWilgotnosc()
    {
        return $this->wilgotnosc;
    }

    /**
     * Set wykonawcaPomiaru
     *
     * @param string $wykonawcaPomiaru
     *
     * @return DaneSuszenia
     */
    public function setWykonawcaPomiaru($wykonawcaPomiaru)
    {
        $this->wykonawcaPomiaru = $wykonawcaPomiaru;

        return $this;
    }

    /**
     * Get wykonawcaPomiaru
     *
     * @return string
     */
    public function getWykonawcaPomiaru()
    {
        return $this->wykonawcaPomiaru;
    }

    /**
     * Set ocenaTowaruZmiany1
     *
     * @param string $ocenaTowaruZmiany1
     *
     * @return DaneSuszenia
     */
    public function setOcenaTowaruZmiany1($ocenaTowaruZmiany1)
    {
        $this->ocenaTowaruZmiany1 = $ocenaTowaruZmiany1;

        return $this;
    }

    /**
     * Get ocenaTowaruZmiany1
     *
     * @return string
     */
    public function getOcenaTowaruZmiany1()
    {
        return $this->ocenaTowaruZmiany1;
    }

    /**
     * Set ocenaTowaruZmiany2
     *
     * @param string $ocenaTowaruZmiany2
     *
     * @return DaneSuszenia
     */
    public function setOcenaTowaruZmiany2($ocenaTowaruZmiany2)
    {
        $this->ocenaTowaruZmiany2 = $ocenaTowaruZmiany2;

        return $this;
    }

    /**
     * Get ocenaTowaruZmiany2
     *
     * @return string
     */
    public function getOcenaTowaruZmiany2()
    {
        return $this->ocenaTowaruZmiany2;
    }

    /**
     * Set ocenaTowaruZmiany3
     *
     * @param string $ocenaTowaruZmiany3
     *
     * @return DaneSuszenia
     */
    public function setOcenaTowaruZmiany3($ocenaTowaruZmiany3)
    {
        $this->ocenaTowaruZmiany3 = $ocenaTowaruZmiany3;

        return $this;
    }

    /**
     * Get ocenaTowaruZmiany3
     *
     * @return string
     */
    public function getOcenaTowaruZmiany3()
    {
        return $this->ocenaTowaruZmiany3;
    }

    /**
     * Set iloscSuszuZmiana1
     *
     * @param integer $iloscSuszuZmiana1
     *
     * @return DaneSuszenia
     */
    public function setIloscSuszuZmiana1($iloscSuszuZmiana1)
    {
        $this->iloscSuszuZmiana1 = $iloscSuszuZmiana1;

        return $this;
    }

    /**
     * Get iloscSuszuZmiana1
     *
     * @return int
     */
    public function getIloscSuszuZmiana1()
    {
        return $this->iloscSuszuZmiana1;
    }

    /**
     * Set iloscSuszuZmiana2
     *
     * @param integer $iloscSuszuZmiana2
     *
     * @return DaneSuszenia
     */
    public function setIloscSuszuZmiana2($iloscSuszuZmiana2)
    {
        $this->iloscSuszuZmiana2 = $iloscSuszuZmiana2;

        return $this;
    }

    /**
     * Get iloscSuszuZmiana2
     *
     * @return int
     */
    public function getIloscSuszuZmiana2()
    {
        return $this->iloscSuszuZmiana2;
    }

    /**
     * Set iloscSuszuZmiana3
     *
     * @param integer $iloscSuszuZmiana3
     *
     * @return DaneSuszenia
     */
    public function setIloscSuszuZmiana3($iloscSuszuZmiana3)
    {
        $this->iloscSuszuZmiana3 = $iloscSuszuZmiana3;

        return $this;
    }

    /**
     * Get iloscSuszuZmiana3
     *
     * @return int
     */
    public function getIloscSuszuZmiana3()
    {
        return $this->iloscSuszuZmiana3;
    }

    /**
     * Set calkowitaIloscSuszu
     *
     * @param integer $calkowitaIloscSuszu
     *
     * @return DaneSuszenia
     */
    public function setCalkowitaIloscSuszu($calkowitaIloscSuszu)
    {
        $this->calkowitaIloscSuszu = $calkowitaIloscSuszu;

        return $this;
    }

    /**
     * Get calkowitaIloscSuszu
     *
     * @return int
     */
    public function getCalkowitaIloscSuszu()
    {
        return $this->calkowitaIloscSuszu;
    }

    /**
     * Set dostawca
     *
     * @param string $dostawca
     *
     * @return DaneSuszenia
     */
    public function setDostawca($dostawca)
    {
        $this->dostawca = $dostawca;

        return $this;
    }

    /**
     * Get dostawca
     *
     * @return string
     */
    public function getDostawca()
    {
        return $this->dostawca;
    }

    /**
     * Set uwagi
     *
     * @param string $uwagi
     *
     * @return DaneSuszenia
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Set zdjecia
     *
     * @param string $zdjecia
     *
     * @return DaneSuszenia
     */
    public function setZdjecia($zdjecia)
    {
        $this->zdjecia = $zdjecia;

        return $this;
    }

    /**
     * Get zdjecia
     *
     * @return string
     */
    public function getZdjecia()
    {
        return $this->zdjecia;
    }

    /**
     * Set opisZdjecia
     *
     * @param string $opisZdjecia
     *
     * @return DaneSuszenia
     */
    public function setOpisZdjecia($opisZdjecia)
    {
        $this->opisZdjecia = $opisZdjecia;

        return $this;
    }

    /**
     * Get opisZdjecia
     *
     * @return string
     */
    public function getOpisZdjecia()
    {
        return $this->opisZdjecia;
    }
}

