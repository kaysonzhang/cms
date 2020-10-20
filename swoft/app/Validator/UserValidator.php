<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Validator;

use App\Annotation\Mapping\AlphaDash;
use Swoft\Validator\Annotation\Mapping\IsInt;
use Swoft\Validator\Annotation\Mapping\IsString;
use Swoft\Validator\Annotation\Mapping\Validator;

/**
 * Class UserValidator
 *
 * @since 2.0
 *
 * @Validator(name="UserValidator")
 */
class UserValidator
{

    /**
     * @IsString()(message="帐号必须数字、字母")
     *
     * @var int
     */
    protected $account;

    /**
     * @IsString()
     * @AlphaDash(message="Passwords can only be alphabet, numbers, dashes, underscores")
     *
     * @var string
     */
    protected $password;
}
