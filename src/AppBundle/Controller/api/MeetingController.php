<?php

namespace AppBundle\Controller\api;

use AppBundle\Entity\Meeting;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Meeting controller.
 *
 * @Route("api/meetings")
 */
class MeetingController extends Controller
{
    /**
     * Lists all meeting entities.
     *
     * @Route("/", name="api_meeting_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meetings = $em->getRepository('AppBundle:Meeting')->findAllApi();
        $meetings = ['meetings' => $meetings];

        return new JsonResponse($meetings);
    }
}
