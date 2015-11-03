<?php
/**
 * Created by PhpStorm.
 * User: Maximilien
 * Date: 03/11/2015
 * Time: 12:05
 */

namespace ABC\eticket;

/**
 * Class User
 * @package ABC\eticket
 *
 * @Entity
 * @Table(name="user")
 */
class User
{
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
     * @Column(name="username", type="string", length=50, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=50)
     */

    private $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @var boolean
     *
     * @column(name="role", type="boolean")
     */
    private $role;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return boolean
     */
    public function isRole()
    {
        return $this->role;
    }

    /**
     * @param boolean $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

}