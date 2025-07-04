<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class Redirect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $session = session();

        if ($session->get('isLoggedIn')) {
            $uri = service('uri');
            if ($uri->getSegment(1) === '/') {
                return redirect()->to('/');
            }
        }
    }
}
