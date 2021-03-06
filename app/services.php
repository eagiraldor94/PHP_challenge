<?php
declare(strict_types=1);

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([

        Swift_Mailer::class => function() {
            $host = $_ENV['MAILER_HOST'] ?? 'smtp.mailtrap.io';
            $port = intval($_ENV['MAILER_PORT']) ?? 465;
            $username = $_ENV['MAILER_USERNAME'] ?? 'test';
            $password = $_ENV['MAILER_PASSWORD'] ?? 'test';

            $transport = (new Swift_SmtpTransport($host, $port,'tls'))
                ->setUsername($username)
                ->setPassword($password)
                ->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)))
            ;

            return new Swift_Mailer($transport);
        },
    ]);

};
