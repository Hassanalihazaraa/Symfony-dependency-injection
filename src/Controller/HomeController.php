<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dash;
use App\Entity\Master;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        if ($request->request->get('form')) {
            $transform = $request->request->get('form')['select'];
            $input = $request->request->get('form')['message'];
            $logger = new Logger('message');
            $streamHandler = new StreamHandler(__DIR__ . '/../../log/log.info', Logger::INFO);
            $logger->pushHandler($streamHandler);
            if ($transform === 'Capitalize') {
                $transformed = new Capitalize();
            } else {
                $transformed = new Dash();
            }
            $master = new Master($input, $transformed, $logger);
        }

        $form = $this->createForm(Form::class);
        return $this->render('Homepage/index.html.twig', [
            'form' => $form->createView(),
            'message' => $master->getMessage()]);
    }
}

