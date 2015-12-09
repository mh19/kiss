<?php

/**
 * @author Petr Pliska <petr.pliska@post.cz>
 */

namespace App\Module\Web\Controller;

/**
 * PSR-7 interfaces
 * @see http://www.php-fig.org/psr/psr-7/
 */
use Psr\Http\Message\{RequestInterface, ResponseInterface};

class IndexController extends AbstractWebController
{

    /**
     * @Inject
     * @var App\Module\Web\Controller\TestController
     */
    protected $testController;

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $reseponse
     *
     * @return RequestInterface
     */
    public function defaultAction(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
       // $command = new \App\Service\Command\User\Register('alice@example.com', 'secret');
       // $this->commandBus->handle($command);

        // $this->logger->addInfo('Some event');
//        $this->notifier->send(
//             (new Notification())
//                ->setTitle('Notification title')
//                ->setBody('This is the body of your notification'));
        return $this->view->render('web/index/default.latte');
    }
}
