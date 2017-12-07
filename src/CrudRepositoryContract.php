<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RepositoryBoiler {

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\EntityContract
		};

		/**
		 * Interface ResourceControllerContract
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Contracts
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		interface CrudRepositoryContract
		{

			/**
			 * create()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function create(EntityContract $entity);

			/**
			 * read()
			 * @param int $id
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function read(int $id);

			/**
			 * update()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function update(EntityContract $entity);

			/**
			 * delete()
			 * @param int $id
			 *
			 * @return bool
			 */
			public function delete(int $id) : bool;
		}
	}
