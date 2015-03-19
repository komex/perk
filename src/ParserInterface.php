<?php
/**
 * This file is a part of perk project.
 *
 * (c) Andrey Kolchenko <andrey@kolchenko.me>
 */

namespace Perk;


/**
 * Interface ParserInterface
 *
 * @package Perk
 */
interface ParserInterface
{
    /**
     * Token was accepted.
     */
    const ACCEPTED = 1;
    /**
     * Unexpected token. Skip it.
     */
    const ABSTAIN = 2;
    /**
     * Block was successful parsed.
     */
    const PARSED = 3;

    /**
     * @param array|string $token
     *
     * @return int
     */
    public function parse($token);

    /**
     * Reset state.
     */
    public function reset();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param Lexer $lexer
     */
    public function setLexer(Lexer $lexer);

    /**
     * @return string
     */
    public function __toString();
}