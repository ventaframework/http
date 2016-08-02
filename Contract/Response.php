<?php declare(strict_types = 1);

namespace Abava\Http\Contract;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Interface ResponseContract
 *
 * @package Abava\Http\Contract
 */
interface Response extends ResponseInterface
{
    /**
     * Writes provided string to response body stream
     *
     * @param string $body
     * @return Response
     */
    public function append(string $body): Response;

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withStatus($code, $reasonPhrase = '');

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withProtocolVersion($version);

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withAddedHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withoutHeader($name);

    /**
     * {@inheritdoc}
     * @return Response
     */
    public function withBody(StreamInterface $body);

}