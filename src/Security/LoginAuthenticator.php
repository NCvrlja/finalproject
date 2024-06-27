<?php

namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UserRepository;
use App\Entity\User;
use Twig\Environment;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class LoginAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;
    private $security;
    private $urlGenerator;
    private $userRepository;
    private $twig;

    private $em;

    public const LOGIN_ROUTE = 'app_login';
    

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        Security $security,
        UserRepository $userRepository,
        Environment $twig,
        EntityManagerInterface $em
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->security = $security;
        $this->userRepository = $userRepository;
        $this->twig = $twig;
        $this->em = $em;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        if($user = $this->em->getRepository(User::class)->findOneBy(['email' =>$email])){
            $ban= $user->isStatus();
                    if(!$ban){
                    throw new  CustomUserMessageAuthenticationException('Your account is banned!');
                    }
        }
        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        if ($this->security->isGranted("ROLE_ADMIN")) {
            return new RedirectResponse($this->urlGenerator->generate('app_meals_index'));
        } else {
            return new RedirectResponse($this->urlGenerator->generate('app_user_access'));
        }

        
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

    // public function login(AuthenticationUtils $authenticationUtils): Response
    // {
    //     $lastEmail = $authenticationUtils->getLastUsername(); // get last email

    //     // get error
    //     $error = $authenticationUtils->getLastAuthenticationError();

    //     // get user from email
    //     $user = $this->userRepository->findOneBy(['email' => $lastEmail]);

    //     // checking user status
    //     if ($user instanceof User && !$user->isStatus()) {
    //         $error = 'You are banned. Contact the administrator for further information.';
    //     }

    //     $content = $this->twig->render('security/login.html.twig', [
    //         'last_email' => $lastEmail,
    //         'error' => $error,
    //     ]);

    //     return new Response($content);
    // }
}
