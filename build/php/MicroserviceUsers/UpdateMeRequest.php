<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace MicroserviceUsers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>microserviceUsers.UpdateMeRequest</code>
 */
class UpdateMeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>.microserviceUsers.MeStatus status = 4;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string password = 5;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string new_password = 6;</code>
     */
    protected $new_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *     @type string $name
     *     @type string $email
     *     @type int $status
     *     @type string $password
     *     @type string $new_password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.microserviceUsers.MeStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.microserviceUsers.MeStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \MicroserviceUsers\MeStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 5;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password = 6;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     * Generated from protobuf field <code>string new_password = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password = $var;

        return $this;
    }

}

