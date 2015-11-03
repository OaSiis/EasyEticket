<?php
/**
 * Created by PhpStorm.
 * User: Maximilien
 * Date: 03/11/2015
 * Time: 15:57
 */

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
     * @var int
     *
     * @Column(name="date", type="integer")
     */
    private $date;

    /**
     * @var string
     *
     * @Column(name="picture", type="string", length=255)
     */
    private $picture;

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
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
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


}