<?php
declare(strict_types=1);
namespace Adressbuch;
class Contact
{
    private string $name;
    private string $email;
    private string $phone;
    private string $twitter;
    private int $id;
    private string $contacttype;

    public function __construct(string $name, string $email, string $phone, string $twitter, int $id, string $contacttype)
    {
        $this->email = $email;
        $this->name = $name;
        $this->id = $id;
        $this->phone = $phone;
        $this->twitter = $twitter;
        $this->contacttype = $contacttype;
    }

    /**
     * @return string
     */
    public function get_contacttype(): string
    {
        return $this->contacttype;
    }

    /**
     * @param  string  $contacttype
     */
    public function set_contacttype(string $contacttype): void
    {
        $this->contacttype = $contacttype;
    }

    /**
     * @return string
     */
    public function get_name(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     */
    public function set_name(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function get_email(): string
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     */
    public function set_email(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function get_phone(): string
    {
        return $this->phone;
    }

    /**
     * @param  string  $phone
     */
    public function set_phone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function get_twitter(): string
    {
        return $this->twitter;
    }

    /**
     * @param  string  $twitter
     */
    public function set_twitter(string $twitter): void
    {
        $this->twitter = $twitter;
    }

    /**
     * @return int
     */
    public function get_id(): int
    {
        return $this->id;
    }

    /**
     * @param  int  $id
     */
    public function set_id(int $id): void
    {
        $this->id = $id;
    }

}