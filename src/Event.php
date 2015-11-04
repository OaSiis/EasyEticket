<?php


namespace ABC\eticket;

/**
 * Class Event
 * @package ABC\eticket
 *
 * @Entity
 * @Table(name="event")
 */
class Event {

    /**
     * @var int
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @Column(name="picture", type="string", length=255)
     */
    private $picture;

     /**
     * @var string
     *
     * @Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @Column(name="price", type="integer")
     */
    private $price;

   
    /**
     * @var string
     *
     * @Column(name="localisation", type="string", length=25)
     */
    private $localisation;






    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return dateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param dateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     *
     *
     * @return Event
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

     /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     *
     *
     * @return Event
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * @param string $localisation
     *
     *
     * @return Event
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }


}