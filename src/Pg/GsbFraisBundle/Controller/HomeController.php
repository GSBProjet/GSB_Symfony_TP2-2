<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;

class HomeController extends Controller
{
    public function indexAction()
    {
       $session= $this->get('request')->getSession();
       if(estConnecte($session)){
              return $this->render('PgGsbFraisBundle:accueil.html.twig');
            }
        else 
              return $this->render('PgGsbFraisBundle:Home:connexion.html.twig');
    }
    public function validerconnexionAction(){
        $session= $this->get('request')->getSession();
        $request = $this->get('request');
        $login =  $request->request->get('login');
        


        if ($login == "DAF" ) { 
          $session->set('EstDaf', true);
        }
        else {
          $session->set('EstDaf', false);
        }
       

        $mdp = $request->request->get('mdp');
        //$pdo = PdoGsb::getPdoGsb();
        $pdo = $this->get('pg_gsb_frais.pdo');
        $visiteur = $pdo->getInfosVisiteur($login,$mdp);
        if(!is_array($visiteur)){
            return $this->render('PgGsbFraisBundle:Home:connexion.html.twig',array(
               'message'=>'Erreur de login ou de mot de passe ')); 
        }
        else{
            $session->set('id',$visiteur['id']);
            $session->set('nom',$visiteur['nom']);
            $session->set('prenom',$visiteur['prenom']);
             
            return $this->render('PgGsbFraisBundle::accueil.html.twig');
        }
    } 
    public function deconnexionAction(){
        $session= $this->get('request')->getSession();
        $session->clear();
        return $this->render('PgGsbFraisBundle:Home:connexion.html.twig');
   }
	
	//fonction daf
   public function dafAction()
    {
      $pdo = $this->get('pg_gsb_frais.pdo');
      $tablettes = $pdo->getTablettes();
     return $this->render('PgGsbFraisBundle:Home:daf.html.twig', array( "tablette" => $tablettes ));
    }

       public function ajouterTabletteAction()
    { 
      if($this->get('request')->getMethod() == 'POST'){
                $pdo = $this->get('pg_gsb_frais.pdo');
                $LesLignes= $pdo->ajouterTablette();
      }
      
     return $this->render('PgGsbFraisBundle:Home:ajouterTablette.html.twig', array('lesLignes' => $lesLignes));
    }

       public function dafAffectationsAction($id)
    {
      $pdo = $this->get('pg_gsb_frais.pdo');
      $tablettes = $pdo->getAffectationsTablettes($id);

     return $this->render('PgGsbFraisBundle:Home:dafAffectations.html.twig', array( "tablette" => $tablettes ));
    }
 }
?>
