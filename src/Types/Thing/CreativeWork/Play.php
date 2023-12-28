<?php

/**
 * @see https://schema.org/Play
 * A play is a form of literature, usually consisting of dialogue between characters, intended for theatrical performance rather than just reading.
 * Note: A performance of a Play would be a [[TheaterEvent]] or [[BroadcastEvent]] - the *Play* being the [[workPerformed]].
 */

namespace Vnetby\Schemaorg\Types\Thing\CreativeWork;

class Play extends \Vnetby\Schemaorg\Types\Thing\CreativeWork\CreativeWork
{
    const TYPE = 'Play';
}
