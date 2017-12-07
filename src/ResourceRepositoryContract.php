<?php
	declare(strict_types=1);

	namespace Jkirkby91\Boilers\RepositoryBoiler {

		use Doctrine\{
			Common\Collections\Collection
		};

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\EntityContract
		};

		use Psr\{
			Http\Message\ServerRequestInterface
		};

		/**
		 * Interface ResourceControllerContract
		 *
		 * @package Jkirkby91\LumenRestServerComponent\Contracts
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		interface ResourceRepositoryContract
		{

			/**
			 * index()
			 * @return \Doctrine\Common\Collections\Collection
			 */
			public function index() : Collection;

			/**
			 * show()
			 * @param int $id
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function show(int $id) : EntityContract;

			/**
			 * store()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function store(EntityContract $entity) : EntityContract;

			/**
			 * update()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function update(EntityContract $entity) : EntityContract;

			/**
			 * destroy()
			 * @param int $id
			 *
			 * @return bool
			 */
			public function destroy(int $id) : bool;

		}
	}
