<?php declare(strict_types=1);

namespace HandBackendRedirect\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends AbstractController
{
    /**
     * @RouteScope(scopes={"storefront", "administration"})
     * @Route("/backend", name="administration.backend", methods={"GET"})
     */
    public function backend(): Response
    {
        return new RedirectResponse('/admin',  Response::HTTP_MOVED_PERMANENTLY);
    }
}
