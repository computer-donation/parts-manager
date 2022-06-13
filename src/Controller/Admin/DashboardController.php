<?php

namespace App\Controller\Admin;

use App\Entity\Cpu;
use App\Entity\Mainboard;
use App\Entity\Monitor;
use App\Entity\Psu;
use App\Entity\Ram;
use App\Entity\Vga;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Parts Manager');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::linkToCrud('Cpu', 'fa fa-tags', Cpu::class);
        yield MenuItem::linkToCrud('Mainboard', 'fa fa-file-text', Mainboard::class);
        yield MenuItem::linkToCrud('Monitor', 'fa fa-file-text', Monitor::class);
        yield MenuItem::linkToCrud('Psu', 'fa fa-file-text', Psu::class);
        yield MenuItem::linkToCrud('Ram', 'fa fa-file-text', Ram::class);
        yield MenuItem::linkToCrud('Vga', 'fa fa-file-text', Vga::class);
    }
}
