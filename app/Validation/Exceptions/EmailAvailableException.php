 <?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 07/07/2017
 * Time: 16:05
 */

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

class EmailAvailableException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT =>[
            self::STANDARD => 'Email is already taken.',
        ]
    ];

}