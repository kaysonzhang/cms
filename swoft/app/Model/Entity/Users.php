<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;

/**
 *
 * Class Users
 *
 * @since 2.0
 *
 * @Entity(table="users", pool="users.pool")
 */
class Users extends Model
{

    /**
     * @Id()
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * @Column()
     *
     * @var string
     */
    private $account;

    /**
     * @Column()
     *
     * @var string
     */
    private $password;

    /**
     * @Column()
     *
     * @var string
     */
    private $nick_name;

    /**
     * @Column()
     *
     * @var int
     */
    private $create_time;

    /**
     * @Column()
     *
     * @var string
     */
    private $form_code;

    /**
     * @Column()
     *
     * @var string
     */
    private $email;

    /**
     * @Column()
     *
     * @var int
     */
    private $phone;

    /**
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @param int|null $uid
     */
    public function setUid(?int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getNickName(): string
    {
        return $this->nick_name;
    }

    /**
     * @param string $nick_name
     */
    public function setNickName(string $nick_name): void
    {
        $this->nick_name = $nick_name;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->create_time;
    }

    /**
     * @param int $create_time
     */
    public function setCreateTime(int $create_time): void
    {
        $this->create_time = $create_time;
    }

    /**
     * @return string
     */
    public function getFormCode(): string
    {
        return $this->form_code;
    }

    /**
     * @param string $form_code
     */
    public function setFormCode(string $form_code): void
    {
        $this->form_code = $form_code;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     */
    public function setPhone(int $phone): void
    {
        $this->phone = $phone;
    }

}
