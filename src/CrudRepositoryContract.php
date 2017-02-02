<?php

namespace Jkirkby91\Boilers\RepositoryBoiler;

use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;

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
    public function create(Entity $entity);

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
    public function delete($id);
}
