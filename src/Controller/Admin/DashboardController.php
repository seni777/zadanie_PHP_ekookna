<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\User;
use App\Entity\Warehouse;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
//      return parent::index();
        return $this->render('dashboard/index.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Magazyn');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Warehouse', 'fas fa-list', Warehouse::class),
            MenuItem::linkToCrud('Article','fa fa-list',Article::class),
            MenuItem::linkToCrud("User", 'fa fa-user', User::class),
        ];
    }
/*
    public function configureMenuItems(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->addMenuItems([
                MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
                MenuItem::linkToCrud("User", 'fa fa-user', User::class),
                MenuItem::linkToCrud('Warehouse', 'fas fa-list', Warehouse::class),
                MenuItem::linkToCrud('Article','fa fa-list',Article::class),
            ]);

    }
*/

}
