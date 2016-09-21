<?php

namespace Jkirkby91\Boilers\RepositoryBoiler;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface ResourceControllerContract
 *
 * @package Jkirkby91\LumenRestServerComponent\Contracts
 * @author James Kirkby <jkirkby91@gmail.com>
 */
interface ResourceRepositoryContract
{

    /**
     * Return all for resource
     *
     * @return mixed
     */
    public function index();

    /**
     * show individual resource
     *
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param ServerRequestInterface $request
     * @return mixed
     */
    public function store(ServerRequestInterface $request);

    /**
     * @param ServerRequestInterface $request
     * @param $id
     * @return mixed
     */
    public function update(ServerRequestInterface $request,$id);

    /**
     * Destroy single resource
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id);

}
