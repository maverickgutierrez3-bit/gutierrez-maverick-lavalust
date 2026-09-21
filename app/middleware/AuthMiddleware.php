defined( 'PREVENT_DIRECT_ACCESS') OR exit ('No direct script access allowed'); 
  class AuthMiddleware
    {
        public funtion handle(Closure $next)
        }
            if (!empty($_SESSION['logged_in'])) {
                return $next();
            }

            // Not logged_in - redirect to the login page
        }
    }
