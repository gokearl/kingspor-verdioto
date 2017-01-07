<?php

namespace Entity;

/**
 * UserInformation
 *
 * @Table(name="userinformation")
 * @Entity
 */
class UserInformation
{

    /**
    * @var string
    * @Column(name="id", type="string")
    * @Id
    */
    protected $id;

    /**
     * @var string
     *
     * @Column(name="username", type="string", length=255, nullable=false)
     * @Id
     */
    protected $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", nullable=true)
     */
    protected $password;

    /**
     * @var boolean
     *
     * @Column(name="active", type="boolean", nullable=true)
     */
    protected $active;

    /**
     * @var \DateTime
     *
     * @Column(name="last_login", type="datetime", nullable=true)
     */
    protected $lastLogin;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=255, nullable=false)
     * @Id
     */
    protected $email;




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
     * Get the value of Username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of Username
     *
     * @param string username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param string password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of Active
     *
     * @param boolean active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of Last Login
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set the value of Last Login
     *
     * @param \DateTime lastLogin
     *
     * @return self
     */
    public function setLastLogin(\DateTime $lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param string email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

}
