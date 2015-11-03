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
     * @Column(name="username", type="string", length=50)
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
     * @Column(name="email", type="string", length=150, unique=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @column(name="role", type="boolean")
     */
    private $role = 0;

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
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
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
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

}