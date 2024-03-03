<?php

namespace NotificationChannels\Webex\Exceptions;

use Exception;

class CouldNotCreateNotification extends Exception
{
    public static function invalidParentId(string $id): CouldNotCreateNotification
    {
        return new self("The id `$id` is not a valid message resource identifier.");
    }

    public static function failedToDetermineRecipient(): CouldNotCreateNotification
    {
        return new self('Failed to determine the message recipient.');
    }

    public static function messageWithFileAndAttachmentNotSupported(): CouldNotCreateNotification
    {
        return new self('Sending local file(s) and attachment(s) in the same message is not supported');
    }

    public static function multipleFilesNotSupported(): CouldNotCreateNotification
    {
        return new self('Sending multiple files in the same message is not supported');
    }

    public static function multipleAttachmentsNotSupported(): CouldNotCreateNotification
    {
        return new self('Sending multiple attachments in the same message is not supported');
    }
}
