<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/18/17
 * Time: 4:25 PM
 */

namespace AppBundle\Service;


use AppBundle\Entity\Keyword;
use Doctrine\ORM\EntityManager;

class KeywordService
{
    private $entityManager;

    /**
     * KeywordService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param Keyword $keyword
     * @return Keyword|bool
     */
    public function upsert(Keyword $keyword)
    {
        $this->entityManager->persist($keyword);
        $this->entityManager->flush();
        return ($keyword->getKeywordId()) ? $keyword : false;
    }

    /**
     * @param $keywordId
     * @return bool|null|object
     */
    public function get($keywordId)
    {
        if (empty($keywordId)) {
            return false;
        }

        $keywordRepo = $this->entityManager->getRepository('AppBundle:Keyword');
        return $keywordRepo->findOneBy(array('keywordId' => $keywordId));

    }

    /**
     * @param array $where
     * @return mixed
     * @internal param array $names
     * @internal param array $keywordIds
     */
    public function getExcluded($where = array())
    {
        $keywordRepo = $this->entityManager->getRepository('AppBundle:Keyword');
        return $keywordRepo->getExcludedKeywords($where);
    }

    /**
     * @param array $where
     * @return array
     */
    public function getAll($where = array())
    {
        $keywordRepo = $this->entityManager->getRepository('AppBundle:Keyword');
        return $keywordRepo->findBy($where, array('name' => 'ASC'));
    }

    /**
     * @param Keyword $keyword
     * @return bool
     */
    public function delete(Keyword $keyword)
    {
        if (empty($keyword)) {
            return false;
        }
        $this->entityManager->remove($keyword);
        $this->entityManager->flush();
        return true;
    }
}