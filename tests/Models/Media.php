<?php

namespace Auresbug\Media\Tests\Models;

use Auresbug\Media\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    protected $fillable = [
        'name', 'file_name', 'disk', 'mime_type', 'size', 'custom_attribute',
    ];
}
