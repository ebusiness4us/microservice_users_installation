<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace MicroserviceUsers\UpdateMeResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>microserviceUsers.UpdateMeResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>UPDATED = 0;</code>
     */
    const UPDATED = 0;
    /**
     * Generated from protobuf enum <code>NOT_FOUND = 1;</code>
     */
    const NOT_FOUND = 1;
    /**
     * Generated from protobuf enum <code>INVALID_CREDENTIAL = 2;</code>
     */
    const INVALID_CREDENTIAL = 2;
    /**
     * Generated from protobuf enum <code>EMAIL_ALREADY_EXISTS = 3;</code>
     */
    const EMAIL_ALREADY_EXISTS = 3;
    /**
     * Generated from protobuf enum <code>PASSWORD_DOES_NOT_MATCH = 4;</code>
     */
    const PASSWORD_DOES_NOT_MATCH = 4;
    /**
     * Generated from protobuf enum <code>INVALID_PASSWORD_REQUIREMENTS = 5;</code>
     */
    const INVALID_PASSWORD_REQUIREMENTS = 5;
    /**
     * Generated from protobuf enum <code>INVALID_EMAIL = 6;</code>
     */
    const INVALID_EMAIL = 6;

    private static $valueToName = [
        self::UPDATED => 'UPDATED',
        self::NOT_FOUND => 'NOT_FOUND',
        self::INVALID_CREDENTIAL => 'INVALID_CREDENTIAL',
        self::EMAIL_ALREADY_EXISTS => 'EMAIL_ALREADY_EXISTS',
        self::PASSWORD_DOES_NOT_MATCH => 'PASSWORD_DOES_NOT_MATCH',
        self::INVALID_PASSWORD_REQUIREMENTS => 'INVALID_PASSWORD_REQUIREMENTS',
        self::INVALID_EMAIL => 'INVALID_EMAIL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \MicroserviceUsers\UpdateMeResponse_Result::class);

