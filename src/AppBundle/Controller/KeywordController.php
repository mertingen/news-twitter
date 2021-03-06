<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/18/17
 * Time: 12:08 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Keyword;
use B\Json;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class DocumentController
 * @Route("/keyword")
 * @Security("has_role('ROLE_USER')")
 */
class KeywordController extends Controller
{

    public function getHttpService()
    {
        return $this->get('http.service');
    }

    public function getKeywordService()
    {
        return $this->get('keyword.service');
    }

    public function getUserService()
    {
        return $this->get('user.service');
    }

    public function getSessionService()
    {
        return $this->get('session.service');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list", methods={"GET"}, name="keyword-list")
     */
    public function listAction()
    {
        $userKeywords = $this->getKeywordService()->getAll(array('user' => $this->getUser()));
        if (!empty($userKeywords)) {

            $userKeyword = $userKeywords[0];
            $twitterConnection = $this->getSessionService()->get('twitterConnection');
            $tweetsData = $twitterConnection->get(
                'search/tweets',
                array(
                    'q' => $userKeyword->getName(),
                    'lang' => $userKeyword->getLanguage(),
                    'count' => $userKeyword->getCount(),
                    'result_type' => 'recent'
                )
            );

            if ($tweetsData->statuses) {
                $data = $tweetsData->statuses;
            } else {
                $data = array();
            }

        } else {
            $notificationData['msg'] = 'You do not have a keyword, you can start from here.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Info';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-add');
        }

        $message = $this->getSessionService()->getMessage();
        return $this->render('AppBundle:keyword:list.html.twig',
            array(
                'userKeywords' => $userKeywords,
                'tweetsData' => $data,
                'message' => $message
            )
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/get", methods={"POST"}, name="keyword-get")
     */
    public function getDataAction(Request $request)
    {
        $keywordId = $request->request->get('keywordId');
        if (empty($keywordId)) {
            return new JsonResponse(array(false), 404);
        }

        $where = array(
            'keywordId' => $keywordId,
            'user' => $this->getUser()
        );
        $keyword = $this->getKeywordService()->get($where);
        $twitterConnection = $this->getSessionService()->get('twitterConnection');
        $tweetsData = $twitterConnection->get(
            'search/tweets',
            array(
                'q' => $keyword->getName(),
                'lang' => $keyword->getLanguage(),
                'count' => $keyword->getCount(),
                'result_type' => 'recent'
            )
        );

        if ($tweetsData->statuses) {
            $data = $tweetsData->statuses;
        } else {
            $data = array();
        }

        return new JsonResponse($data, 200);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/add", methods={"GET"}, name="keyword-add")
     */
    public function addAction()
    {
        $message = $this->getSessionService()->getMessage();
        return $this->render('AppBundle:keyword:add.html.twig', array('message' => $message));
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/postAdd", methods={"POST"}, name="keyword-post-add")
     */
    public function postAddAction(Request $request)
    {
        $name = $request->request->get('keyword');
        $language = $request->request->get('language');
        $count = $request->request->get('count');

        if (empty($name) || empty($language) || empty($count)) {
            $notificationData['msg'] = 'Please enter require fields.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-add');
        }

        if (strlen($name) > 140) {
            $notificationData['msg'] = 'Please enter no more 140 chars.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-add');
        }

        $validKeyword = $this->getKeywordService()->getAll(array('name' => $name, 'user' => $this->getUser()));
        if ($validKeyword) {
            $notificationData['msg'] = 'Please not enter same keywords.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-add');
        }

        $keyword = new Keyword();
        $keyword->setName($name);
        $keyword->setLanguage($language);
        $keyword->setCount(intval($count));
        $keyword->setCreatedAt(new \DateTime());

        $user = $this->getUserService()->get($this->getUser());
        $keyword->setUser($user);

        $this->getKeywordService()->upsert($keyword);

        return $this->redirectToRoute('keyword-list');
    }

    /**
     * @param $keywordId
     * @return Response
     * @internal param Keyword $keyword
     * @Route("/edit/{keywordId}", methods={"GET"}, name="keyword-edit")
     */
    public function editAction($keywordId)
    {
        if (empty($keywordId)) {
            $notificationData['msg'] = 'Keyword Id not found!';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-list');
        }

        $where = array(
            'keywordId' => $keywordId,
            'user' => $this->getUser()
        );
        $keyword = $this->getKeywordService()->get($where);

        if (empty($keyword)) {
            $notificationData['msg'] = 'Keyword not found!';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-list');
        }

        $message = $this->getSessionService()->getMessage();

        return $this->render('AppBundle:keyword:edit.html.twig', array('keyword' => $keyword, 'message' => $message));
    }

    /**
     * @param $keywordId
     * @param Request $request
     * @return Response
     * @internal param Keyword $keyword
     * @Route("/postEdit/{keywordId}", methods={"POST"}, name="keyword-post-edit")
     */
    public function postEditAction($keywordId, Request $request)
    {
        if (empty($keywordId)) {
            $notificationData['msg'] = 'Keyword Id not found!';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-list');
        }

        $where = array(
            'keywordId' => $keywordId,
            'user' => $this->getUser()
        );
        $keyword = $this->getKeywordService()->get($where);

        if (empty($keyword)) {
            $notificationData['msg'] = 'Keyword not found!';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-list');
        }

        $name = $request->request->get('keyword');
        $language = $request->request->get('language');
        $count = $request->request->get('count');

        if (empty($name) || empty($language) || empty($count)) {
            $notificationData['msg'] = 'Please enter require fields.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-edit', array('keywordId' => $keyword->getKeywordId()));
        }

        if (strlen($name) > 140) {
            $notificationData['msg'] = 'Please enter no more 140 chars.';
            $notificationData['type'] = 'warning';
            $notificationData['title'] = 'Error!';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-edit', array('keywordId' => $keyword->getKeywordId()));
        }

        $validWhere = array(
            'keywordId' => $keyword->getKeywordId(),
            'name' => $name,
            'user' => $this->getUser()
        );
        $validKeyword = $this->getKeywordService()->getExcluded($validWhere);
        if ($validKeyword) {
            $notificationData['msg'] = 'Please not enter same keywords.';
            $notificationData['type'] = 'warning';
            $this->getSessionService()->addMessage($notificationData);
            return $this->redirectToRoute('keyword-edit', array('keywordId' => $keyword->getKeywordId()));
        }

        $keyword->setName($name);
        $keyword->setLanguage($language);
        $keyword->setCount($count);

        $updatedKeyword = $this->getKeywordService()->upsert($keyword);

        if ($updatedKeyword) {
            return $this->redirectToRoute('keyword-list');
        }


        return $this->render('AppBundle:keyword:edit.html.twig', array('keyword' => $keyword));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/table", methods={"GET"}, name="keyword-table")
     */
    public function tableAction()
    {
        $where = array(
            'user' => $this->getUser()
        );

        $keywords = $this->getKeywordService()->getAll($where);
        return $this->render('AppBundle:keyword:table.html.twig', array('keywords' => $keywords));
    }

    /**
     * @param $keywordId
     * @return Response
     * @internal param Keyword $keyword
     * @Route("/delete/{keywordId}", methods={"GET"}, name="keyword-delete")
     */
    public function deleteAction($keywordId)
    {
        if (empty($keywordId)) {
            return new Response(json_encode("Keyword Id Not Found!"), 404);
        }

        $where = array(
            'keywordId' => $keywordId,
            'user' => $this->getUser()
        );
        $keyword = $this->getKeywordService()->get($where);

        if (empty($keyword)) {
            return new Response(json_encode("Keyword Not Found!"), 404);
        }

        $isDeleted = $this->getKeywordService()->delete($keyword);
        if (!$isDeleted) {
            return new Response(json_encode(array('status' => false, 'message' => 'Unsuccessfully deleted.')), 404);
        }
        return new Response(json_encode(array('status' => true, 'message' => 'Successfully deleted.')), 200);
    }

}