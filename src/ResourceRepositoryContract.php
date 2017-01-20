<?php

namespace Jkirkby91\Boilers\RepositoryBoiler;

use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;
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
     * @param Entity $entity
     * @return mixed
     */
    public function store(Entity $entity);

    /**
     * @param Entity $entity
     * @return mixed
     */
    public function update(Entity $entity);

    /**
     * Destroy single resource
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id);

}
