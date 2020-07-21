<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace MicroserviceUsers\SuperLoginResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>microserviceUsers.SuperLoginResponse.Result</code>
 */
class Result
{
    /**
     * Generated from protobuf enum <code>AUTHENTICATED = 0;</code>
     */
    const AUTHENTICATED = 0;
    /**
     * Generated from protobuf enum <code>NOT_FOUND = 1;</code>
     */
    const NOT_FOUND = 1;
    /**
     * Generated from protobuf enum <code>WRONG_SIGNATURE = 2;</code>
     */
    const WRONG_SIGNATURE = 2;

    private static $valueToName = [
        self::AUTHENTICATED => 'AUTHENTICATED',
        self::NOT_FOUND => 'NOT_FOUND',
        self::WRONG_SIGNATURE => 'WRONG_SIGNATURE',
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
class_alias(Result::class, \MicroserviceUsers\SuperLoginResponse_Result::class);
