<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/18/17
 * Time: 12:08 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Keyword;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list", methods={"GET"}, name="keyword-list")
     */
    public function listAction()
    {
        $userKeywords = $this->getKeywordService()->getAll(array('user' => $this->getUser()));
        if (!empty($userKeywords)) {
            $user = $this->getUser();

            $tweetWhere = array(
                'accessToken' => $user->getAccessToken(),
                'secretAccessToken' => $user->getSecretAccessToken()
            );

            $keywordNames = [];
            foreach ($userKeywords as $userKeyword) {
                $keywordNames[] = $userKeyword->getName();
                $tweetWhere['data'][] = array(
                    'keyword' => $userKeyword->getName(),
                    'language' => $userKeyword->getLanguage(),
                    'count' => $userKeyword->getCount()
                );
            }

            $host = $this->getParameter('api_host') . '/tweets';
            $tweetsData = $this->getHttpService()->generatePostData($host, $tweetWhere);
            if ($tweetsData['status']) {
                $data = [];
                foreach ($tweetsData['tweets'] as $keywordKey => $tweetData) {
                    $data[$keywordNames[$keywordKey]] = $tweetData;
                }
            }
        }

        return $this->render('AppBundle:keyword:list.html.twig', array('keywords' => $data));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/add", methods={"GET"}, name="keyword-add")
     */
    public function addAction()
    {
        return $this->render('AppBundle:keyword:add.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/postAdd", methods={"POST"}, name="keyword-post-add")
     */
    public function postAddAction(Request $request)
    {
        $name = $request->request->get('keyword');
        $language = $request->request->get('language');
        $count = $request->request->get('count');

        if (empty($name) || empty($language) || empty($count)) {
            die('boş yerleri doldur.');
        }

        $validKeyword = $this->getKeywordService()->getAll(array('name' => $name, 'user' => $this->getUser()));
        if ($validKeyword) {
            die('aynı kelime girilemez');
        }

        $keyword = new Keyword();
        $keyword->setName($name);
        $keyword->setLanguage($language);
        $keyword->setCount(intval($count));
        $keyword->setCreatedAt(new \DateTime());

        $user = $this->getUserService()->get($this->getUser());
        $keyword->setUser($user);

        $keyword = $this->getKeywordService()->upsert($keyword);
        if (!$keyword) {
            die('hata!!!');
        }

        return $this->redirectToRoute('keyword-list');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/edit/{keywordId}", methods={"GET"}, name="keyword-edit")
     */
    public function editAction(Keyword $keyword)
    {
        if (empty($keyword)) {
            die('keyword yok');
        }

        return $this->render('AppBundle:keyword:edit.html.twig', array('keyword' => $keyword));
    }

    /**
     * @param Keyword $keyword
     * @param Request $request
     * @return Response
     * @Route("/postEdit/{keywordId}", methods={"POST"}, name="keyword-post-edit")
     */
    public function postEditAction(Keyword $keyword, Request $request)
    {
        if (empty($keyword)) {
            die('keyword yok');
        }

        $name = $request->request->get('keyword');
        $language = $request->request->get('language');
        $count = $request->request->get('count');

        if (empty($name) || empty($language) || empty($count)) {
            die('boş yerleri doldur.');
        }

        $validWhere = array(
            'keywordId' => $keyword->getKeywordId(),
            'name' => $name,
            'user' => $this->getUser()
        );
        $validKeyword = $this->getKeywordService()->getExcluded($validWhere);
        if ($validKeyword) {
            die('aynı kelime girilemez');
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
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/delete/{keywordId}", methods={"GET"}, name="keyword-delete")
     */
    public function deleteAction(Keyword $keyword)
    {
        if (empty($keyword)) {
            return new Response(json_encode("Placement Not Found!"), 404);
        }

        $isDeleted = $this->getKeywordService()->delete($keyword);
        if (!$isDeleted) {
            return new Response(json_encode(array('status' => false, 'message' => 'Unsuccessfully deleted.')), 404);
        }
        return new Response(json_encode(array('status' => true, 'message' => 'Successfully deleted.')), 200);
    }

}