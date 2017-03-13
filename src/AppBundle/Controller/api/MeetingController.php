<?php

namespace AppBundle\Controller\api;

use AppBundle\Entity\Meeting;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Meeting controller.
 *
 * @Route("api/meeting")
 */
class MeetingController extends Controller
{
    /**
     * Lists all meeting entities.
     *
     * @Route("/", name="meeting_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meetings = $em->getRepository('AppBundle:Meeting')->findAll();

        return $this->render('meeting/index.html.twig', array(
            'meetings' => $meetings,
        ));
    }
}
