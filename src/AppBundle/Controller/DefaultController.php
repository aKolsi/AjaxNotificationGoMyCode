<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        $currentRoute = $request->attributes->get('_route');
        $session = $request->getSession();
        $panier = $session->get('path');


        $session->set('path', $currentRoute);

        return $this->render('default/index.html.twig');
    }

    public function actualiser_nbr_notificationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('AppBundle:Notification')->findby(array('vu' => 0));
        foreach ($notifs as $notif) {
            $notif->setVu(1);
            $em->persist($notif);
            $em->flush();
        }
        return new Response();
    }

    public function actNbrNotifAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbrNotif = count($em->getRepository('AppBundle:Notification')->findby(array('vu' => 0)));

        return $this->render('default/nbrNotif.html.twig', array(
            'nbrNotif' => $nbrNotif,
        ));
    }

    public function DropDownNotifAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notifs = $em->getRepository('AppBundle:Notification')->findby(array(), array('id' => 'DESC'));
        $nbrNotif = count($em->getRepository('AppBundle:Notification')->findby(array('vu' => 0)));
        return $this->render('default/DropDownNotif.html.twig', array(
            'notifs' => $notifs, 'nbrNotif' => $nbrNotif
        ));
    }
}
