<?php
namespace Gt\SistemaBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class usuarioRepository extends EntityRepository implements UserProviderInterface
{
    
    public function getChoiceListVendedor($idEmpresa){
        $em = $this->getEntityManager(); 
        $sql = " 
                SELECT ''
                ,B.id 
                ,B.usuarioNombre 
                ,B.usuarioApellidos 
                FROM empresaUsuario A 
                INNER JOIN usuario B ON A.id_usuario = B.id 
                INNER JOIN usuarioTipo C ON B.id_usuarioTipo = C.id    
                WHERE 1
                AND A.id_empresa=" . $idEmpresa . " 
                AND C.usuarioTipoNombre = 'Vendedor'
                GROUP BY B.id
                ORDER BY B.usuarioNombre, B.usuarioApellidos ASC 
                ";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        
        $rows = $stmt->fetchAll();
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['usuarioNombre'].' '.$row['usuarioApellidos'];
        }        
        return $choices;     
    }
    public function getListUsuarioTipoSinSuperUsuario(){
        $em = $this->getEntityManager(); 
        $sql = "SELECT A.id,A.usuarioTipoNombre FROM usuarioTipo A WHERE A.id <> -1 ";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        
        $rows = $stmt->fetchAll();
        $choices = array('' => ':: SELECCIONE ::');
        foreach ($rows as $key => $row) {
            $choices[$row['id']] = $row['usuarioTipoNombre'];
        }        
        return $choices;      
    }


    public function getListaUsuarioPorEmpresa($idEmpresa){
        $em = $this->getEntityManager(); 
        
          /*,B.usuarioNombre AS usuarioNombre
                ,C.usuarioTipoNombre as usuarioTipoNombre
                ,B.usuarioApellidos as usuarioApellidos*/
                  
        $sql = "
                SELECT '' 
                ,B.id AS id
                ,B.username AS username
                ,B.is_active AS is_active
              
                FROM empresaUsuario A
                LEFT JOIN usuario B ON A.id_usuario = B.id
                LEFT JOIN usuarioTipo C ON B.id_usuarioTipo = C.id 
                WHERE 1 
                AND A.id_empresa=$idEmpresa 
                AND A.id_usuario>1    
                ";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    public function getListaUsuarioFull(){
        
         /*,B.usuarioNombre AS usuarioNombre
                ,C.usuarioTipoNombre as usuarioTipoNombre
                ,B.usuarioApellidos as usuarioApellidos*/
                 
        $em = $this->getEntityManager(); 
        $sql = "
                SELECT ''
                ,B.id AS id
                ,B.username AS username
                ,B.is_active AS is_active
               
                FROM usuario B
                LEFT JOIN usuarioTipo C ON B.id_usuarioTipo = C.id
                ";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    
    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery();
        echo "<br> username : $username : ";//exit();

        try {
            // El método Query::getSingleResult() lanza una excepción
            // si no hay algún registro que coincida con los criterios.
            $user = $q->getSingleResult();
            print("<pre>{");
            print_r($user);
            print("}</pre>");exit();
        } catch (NoResultException $e) {
            $message = sprintf(
                'Usuario no existe en GtSistemaBundle:User  se identifico con : "%s".',
                $username
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }
        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }

        return $this->find($user->getId());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
            || is_subclass_of($class, $this->getEntityName());
    }
}