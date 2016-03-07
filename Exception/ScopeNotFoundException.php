<?php

namespace OAuth2\ServerBundle\Exception;

class ScopeNotFoundException extends \Exception
{
    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Scope could not be found.';
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return serialize(array(
            parent::serialize(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($str)
    {
        list($parentData) = unserialize($str);

        parent::unserialize($parentData);
    }
}
