<?php
namespace Aws\DynamoDb;

use Aws\AwsClient;
use Aws\DynamoDb\Session\SessionHandler;
use GuzzleHttp\Stream\Stream;

/**
 * This client is used to interact with the **Amazon DynamoDB** service.
 */
class DynamoDbClient extends AwsClient
{
    /**
     * Convenience method for instantiating and registering the DynamoDB
     * Session handler with this DynamoDB client object.
     *
     * @param array $config Array of options for the session handler factory
     *
     * @return SessionHandler
     */
    public function registerSessionHandler(array $config = [])
    {
        $handler = SessionHandler::fromClient($this, $config);
        $handler->register();

        return $handler;
    }
}