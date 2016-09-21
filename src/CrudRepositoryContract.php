<?php

namespace Jkirkby91\Boilers\RepositoryBoiler;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface ResourceControllerContract
 *
 * @package Jkirkby91\LumenRestServerComponent\Contracts
 * @author James Kirkby <jkirkby91@gmail.com>
 */
interface CrudRepositoryContract
{

    /**
     * Return all for resource
     *
     * @return mixed
     */
    public function create(ServerRequestInterface $request);

    /**
     * show individual resource
     *
     * @param $id
     * @return mixed
     */
    public function read($id);

    /**
     * Store a new resource
     *
     * @param ServerRequestInterface $request
     * @return mixed
     */
    public function update(ServerRequestInterface $request);

    /**
     * Destroy single resource
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
