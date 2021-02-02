<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    //public function index(Request $request, MailerInterface $mailer)
    public function index(Request $request)
    {
        $contactForm = $this->createForm(ContactType::class);
        $contact = $contactForm->handleRequest($request);

        if($contactForm->isSubmitted() && $contactForm->isValid()) {

            // EMAIL qu'on reçoit de la personne qui nous contacte
            // $email = (new TemplatedEmail())
            // ->from($contact->get('email')->getData())
            // ->to('you@example.com') // il faut récupérer l'adresse email écris dans le formulaire
            // ->subject('Contact Micro-Entreprise Cyril Leger')
            // ->htmlTemplate('emails/contact.html.twig')
            // ->context(
            //     ['email'=>'email du formulaire']
            // );
    
            // $mailer->send($email);
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $contactForm->createView()
        ]);
    }
}
