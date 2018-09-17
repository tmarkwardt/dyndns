<?php
/**
 * @author Torsten Markwardt
 * @copyright 2018 - Torsten Markwardt
 * @license https://opensource.org/licenses/MIT MIT License
 * @version 1.0
 */
namespace website\weyand\dyndns\authentication;
use website\weyand\dyndns;

/**
 * Description of param
 *
 * @author Torsten Markwardt
 */
class param {
    
    public static function authenticate() {
	if( isset( $_GET['login']) && isset( $_GET['password'])) {
	    if( $_GET['login'] === dyndns\config::basic_auth_username && $_GET['password'] === dyndns\config::basic_auth_password) {
		return true;
	    }
	}
        dyndns\status::sendErrorMessage('Error: use parameter authentication', true, 403);
    }
}
