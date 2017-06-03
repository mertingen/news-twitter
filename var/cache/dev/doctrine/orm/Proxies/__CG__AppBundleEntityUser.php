<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \AppBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'userId', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'twitterId', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accessToken', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'secretAccessToken', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'image'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'userId', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'twitterId', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'accessToken', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'secretAccessToken', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'keywords', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'image'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUserId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterId($twitterId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterId', [$twitterId]);

        return parent::setTwitterId($twitterId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterId', []);

        return parent::getTwitterId();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function addKeyword(\AppBundle\Entity\Keyword $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addKeyword', [$keyword]);

        return parent::addKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function removeKeyword(\AppBundle\Entity\Keyword $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeKeyword', [$keyword]);

        return parent::removeKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', []);

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessToken($accessToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccessToken', [$accessToken]);

        return parent::setAccessToken($accessToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccessToken', []);

        return parent::getAccessToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecretAccessToken($secretAccessToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecretAccessToken', [$secretAccessToken]);

        return parent::setSecretAccessToken($secretAccessToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecretAccessToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecretAccessToken', []);

        return parent::getSecretAccessToken();
    }

}