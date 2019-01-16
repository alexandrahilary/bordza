<?php

namespace AppBundle\DataTransformer;

use AppBundle\Entity\Inscription;
use AppBundle\Entity\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ShapeToNumberTransformer implements DataTransformerInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Transforms an object (issue) to a string (number).
     *
     * @param  Session|null $session
     * @return string
     */
    public function transform($session)
    {
        if (null === $session) {
            return '';
        }

        return $session->getId();
    }

    /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $personneNumber
     * @return Session|null
     * @throws TransformationFailedException if object (session) is not found.
     */
    public function reverseTransform($sessionNumber)
    {
        // no issue number? It's optional, so that's ok
        if (!$sessionNumber) {
            return;
        }

        $session = $this->entityManager
            ->getRepository(Session::class)
            // query for the issue with this id
            ->find($sessionNumber)
        ;

        if (null === $session) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An issue with number "%s" does not exist! gnagnagna',
                $sessionNumber
            ));
        }

        return $session;
    }
}
