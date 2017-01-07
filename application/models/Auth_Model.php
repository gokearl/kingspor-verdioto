<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_Model extends CI_Model
{
    protected $em;

    public function __construct()
    {
      //  $this->load->library('doctrine');
    }

    public function user($username)
    {
        $result = $this->doctrine->em->getRepository('Entity\UserInformation')->findBy(array('username' => $username));
        // var_dump($result);
        return $result[0];
    }

    public function login($username, $password)
    {
        if (empty($username) || empty($password))
        {
            return false;
        }
        $user = $this->doctrine->em->getRepository('Entity\UserInformation')->findOneBy(array('username' => $username, 'password' => $password, 'active' => TRUE));
        if ($user != null){
          if ($user->getActive() != true)
          {
              return false;
          }
          $this->update_last_login($user);
          return array(
              'username' => $user->getUserName(),
              'old_last_login' => $user->getLastLogin()
          );
          return true;
        }
        return false;
    }

    private function update_last_login($user)
    {
        $user->setLastLogin(new DateTime('NOW', new DateTimeZone('GMT')));
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
    }
}
