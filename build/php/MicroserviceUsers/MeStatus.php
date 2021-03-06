<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace MicroserviceUsers;

use UnexpectedValueException;

/**
 * Protobuf type <code>microserviceUsers.MeStatus</code>
 */
class MeStatus
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>INVALID = 1;</code>
     */
    const INVALID = 1;
    /**
     * Generated from protobuf enum <code>FREE = 2;</code>
     */
    const FREE = 2;
    /**
     * Generated from protobuf enum <code>PAID = 3;</code>
     */
    const PAID = 3;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID => 'INVALID',
        self::FREE => 'FREE',
        self::PAID => 'PAID',
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

