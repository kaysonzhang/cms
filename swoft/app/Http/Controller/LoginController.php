<?php declare(strict_types=1);
/**
 * 登录验证控制器
 */

namespace App\Http\Controller;

use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Throwable;
use function context;

/**
 * Class LoginController
 *
 * @since 2.0
 *
 * @Controller()
 */
class LoginController
{
    /**
     * @RequestMapping(route="/login",  method={"GET"})
     *
     * @param Request $request
     * @throws Throwable
     */
    public function login(Request $request): Response
    {
        $content  = json_encode($request);

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($content);
    }

    /**
     * @RequestMapping(route="/logout",  method={"GET"})
     *
     * @param Request $request
     * @throws Throwable
     */
    public function logout(Request $request): Response
    {
        $content  = json_encode($request);

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($content);
    }

}
