<?php

namespace Oneup\PermissionBundle\Metadata\Mapping\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class ObjectPermission
{
    private $permissions;

    public function __construct($value)
    {
        if (array_key_exists('value', $value)) {
            $this->permissions = $value['value'];
        }
    }

    public function getPermissions()
    {
        return $this->permissions;
    }
}
