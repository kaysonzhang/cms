<?php declare(strict_types=1);
/**
 * 用户信息控制器
 */

namespace App\Http\Controller;

use App\Model\Dao\UserDao;
use App\Model\Entity\User;
use App\Model\Entity\Users;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Validator\Annotation\Mapping\Validate;
use App\Validator\UserValidator;
use Throwable;
use function context;

/**
 * Class UsersController
 *
 * @since 2.0
 *
 * @Controller()
 */
class UsersController
{
    /**
     * 获取用户信息
     * @RequestMapping(route="/getuserinfo",  method={"GET"})
     *
     * @param Request $request
     * @throws Throwable
     */
    public function getUserInfo(Request $request): Response
    {
        $data = Users::find(1)->toArray();
        $content = json_encode($data);

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($content);
    }

    /**
     * 创建用户
     *
     * @RequestMapping(route="/createuser",  method={"POST"})
     * @Validate(validator="UserValidator")
     * @param Request $request
     * @throws Throwable
     */
    public function createUser(Request $request): Response
    {
        $data = json_encode($request->post());

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($data);
    }

    /**
     * 修改密码
     * @RequestMapping(route="/modpass",  method={"GET"})
     *
     * @param Request $request
     * @throws Throwable
     */
    public function modPass(Request $request): Response
    {
        $content = json_encode($request);

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($content);
    }

    /**
     * 修改用户信息
     * @RequestMapping(route="/updateuser",  method={"GET"})
     *
     * @param Request $request
     * @throws Throwable
     */
    public function updateUser(Request $request): Response
    {
        $content = json_encode($request);

        return context()->getResponse()->withContentType(ContentType::JSON)->withContent($content);
    }

}
