<?php declare(strict_types = 1);

namespace Mangoweb\Authorization\Bridges\NetteDI;

use Mangoweb\Authorization\AccessEvaluator;
use Mangoweb\Authorization\Authorizator;
use Mangoweb\Authorization\Bridges\NetteSecurity\NetteAccessEvaluator;
use Mangoweb\Authorization\DefaultAuthorizator;
use Nette\DI\CompilerExtension;
use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Nette\Security\IAuthorizator;


class AuthorizationExtension extends CompilerExtension
{

	/** @var array{accessEvaluator: string|null}  */
	protected $config = [
		'accessEvaluator' => NULL,
	];


	public function __construct()
	{
		$this->config['accessEvaluator'] = interface_exists(IAuthorizator::class) ? NetteAccessEvaluator::class : NULL;
	}


	public function getConfigSchema(): Schema
	{
		return Expect::structure([
			'accessEvaluator' => Expect::type('string')->nullable()->default(null),
		])->castTo('array');
	}


	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('authorizator'))
			->setType(Authorizator::class)
			->setFactory(DefaultAuthorizator::class);


		if ($this->config['accessEvaluator'] !== NULL) {
			$builder->addDefinition('accessEvaluator')
				->setType(AccessEvaluator::class)
				->setFactory($this->config['accessEvaluator']);
		}
	}

}
