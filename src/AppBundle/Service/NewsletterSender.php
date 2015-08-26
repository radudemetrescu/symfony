<?php

namespace AppBundle\Service;

use JMS\DiExtraBundle\Annotation\Service;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Parser;

/**
 * @Service("app.newsletter_sender")
 */
class NewsletterSender
{
    public function sendAction()
    {
        $yaml = new Parser();
        $values = $yaml->parse(file_get_contents(__DIR__ . "/../Resources/config/newsletter.yml"));

        foreach ($values['newsletter']['email_list'] as $value)
        {
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('Invalid email address');
            }
        }

        return new Response();
    }

    public function test()
    {
        echo "A";
    }
}