<?php

declare(strict_types=1);

namespace Orchid\Access;

use IteratorAggregate;

interface UserInterface
{
    /**
     * Returns all role for the user.
     *
     * @return IteratorAggregate
     */
    public function getRoles();

    /**
     * Display name.
     *
     * @return string
     */
    public function getNameTitle() : string;

    /**
     * Display sub.
     *
     * @return string
     */
    public function getSubTitle() : ?string;

    /**
     * Display avatar.
     *
     * @return string
     */
    public function getAvatar(): ?string;
}
